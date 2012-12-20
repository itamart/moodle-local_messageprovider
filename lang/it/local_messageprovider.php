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
 * Stringhe internazionalizzazione.
 *
 * @package    local
 * @subpackage messageprovider
 * @copyright  2012 Itamar Tzadok
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Message provider';

$string['messageprovider:newselfregistration'] = 'Notifiche di una nuova iscrizione via email';
$string['subject'] = '{$a->sitename}: Nuovo account via email per {$a->userfullname}';
$string['content'] = 'Un nuovo accout è stato creato per {$a->userfullname} ({$a->username}, {$a->email}) di {$a->city}, {$a->country}. Per vedere il suo profilo: {$a->userprofilelink}.';


/* Course completed */
$string['messageprovider:coursecompleted'] = 'Corso completato';
$string['cc_subject'] = '{$a->sitename}: corso {$a->coursefullname} completato!';
$string['cc_content'] = '{$a->userfullname} ha completato il corso {$a->coursefullname}. Guarda il {$a->coursereportlink} del corso.';