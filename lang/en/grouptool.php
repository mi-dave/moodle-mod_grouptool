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
 * English strings for grouptool
 *
 * @package       mod
 * @subpackage    grouptool
 * @copyright     2012 onwards Philipp Hager {@link e0803285@gmail.com}
 * @since         Moodle 2.2.1+ (Build: 20120127)
 * @license       http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'active';
$string['add_member'] = 'Add {$a->fullname} to group {$a->group}';
$string['added_member'] = 'Added {$a->fullname} to group {$a->group}';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Group(ing) creation, and settings for active Groups of this instance';
$string['agroups'] = 'Active groups';
$string['all_groups_full'] = 'User with ID {$a} could not be registered in any group because all groups are full!';
$string['allowed'] = 'Allowed';
$string['allow_multiple'] = 'Multiple registrations';
$string['allow_multiple_help'] = 'Enable students to register in more than 1 group at the same time. You have to specify how many groups they have to choose at least (= Min groups to choose) and how many groups they are allowed to choose maximum (= Max groups to choose).';
$string['allow_reg'] = 'Enable selfregistration';
$string['allow_reg_help'] = 'Enable selfregistration for students so they can register themselves in the active groups, which are chosen below.';
$string['allow_unreg'] = 'Allow unregistration';
$string['allow_unreg_help'] = 'Enable students to unregister from or change to other groups before (optional) the due-date.';
$string['already_member'] = '{$a->fullname} is already member of group {$a->group}';
$string['already_queued'] = '{$a->username} is already queued in group {$a->groupname}!';
$string['already_registered'] = '{$a->username} is already registered in group {$a->groupname}!';
$string['you_are_already_queued'] = 'You are already queued in group {$a->groupname}!';
$string['you_are_already_registered'] = 'You are already registered in group {$a->groupname}!';
$string['asterisk_marks_moodle_registrations'] = 'Users with leading asterisk (*) are already registered respective in Moodle-Group';
$string['availabledate'] = 'Available from';
$string['cant_enrol'] = 'Can\'t enrol user automatically in course.';
$string['cfg_admin_head'] = 'Default settings in view administration';
$string['cfg_admin_head_info'] = 'Standard settings for administration tab in grouptool-view.';
$string['cfg_instance_head'] = 'Default instance settings';
$string['cfg_instance_head_info'] = 'Default settings for new grouptool instances.';
$string['cfg_allow_multiple'] = 'Multiple registrations';
$string['cfg_allow_multiple_desc'] = 'Enable students to be registered in more than 1 group at the same time by default.';
$string['cfg_allow_reg'] = 'Allow selfregistration';
$string['cfg_allow_reg_desc'] = 'Enable students to register themselves by default';
$string['cfg_allow_unreg'] = 'Allow unregistration';
$string['cfg_allow_unreg_desc'] = 'Should users be able to unregister themselves and to change groups?';
$string['cfg_choose_max'] = 'Choose max';
$string['cfg_choose_max_desc'] = 'How many groups should users be able to register in at the same time by default?';
$string['cfg_choose_min'] = 'Choose min';
$string['cfg_choose_min_desc'] = 'How many groups have users to choose minimum by default?';
$string['cfg_grpsize'] = 'Global standard groupsize';
$string['cfg_grpsize_desc'] = 'Standard groupsize used everywhere in grouptool';
$string['cfg_ifgroupdeleted'] = 'If groups get deleted';
$string['cfg_ifgroupdeleted_desc'] = 'Should deleted groups be recreated for the grouptool-instance or should the references in grouptool (incl. group-data, registrations and queue) be deleted?';
$string['cfg_ifmemberadded'] = 'If groupmembers are added';
$string['cfg_ifmemberadded_desc'] = 'Should new groupmembers added via moodle be also registered in grouptool or be ignored?';
$string['cfg_ifmemberremoved'] = 'If groupmembers are removed';
$string['cfg_ifmemberremoved_desc'] = 'Should grouptool registrations be deleted if users are deleted from the corresponding moodle-group?';
$string['cfg_immediate_reg'] = 'Immediate registration';
$string['cfg_immediate_reg_desc'] = 'Should every registration be passed through to the moodle-groups?';
$string['cfg_max_queues'] = 'Max simultaneous queued';
$string['cfg_max_queues_desc'] = 'Determines in how many different groups a user can be queued at the same time by default.';
$string['cfg_moodlesync_head'] = 'Syncronisation behaviour';
$string['cfg_moodlesync_head_info'] = 'How grouptools should behave if moodle groupmembers are added/deleted or single groups are deleted';
$string['cfg_name_scheme'] = 'Standard name scheme';
$string['cfg_name_scheme_desc'] = 'Standard name scheme used for group creation';
$string['cfg_show_members'] = 'Show groupmembers';
$string['cfg_show_members_desc'] = 'Determines if groupmembers should be visible by default';
$string['cfg_use_individual'] = 'Use individual size';
$string['cfg_use_individual_desc'] = 'If individual groupsize for each group should be used by default';
$string['cfg_use_queue'] = 'Use queueing';
$string['cfg_use_queue_desc'] = 'If queueing registrations on full groups should be used by default.';
$string['cfg_use_size'] = 'Use groupsize';
$string['cfg_use_size_desc'] = 'If groupsize should be limited by default';
$string['change_group'] = 'Change group';
$string['change_group_to'] = 'Continue with groupchange to {$a->groupname}?';
$string['change_group_to_success'] = 'Groupchange successful! {$a->username} is now registered in group {$a->groupname}!';
$string['you_change_group_to_success'] = 'Groupchange successful! You are now registered in group {$a->groupname}!';
$string['checkbox_control_header'] = 'De-/select groups and groupings';
$string['choose_group'] = 'You must choose a target group!';
$string['choose_max'] = 'Max groups to choose';
$string['choose_min'] = 'Min groups to choose';
$string['choose_min_text'] = 'You have to choose at least {$a} group(s)!';
$string['choose_max_text'] = 'You are allowed to choose {$a} group(s) at most!';
$string['choose_min_max_text'] = 'You have to choose between {$a->min} and {$a->max} groups!';
$string['choose_targetgroup'] = 'Import into group';
$string['chooseactivity'] = 'You have to choose an activity before data can be displayed!';
$string['create_1_person_groups'] = 'Create 1 person groups';
$string['create_fromto_groups'] = 'Create groups with numbers from an intervall (i.e. from 34 to 89).';
$string['createGroups'] = 'Create groups';
$string['createGroupings'] = 'Create groupings';
$string['create_groups_confirm'] = 'Continue to create groups as previewed above?';
$string['create_groups_confirm_problem'] = 'At least 1 error occured (refer to preview above)!<br />NO CHANGES will be made!<br />There are already groups with names as given in name scheme. Please use a different name scheme!';
$string['create_groupings_confirm'] = 'Continue to create groupings as previewed above?';
$string['create_groupings_confirm_problem'] = 'At least 1 error occured (refer to preview above)!<br />NO CHANGES will be made!';
$string['copied_grade_feedback'] = 'Groupgrading<br />
+Submission from: {$a->student}<br />
+Graded by: {$a->teacher}<br />
+Original Date/Time: {$a->date}<br />
<div class="indent">{$a->feedback}</div>';
$string['copy'] = 'copy';
$string['copy_chosen'] = 'copy chosen';
$string['copygrade'] = 'copy grade';
$string['copy_refgrades_feedback'] = 'Copy reference grades and feedback for selected groups other group members';
$string['copy_grade_confirm'] = 'Continue copying this grade?';
$string['copy_grade_overwrite_confirm'] = 'Continue copying this grade? Existing previous grades will be overwritten!';
$string['copy_grades_confirm'] = 'Continue copying these grades?';
$string['copy_grades_overwrite_confirm'] = 'Continue copying these grades? Existing previous grades get overwritten!';
$string['copy_grades_success'] = 'The following grades where successfully updated:';
$string['copy_grades_errors'] = 'At least 1 error occured during copying of grades:';
$string['could_not_add'] = 'Could not add {$a->fullname} to group {$a->group}';
$string['define_amount_groups'] = 'define number of groups';
$string['define_amount_members'] = 'define number of groupmembers';
$string['delete_reference'] = 'delete from grouptool';
$string['determinismerror'] = 'The due date can\'t be before the available from date or in the past.';
$string['digits'] = 'minimum digits';
$string['disabled'] = 'disabled';
$string['drag'] = 'move';
$string['due'] = 'Grouptool due';
$string['duedate'] = 'Due date';
$string['duedateno'] = 'No due date';
$string['early'] = '{$a} early';
$string['error_getting_data'] = 'Error while getting groupdata! Either none or more than 1 group where returned!';
$string['userlist'] = 'Userlist';
$string['userlist_alt'] = 'View list of users and their registrations. Export data about users and their groups in different formats (PDF, plain text, Excel, etc.).';
$string['feedbackplural'] = 'feedbacks';
$string['filters_legend'] = 'Filter data';
$string['followchanges'] = 'follow changes';
$string['found_multiple'] = 'Can\'t identify uniquely, found multiple users:';
$string['free'] = 'free';
$string['fromgttoerror'] = 'to-value has to be greater than or equal from-value';
$string['fullgroup'] = 'Group is full';
$string['general_information'] = 'General information';
$string['global_userstats'] = '{$a->reg_users} of {$a->users} users are registered. {$a->notreg_users} still without registration.';
$string['grading'] = 'Grading';
$string['grading_activity_title'] = 'Activity';
$string['grading_alt'] = 'Tools for copying grades from 1 groupmember to all others in the group, either for 1 group or for all groups.';
$string['grading_filter_select_title'] = 'Group or Groups';
$string['grading_filter_select_title_help'] = 'Choose which group or groups to use:<ul><li>without conflicts - all groups, in which only 1 groupmember got graded for the chosen activity</li><li>all - all groups</li><li>"groupname" - only the specifically selected group</li></ul>';
$string['grading_grouping_select_title'] = 'Filter Grouping';
$string['group_assign_error_prev'] = 'Can\'t assign group!';
$string['group_assign_error'] = 'Couldn\'t assign group!';
$string['groupcreation'] = 'Group creation';
$string['groupcreationmode'] = 'Mode';
$string['groupcreationmode_help'] = 'Choose how groups should be created:<br />
<ul>
<li>define number of groups - You choose users from which role to use for group creation and enter the desired amount of groups in Group/Member count textfield. In name scheme you can enter a name scheme for the groups using
<ul>
<li># (will be replaced with the group-number) and</li>
<li>@ (will be replaced with a letter-representation of the groupnumber)</li>
</ul>
Then the chosen users get spread on the desired amount of groups.</li>
<li>
define number of groupmembers - Here you tell the grouptool how many members each group should ideally have. The needed amount of groups will be calculated automatically. If you check prevent last small group the users in this group get spread on the others if the last groups fill-ratio lies under 70%.
</li>
<li>
create 1-person-groups - here a group for each chosen user is created. Besides # and @ you can use the following tags which will be replaced with the users data:
<ul>
<li>[username] - the user\'s username</li>
<li>[firstname] - the user\'s first name</li>
<li>[lastname] - the user\'s last name</li>
<li>[idnumber] - the user\'s idnumber</li>
</ul>
If some data is missing the tag will be replaced by tagnameXX where XX stands for the number of the group.
</li>
</ul>';
$string['groupfromtodigits'] = 'From, To &amp; Digits in Names:';
$string['groupinfo'] = 'Group information';
$string['grouping_exists_error_prev'] = 'Can\'t create grouping because there already exists a grouping with this name!';
$string['grouping_exists_error'] = 'Couldn\'t create grouping because there already exists a grouping with this name!';
$string['grouping_creation_success'] = 'Successfully created grouping and assigned group {$a} to it!';
$string['grouping_creation_error_prev'] = 'Can\'t create grouping!';
$string['grouping_creation_error'] = 'Could\'nt create grouping!';
$string['groupingscreation'] = 'Groupings-creation';
$string['groupingscreatedesc'] = 'Create a grouping for each coursegroup or each selected coursegroup with the same name as the group and register the group in it.';
$string['group_places'] = 'Group places';
$string['group_places_help'] = 'The field ‘group place’ informs (separated by backslash) firstly about the total number of group places, secondly about the number of free places and thirdly about the number of group places that are already occupied.';
$string['groupoverview'] = 'Group overview';
$string['groupselection'] = 'Group selection';
$string['groupselection_help'] = 'Choose the groups/persons for which you wish to copy the chosen reference-grade and -feedback by activating the corresponding checkboxes. If only 1 group is displayed you select the source for copying chosen grade by using the corresponding button right of the entry.';
$string['groupsize'] = 'groupsize';
$string['grouptool'] = 'Grouptool';
$string['grouptoolfieldset'] = 'Instance settings';
$string['grouptoolname'] = 'Grouptool Name';
$string['grouptoolname_help'] = 'The name of the grouptool-instance';
$string['grouptool:addinstance'] = 'Add a grouptool instance to course.';
$string['grouptool:create_groupings'] = 'Create groupings using grouptool.';
$string['grouptool:create_groups'] = 'Create groups using grouptool';
$string['grouptool:export'] = 'Export group and registration data to different formats';
$string['grouptool:grade'] = 'Copy grades from a group-member to others';
$string['grouptool:grade_own_group'] = 'Copy grades from a group-member to others if the original grade has been given by me';
$string['grouptool:register'] = 'Register self in an active group using grouptool';
$string['grouptool:register_students'] = 'Register students in an active group using grouptool. (Also used for resolving queues)';
$string['grouptool:view_description'] = 'View grouptools description';
$string['grouptool:view_groups'] = 'View active groups';
$string['grouptool:view_registrations'] = 'View who\'s registered/queued in which active group using grouptool';
$string['groupuser_import'] = 'Import Groupusers';
$string['group_not_in_grouping'] = 'Chosen group is not Member of chosen grouping!';
$string['group_or_member_count'] = 'Group/Member count';
$string['grpsizezeroerror'] = 'Groupsize has to be a positive integer (>= 1)';
$string['ifgroupdeleted'] = 'If groups get deleted';
$string['ifgroupdeleted_help'] = 'Should deleted groups be recreated for the grouptool-instance or should the references in grouptool (additional group-data, registrations and queue) be deleted?';
$string['ifmemberadded'] = 'If groupmembers get added';
$string['ifmemberadded_help'] = 'Should new groupmembers added via moodle be also registered in grouptool or be ignored?';
$string['ifmemberremoved'] = 'If groupmembers get removed';
$string['ifmemberremoved_help'] = 'Should grouptool registrations be deleted if users are deleted from the corresponding moodle-group';
$string['ignorechanges'] = 'ignore changes';
$string['ignored_not_found_users'] = 'At least one user could not be added to the group!';
$string['ignoring_not_found_users'] = 'At least one user has not been found in database. All those users will be ignored!';
$string['immediate_reg'] = 'immediate Registrations';
$string['immediate_reg_help'] = 'If enabled the (un)registrations will be forwarded to the moodle-system. If not enabled the registrations get cached in grouptool and can be pushed to the moodle-system by the teacher.';
$string['import'] = 'Import';
$string['importbutton'] = 'Import users';
$string['import_desc'] = 'Import users via List of Id-Numbers into certain groups';
$string['import_user'] = 'Import {$a->fullname} ({$a->idnumber}) in group {$a->groupname} succeeded.';
$string['import_user_prev'] = 'Import {$a->fullname} ({$a->idnumber}) in group {$a->groupname}.';
$string['import_user_problem'] = 'Problem during import of {$a->fullname}({$a->idnumber} - {$a->id}) in group {$a->groupname}.';
$string['incomplete_only_label'] = 'show only groups with missing grades';
$string['intro'] = 'Description';
$string['landscape'] = 'Landscape';
$string['late'] = '{$a} late';
$string['maxmembers'] = 'global groupsize';
$string['max_queues_reached'] = 'Maximum queues reached!';
$string['max_regs_reached'] = 'Maximum registrations reached!';
$string['messageprovider:grouptool_moveupreg'] = 'Registration by moving up the queue';
$string['missing_source_selection'] = 'No source selected!';
$string['modulename'] = 'Grouptool';
$string['modulenameplural'] = 'Grouptools';
$string['modulename_help'] = 'The grouptool-module serves different kind of group-related tasks:<ul><li>It allows to create groups in different modes (amount of groups/groupmembers, single-person-groups) as well as groupings for each group.</li><li>Furthermore it can be used to give students the possibility to register themselves to certain groups during a defined period.</li><li>The module also has the ability of group-grading - i.e. copying activity grades from 1 groupmember to other groupmembers.</li><li>Import of users into groups via list of idnumbers</li><li>overview over every coursegroup including all registrations, members, queues, etc. And the ability to export this data into different files-formats (PDF/XLS/ODS/TXT).</li><li>Exportable list of all course-users including their registrations, queues, etc.</li></ul>';
$string['moodlesync'] = 'Behaviour on changes in moodle';
$string['moodlesync_help'] = 'How grouptools should behave if moodle groupmembers are added/deleted or single groups are deleted';
$string['movedown'] = 'move 1 down';
$string['moveup'] = 'move 1 up';
$string['must_specify_groupingname'] = 'You have to provide a name for the grouping!';
$string['mustbegt0'] = 'Must be an integer greater than or equal 0 (>= 0)';
$string['mustbegtoeqmin'] = 'Has to be greater than or equal the minimum';
$string['mustbeposint'] = 'Has to be a positive Integer (>= 1).';
$string['mygroups_only_label'] = 'show only sources entries I graded';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['namingscheme'] = 'Name scheme';
$string['no_conflictfree_to_display'] = 'No conflict-free groups to display. So we try to display all instead!';
$string['no_data_to_display'] = 'No group(s) data to display!';
$string['no_grades_present'] = 'No grades to show';
$string['no_groupmembers_to_display'] = 'No groupmembers to display. So we try to display all groups instead!';
$string['no_groups_to_display'] = 'No groups to display!';
$string['no_queues_to_resolve'] = 'No queues present to resolve!';
$string['no_registrations'] = 'no registrations';
$string['no_target_selected'] = 'There\'s no destination for the copy operation selected. You must select at least 1 destination!';
$string['noaccess'] = 'You have no access to this module (maybe you do not belong to the right group?)!';
$string['nobody_queued'] = 'nobody queued';
$string['nogrouptools'] = 'There are no grouptools!';
$string['nonconflicting'] = 'without conflicts';
$string['nosmallgroups'] = 'Prevent small groups';
$string['nosmallgroups_help'] = 'If enabled ensures that each group is at least filled by 70% of it\'s size! If a (or more precise the last) group would be filled less than 70% the users for this group get spread over the other groups, causing them to have more members than specified!';
$string['noregistrationdue'] = 'Registration\'s always open!';
$string['not_allowed_to_show_members'] = 'You have no permission to view this information!';
$string['not_graded_by_me'] = 'Graded by another user';
$string['not_in_queue_or_registered'] = '{$a->username} is neither registered nor queued in group {$a->groupname}';
$string['not_permitted'] = 'not permitted';
$string['not_registered'] = 'You\'re not yet registered!';
$string['you_are_not_in_queue_or_registered'] = 'You are neither registered nor queued in group {$a->groupname}';
$string['nothing_to_push'] = 'Nothing to push!';
$string['nowhere_queued'] = 'not queued';
$string['number_of_students'] = 'Number of Students';
$string['occupied'] = 'occupied';
$string['orientation'] = 'PDF-Orientation';
$string['overview'] = 'Overview';
$string['overview_alt'] = 'Overview over groups and groupmembers';
$string['overwrite_label'] = 'Overwrite existing grades';
$string['pluginadministration'] = 'Grouptool Administration';
$string['pluginname'] = 'Grouptool';
$string['portrait'] = 'Portrait';
$string['preview'] = 'Preview';
$string['queue'] = 'Queue';
$string['queue_in_group'] = 'Proceed queueing {$a->username} in group {$a->groupname}?';
$string['queue_in_group_success'] = 'Successfully queued {$a->username} in group {$a->groupname}!';
$string['queue_you_in_group'] = 'Proceed queueing you in group {$a->groupname}?';
$string['queue_you_in_group_success'] = 'Successfully queued you in group {$a->groupname}!';
$string['queued'] = 'Queued';
$string['queued_in_group_info'] = '{$a->username} queued in group {$a->groupname}';
$string['queued_on_rank'] = 'queued on rank #{$a}';
$string['queues'] = 'Queues';
$string['queuesizeerror'] = 'Max queue entries have to be a positive integer (>= 1)';
$string['queues_max'] = 'max simultaneous queue-places';
$string['queues_max_help'] = 'Limits the maximum simultaneous queue entries for each person in this grouptool.';
$string['queueing_is'] = 'Queueing is';
$string['rank'] = 'Rank';
$string['recreate_group'] = 'recreate group';
$string['reference_grade_feedback'] = 'Reference-grade / Feedback';
$string['refresh_table_button'] = 'refresh preview';
$string['reg_in_full_group'] = 'Can\'t register {$a->username} in group {$a->groupname} because it\'s full!';
$string['reg_you_in_full_group'] = 'Can\'t register you in group {$a->groupname} because it\'s full!';
$string['reg_not_open'] = 'The registration is not possible at the moment. Maybe the deadline\'s over or it was not allowed at all.';
$string['register'] = 'Register';
$string['registered'] = 'Registered';
$string['registered_on_rank'] = 'Registered on rank #{$a}';
$string['registered_in_group_info'] = '{$a->username} registered in group {$a->groupname}';
$string['register_in_group'] = 'Are you sure you wan\'t to register {$a->username} in group {$a->groupname}?';
$string['register_in_group_success'] = 'Successfully registered {$a->username} in group {$a->groupname}!';
$string['register_you_in_group'] = 'Are you sure you wan\'t to register in group {$a->groupname}?';
$string['register_you_in_group_success'] = 'You successfully registered in group {$a->groupname}!';
$string['register_you_in_group_successmail'] = 'You successfully registered in group {$a->groupname}!';
$string['register_you_in_group_successmailhtml'] = 'You successfully registered in group {$a->groupname}!';
$string['registrationdue'] = 'Registration due to:';
$string['registrations'] = 'Group-registrations';
$string['registrations_missing'] = '{$a} registrations missing';
$string['registration_missing'] = '1 registration missing';
$string['registration_period_end'] = 'End of registration for';
$string['registration_period_start'] = 'Begin of registration for';
$string['reset_agrps'] = 'Reset active groups';
$string['reset_agrps_help'] = 'Resets all course groups to be inactive for grouptools. This will also delete every registration and queue in grouptools of this course!';
$string['reset_registrations'] = 'Reset registrations';
$string['reset_registrations_help'] = 'Registrations get automatically deleted if active groups get resetted.';
$string['reset_queues'] = 'Reset queues';
$string['reset_queues_help'] = 'Queues get automatically deleted if active groups get resetted.';
$string['reset_transparent_unreg'] = 'Unreg all pushed groupmembers';
$string['reset_transparent_unreg_help'] = 'Remove all users from those groups which are represented by active grouptool-groups';
$string['resolve_queue_legend'] = 'Resolve queues';
$string['resolve_queue_title'] = 'Resolve pending queues';
$string['resolve_queue'] = 'resolve queues';
$string['selected'] = 'Selected';
$string['select_all'] = 'all';
$string['select_none'] = 'none';
$string['select_inverse'] = 'inverse';
$string['selectfromcohort'] = 'Select members from cohort';
$string['selfregistration'] = 'Registration';
$string['selfregistration_alt'] = 'Register to one or more groups (depending on settings)';
$string['show_members'] = 'show groupmembers';
$string['show_members_help'] = 'If enabled students can see who\'s already registered in a group.';
$string['size'] = 'groupsize';
$string['size_grp'] = 'Groupsize settings';
$string['size_grp_help'] = 'If groupsize is activated the maximum members for each group get limited (set for the whole instance via textfield). If additionally the "individual size" is activated, the groupsize for each group can be defined in the following list.';
$string['skipped'] = 'skipped';
$string['source'] = 'Source';
$string['source_missing'] = 'There\'s no source to copy from!';
$string['sources_missing'] = 'There\'s at least 1 group without a chosen source to copy from!';
$string['sortlist_no_data'] = 'There are no groups present at the moment!';
$string['status'] = 'Status';
$string['status_help'] = '<ul><li><span style="font-weight:bold">✔</span> registered in Moodle-Group and Grouptool</li><li><span style="font-weight:bold">?</span> registered in Moodle-Group but not in Grouptool</li><li><span style="font-weight:bold">+</span> registered in Grouptool but not in Moodle-Group</li><li><span style="font-weight:bold">1, 2, 3...</span> queued in Moodle-Group</li></ul>';
$string['switched_to_all_groups'] = 'Changed groupfilter to all groups!';
$string['tags'] = 'Available tags';
$string['tags_help'] = 'You can use this tags to define the name scheme. Each of this tags will be replaced in the final groupnames. The tags in [] are related to the users data and the # and @ symbols will be replaced through the groups serial number. If JavaScript is enabled you can simply click on the tags to append them to the name-scheme. Please consider that the group names have to be unique in each course and therefore you may have to alter the name scheme until conflict-free.';
$string['target'] = 'Target';
$string['too_many_queue_places'] = 'Can\'t queue {$a->username} in group {$a->groupname} because {$a->username} is already queued in too many groups!';
$string['you_have_too_many_queue_places'] = 'Can\'t queue you in group {$a->groupname} because you are already queued in too many groups!';
$string['total'] = 'total';
$string['unqueue'] = 'remove from queue';
$string['unqueue_from_group'] = 'Continue removing {$a->username} from the queue of group {$a->groupname}?';
$string['unqueue_from_group_success'] = 'Successfully removed {$a->username} from the queue of group {$a->groupname}!';
$string['unqueue_you_from_group'] = 'Continue removing you from the queue of group {$a->groupname}?';
$string['unqueue_you_from_group_success'] = 'Successfully removed you from the queue of group {$a->groupname}!';
$string['unreg'] = 'Unregister';
$string['unreg_from_group'] = 'Continue unregistrating {$a->username} from group {$a->groupname}?';
$string['unreg_from_group_success'] = 'Successfully unregistered {$a->username} from group {$a->groupname}!';
$string['unreg_you_from_group'] = 'Continue unregistering you from group {$a->groupname}?';
$string['unreg_you_from_group_success'] = 'Successfully unregistered you from group {$a->groupname}!';
$string['unreg_is'] = 'Unregistration';
$string['updatemdlgrps'] = 'Register in moodle-groups';
$string['update_grouplist_success'] = 'Successfully updated active groups!';
$string['userlist'] = 'Userlist';
$string['userlist_help'] = 'List of ID-Numbers separated by one or more of those characters <ul><li>[,] comma</li><li>[;] semicolon</li><li>[ ] space</li><li>[\n] newline</li><li>[\r] carriage return</li><li>[\t] tabulator</li></ul>';
$string['user_move_prev'] = 'User with ID {$a->user_id} will be moved from group {$a->agrp_id} to {$a->current_grp} ({$a->current_text})';
$string['user_moved'] = 'User with ID {$a->user_id} has been moved from group {$a->agrp_id} to {$a->current_grp} ({$a->current_text})';
$string['user_not_found'] = 'User {$a} couldn\'t be found!';
$string['use_all_or_chosen'] = 'Use all or selected';
$string['use_all_or_chosen_help'] = 'Select "All" to create a grouping for evey course group. Use "Selected" to create groupings for checked groups only.';
$string['use_individual'] = 'use individual size per group';
$string['use_individual_help'] = 'Override global groupsize with individual value for each group. These get set via the sortable grouplist on the bottom.';
$string['use_size'] = 'activate';
$string['use_queue'] = 'use queues';
$string['use_queue_help'] = 'If queues are enabled, students who try to register in a full group, get queued until someone unregisters from the very same group. After the deadline the teacher has the ability to move students to other groups if they are still queued, where groups are filled using the current sort order of the group list. You should define a maximum number of groups in whom a user can be queued.';
