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
 * Language strings
 *
 * @package    local
 * @subpackage messageprovider
 * @copyright  2012 Itamar Tzadok
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Message provider';

$string['messageprovider:newselfregistration'] = 'New self registration notification';
$string['subject'] = '{$a->sitename}: New self-registration account for {$a->userfullname}';
$string['content'] = 'A new self-registration account has been created for {$a->userfullname} ({$a->username}, {$a->email}) from {$a->city}, {$a->country}. See {$a->userprofilelink} profile for more details.';

/* Course completed */
$string['messageprovider:coursecompleted'] = 'A course has been completed';
$string['cc_subject'] = '{$a->sitename}: course {$a->coursefullname} completed!';
$string['cc_content'] = 'The course {$a->coursefullname} has been completed by {$a->userfullname}. See the course {$a->coursereportlink}.';