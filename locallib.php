<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    local
 * @subpackage messageprovider
 * @copyright  2012 Itamar Tzadok
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') or die;

/**
 * Event handler for self registration user created event
 */
class self_registration_handler {
    public static function notify_admin($user) {
        global $CFG, $SITE;

        // Skip if not auth email
        if (empty($user->auth) or $user->auth !== 'email') {
            return true;
        }

        // Prepare message
        $userfullname = fullname($user);
        $userprofilelink = html_writer::link(new moodle_url('/user/view.php', array('id' => $user->id)), $userfullname);

        $sitename = format_string($SITE->fullname);
        $subjectdata = (object) array(
            'sitename' => $sitename,
            'userfullname' => $userfullname
        );
        $subject = get_string('subject', 'local_messageprovider', $subjectdata);
        $user->userprofilelink = $userprofilelink;
        $user->userfullname = $userfullname;
        $content = get_string('content', 'local_messageprovider', $user);
        $contenthtml = text_to_html($content, false, false, true);
        $admin = get_admin();

        // Send message
        $message = new object;
        $message->siteshortname   = format_string($SITE->shortname);
        $message->component       = 'local_messageprovider';
        $message->name            = 'newselfregistration';
        $message->userfrom        = $admin;
        $message->userto          = $admin;
        $message->subject         = $subject;
        $message->fullmessage     = $content;
        $message->fullmessageformat = FORMAT_HTML;
        $message->fullmessagehtml = $contenthtml;
        $message->smallmessage    = '';
        $message->notification    = 1;

        message_send($message);

        return true;
    }

}

/**
 * Event handler for course_completed event
 */
class completion_course_handler {
    public static function notify_admin($course_completion) {
        global $DB, $CFG, $SITE;

        /* Getting user infos */
        $user = $DB->get_record('user',
                                array('id' => $course_completion->userid));

        /* Getting course infos */
        $course = $DB->get_record('course',
                                  array('id' => $course_completion->course));

        // Prepare message
        $subjectdata = (object) array(
                                      'sitename' => $SITE->fullname,
                                      'coursefullname' => $course->fullname,
                                      );
        $subject = get_string('cc_subject', 'local_messageprovider',$subjectdata);


        $coursereportlink = html_writer::link(new moodle_url('/report/completion/index.php',
                                                             array('course' => $course->id)), 'report');

        $contentdata = (object) array(
                                      'coursefullname' => $course->fullname,
                                      'userfullname' => fullname($user),
                                      'coursereportlink' => $coursereportlink,
                                      );
        $content = get_string('cc_content',
                              'local_messageprovider', $contentdata);

        $contenthtml = text_to_html($content, false, false, true);

        $admin = get_admin();

        // Send message
        $message = new object;
        $message->siteshortname   = format_string($SITE->shortname);
        $message->component       = 'local_messageprovider';
        $message->name            = 'coursecompleted';
        $message->userfrom        = $admin;
        $message->userto          = $admin;
        $message->subject         = $subject;
        $message->fullmessage     = $content;
        $message->fullmessageformat = FORMAT_HTML;
        $message->fullmessagehtml = $contenthtml;
        $message->smallmessage    = '';
        $message->notification    = 1;

        message_send($message);

        return true;
    }
}
