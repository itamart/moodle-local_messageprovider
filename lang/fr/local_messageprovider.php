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

$string['messageprovider:newselfregistration'] = 'Notification d\'une nouvelle inscription';
$string['subject'] = '{$a->sitename}: Nouvelle demande de compte pour {$a->userfullname}';
$string['content'] = 'Une nouvelle demande de compte a eu lieu pour {$a->userfullname} ({$a->username}, {$a->email}) de {$a->city}, {$a->country}. Voir son profil {$a->userprofilelink} pour plus de détails.';


/* Course completed */
$string['messageprovider:coursecompleted'] = 'A cours était terminé';
$string['cc_subject'] = '{$a->sitename}: cours {$a->coursefullname} terminé!';
$string['cc_content'] = '{$a->userfullname} a terminé le cours {$a->coursefullname}. Voir le {$a->coursereportlink} de cours.';