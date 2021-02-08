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
 * Language strings for local_course_merge.
 *
 * @package   local_course_merge
 * @copyright 2016 Lafayette College ITS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['advancedsettings'] = 'Which settings are advanced?';
$string['advancedsettings_desc'] = 'Newline-separated list of form fields to mark as advanced in the course merge form.';
$string['childcategorypermissions'] = 'You do not have permission to move courses into that category';
$string['course_merge:categorize_course'] = 'Recategorize source courses';
$string['course_merge:create_course'] = 'Create merged course shell';
$string['course_merge:override_format'] = 'Allow override of template format';
$string['coursemergesamecategory'] = 'Courses in the same category';
$string['coursemergesameparent'] = 'Courses with the same parent category';
$string['coursemergeunlimited'] = 'No restrictions';
$string['coursenameformat'] = 'Course name format';
$string['coursenameformat_desc'] = 'Regular expression describing the standard course fullname. Leave blank to disable fullname prepopulation.';
$string['coursestomerge'] = 'Courses to merge';
$string['coursestoodeep'] = 'The following courses cannot be merged with this course: {$a}';
$string['create'] = 'Create merged course shell';
$string['create_form:fieldset:wrapper'] = 'Merged course options';
$string['defaultcategory'] = 'Default child course category';
$string['defaultcategory_desc'] = 'Optionally move child courses into this category by default';
$string['defaultcategorytop'] = 'Do not move courses by default';
$string['extractname'] = 'Extract name';
$string['extractnamedept'] = 'Department';
$string['extractnamedept_desc'] = 'The department code. Used to populate [DEPT].';
$string['extractnameinfo'] = 'Use these settings to define regular expressions for extracting course name information from a course';
$string['extractnamenum'] = 'Number';
$string['extractnamenum_desc'] = 'The course number. Used to populate [NUM].';
$string['extractnamesection'] = 'Section number';
$string['extractnamesection_desc'] = 'The section number. Used to populate [SECTION].';
$string['extractnameterm'] = 'Term';
$string['extractnameterm_desc'] = 'The term name. Used to populate [TERM].';
$string['extracttermcode'] = 'Term code';
$string['extracttermcode_desc'] = 'The term code. Used to populate [TERMCODE]. Derived from course idnumber.';
$string['extractnametitle'] = 'Course title';
$string['extractnametitle_desc'] = 'The full title of the course. Used to populate [TITLE].';
$string['generalsettings'] = 'General settings';
$string['generalsettingsinfo'] = '';
$string['groupmode'] = 'Group mode';
$string['groupmode_help'] = 'This setting has 4 options:

* Do not force - will use the default course configuration global setting.
* No groups
* Separate groups - Each group member can only see their own group, others are invisible
* Visible groups - Each group member works in their own group, but can also see other groups

The group mode defined at course level is the default mode for all activities within the course. Each activity that supports groups can also define its own group mode, though if the group mode is forced at course level, the group mode setting for each activity is ignored.';
$string['groupsdont'] = 'Do not force';
$string['groupsnone'] = 'No groups';
$string['groupsonly'] = 'Groups only';
$string['groupsseparate'] = 'Separate groups';
$string['groupsvisible'] = 'Visible groups';
$string['hidecourses'] = 'Hide original courses from students';
$string['hidecoursesfromteachers'] = 'Hide original courses from teachers';
$string['idnumberexists'] = 'Could not create merged course shell: a course with the idnumber {$a} already exists.';
$string['maxcategorydepth'] = 'Maximum category depth';
$string['maxcategorydepth_desc'] = 'Restrict the courses which can be merged together by category depth.';
$string['mergedcourseidnumberformat'] = 'Merged course idnumber format';
$string['mergedcourseidnumberformat_desc'] = 'The format to suggest for a merged course idnumber.';
$string['mergedcoursenameformat'] = 'Merged course name format';
$string['mergedcoursenameformat_desc'] = 'The format to suggest for a merged course name.';
$string['mergedcourseshortnameformat'] = 'Merged course shortname format';
$string['mergedcourseshortnameformat_desc'] = 'The format to suggest for a merged course shortname.';
$string['metalinknotenabled'] = 'This tool requires that the Course Meta Link enrolment method be enabled.';
$string['newchildcategory'] = 'Move child courses to this category';
$string['pluginname'] = 'Course Merge Helper';
$string['privacy:metadata'] = 'The Course Merge Helper plugin does not store any personal data.';
$string['respectpermissions'] = 'Respect standard permissions';
$string['respectpermissions_desc'] = 'By default this plugin uses its own capabilities and disregards whether teachers are allowed to create courses. Check this setting to force the plugin to respect those permissions.';
$string['shortnameexists'] = 'Could not create merged course: a course with the shortname {$a} already exists.';
$string['usenametemplates'] = 'Use name templates';
$string['usenametemplates_desc'] = 'Use the name extraction settings defined below.';
