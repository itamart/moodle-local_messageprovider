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
 * Event handler definition.
 *
 * @package    local
 * @subpackage messageprovider
 * @copyright  2012 Itamar Tzadok
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') or die;

/* List of handlers */
$handlers = array (
    'user_created' => array (
        'handlerfile'      => '/local/messageprovider/locallib.php',
        'handlerfunction'  => array('self_registration_handler', 'notify_admin'),
        'schedule'         => 'instant',
        'internal'         => 1,
    ),

    'course_completed' => array (
        'handlerfile'      => '/local/messageprovider/locallib.php',
        'handlerfunction'  => array('completion_course_handler', 'notify_admin'),
        'schedule'         => 'instant',
        'internal'         => 1,
    ),
);
