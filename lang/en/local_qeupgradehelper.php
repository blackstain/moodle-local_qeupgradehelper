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
 * Question engine upgrade helper langauge strings.
 *
 * @package    local
 * @subpackage qeupgradehelper
 * @copyright  2010 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['actions'] = 'Actions';
$string['alreadydone'] = 'Everything has already been converted';
$string['areyousure'] = 'Are you sure?';
$string['areyousuremessage'] = 'Do you wish to proceed with upgrading all {$a->numtoconvert} attempts at quiz \'{$a->name}\' in course {$a->shortname}?';
$string['areyousureresetmessage'] = 'Quiz \'{$a->name}\' in course {$a->shortname} has {$a->totalattempts} attempts, of which {$a->convertedattempts} were upgraded from the old system. Of those, {$a->resettableattempts} can be reset, for later re-conversion. Do you want to proceed with this?';
$string['attemptstoconvert'] = 'Attempts needing conversion';
$string['backtoindex'] = 'Back to the main page';
$string['conversioncomplete'] = 'Conversion complete';
$string['convertattempts'] = 'Convert attempts';
$string['convertquiz'] = 'Convert attempts...';
$string['convertedattempts'] = 'Converted attempts';
$string['cronsetup'] = 'Configure cron';
$string['cronsetup_desc'] = 'You can configure cron to complete the upgrade of quiz attempt data automatically.';
$string['gotoindex'] = 'Back to the list of quizzes that can be upgraded';
$string['gotoquizreport'] = 'Go to the reports for this quiz, to check the upgrade';
$string['gotoresetlink'] = 'Go to the list of quizzes that can be reset';
$string['invalidquizid'] = 'Invaid quiz id. Either the quiz does not exist, or it has no attempts to convert.';
$string['listpreupgrade'] = 'List quizzes and attempts';
$string['listpreupgrade_desc'] = 'This will show a report of all the quizzes on the system and how many attempts they have. This will give you an idea of the scope of the upgrade you have to do.';
$string['listpreupgradeintro'] = 'These are the number of quiz attempts that will need to be processed when you upgrade your site. A few tens of thousands is no worry. Much beyond that and you need to think carefully.';
$string['listtodo'] = 'List quizzes still to upgrade';
$string['listtodo_desc'] = 'This will show a report of all the quizzes on the system (if any) that have attempts that still need to be upgraded to the new question engine.';
$string['listtodointro'] = 'These are all the quizzes with attempt data that still needs to be converted. You can convert the attempts by clicking the link.';
$string['listupgraded'] = 'List already upgrade quizzes that can be reset';
$string['listupgraded_desc'] = 'This will show a report of all the quizzes on the system whose attepmts have been upgraded, and where the old data is still present so the upgrade could be reset and redone.';
$string['noquizattempts'] = 'Your site does not have any quiz attempts at all!';
$string['nothingupgradedyet'] = 'No upgraded attempts that can be reset';
$string['notupgradedsiterequired'] = 'This script can only work before the site has been upgraded.';
$string['numberofattempts'] = 'Number of quiz attempts';
$string['oldsitedetected'] = 'This appears to be a site that has not yet been upgraded to include the new question engine.';
$string['pluginname'] = 'Question engine upgrade helper';
$string['quizid'] = 'Quiz id';
$string['quizupgrade'] = 'Quiz upgrade status';
$string['quizzesthatcanbereset'] = 'The following quizzes have converted attempts that you may be able to reset';
$string['quizzestobeupgraded'] = 'All quizzes with attempts';
$string['quizzeswithunconverted'] = 'The following quizzes have attempts that need to be converted';
$string['resetquiz'] = 'Reset attempts...';
$string['resetcomplete'] = 'Reset complete';
$string['resettingquizattempts'] = 'Resetting quiz attempts';
$string['upgradingquizattempts'] = 'Upgrading the attempts for quiz \'{$a->name}\' in course {$a->shortname}';
$string['upgradedsitedetected'] = 'This appears to be a site that has been upgraded to include the new question engine.';
$string['upgradedsiterequired'] = 'This script can only work after the site has been upgraded.';

