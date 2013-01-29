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
 * Definitions for module grouptool
 *
 * @package       mod
 * @subpackage    grouptool
 * @copyright     2012 onwards Philipp Hager {@link e0803285@gmail.com}
 * @since         Moodle 2.2.1+ (Build: 20120127)
 * @license       http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * GROUPTOOL_GROUPS_AMOUNT - group creation mode where amount of groups is defined
 */
define('GROUPTOOL_GROUPS_AMOUNT', 1);
/**
 * GROUPTOOL_MEMBERS_AMOUNT - group creation mode where amount of groupmembers is defined
 */
define('GROUPTOOL_MEMBERS_AMOUNT', 2);
/**
 * GROUPTOOL_1_PERSON_GROUPS - group creation mode where a single group is created for each user
 */
define('GROUPTOOL_1_PERSON_GROUPS', 0);
/**
 * GROUPTOOL_AUTOGROUP_MIN_RATIO - means minimum member count is 70% in the smallest group
 */
if (!defined('GROUPTOOL_AUTOGROUP_MIN_RATIO')) {
    define('GROUPTOOL_AUTOGROUP_MIN_RATIO', 0.7);
}

if (!defined('GROUPTOOL_BEP')) {
    /**
     * GROUPTOOL_BEP - use new implementation of parsing groupnames with @ if current groups
     * number is larger than GROUPTOOL_BEP
     * new implementation is faster for large numbers
     * old style = linear - new style = estimated 15 instructions per stage --> 15 * log(x,25)
     * break even point estimated < 12 --> @30 we are on the secure side...
     */
    define('GROUPTOOL_BEP', 30);
}

/**
 * IE_7_IS_DEAD - disable workarounds for IE7-problems?
 * still quite alive, so we need some hacks :(
 */
define('GROUPTOOL_IE7_IS_DEAD', 0);

/**
 * GROUPTOOL_FILTER_ALL - no filter at all...
 */
define('GROUPTOOL_FILTER_ALL', 0);

/**
 * GROUPTOOL_FILTER_NONCONFLICTING - Show just those groups, which have just 1 graded member
 * for this activity
 */
define('GROUPTOOL_FILTER_NONCONFLICTING', -1);

/**
 * GROUPTOOL_PDF - get PDF-File
 */
define('GROUPTOOL_PDF', 0);
/**
 * GROUPTOOL_TXT - get TXT-File
 */
define('GROUPTOOL_TXT', 1);
/**
 * GROUPTOOL_XLS - get XLS-File
 */
define('GROUPTOOL_XLS', 2);
/**
 * GROUPTOOL_ODS - get ODS-File
 */
define('GROUPTOOL_ODS', 3);
/**
 * GROUPTOOL_RAW - get raw data - just for development
 */
define('GROUPTOOL_RAW', -1);
/*
 * GROUPTOOL_NL - Windows style newlines
 * otherwise we get problems with windows users and txt-files (UNIX \n, MAC \r)
 */
define('GROUPTOOL_NL', "\r\n");

/**
 * GROUPTOOL_OUTDATED - active group's registrations are not consistent with moodle-group's
 */
define('GROUPTOOL_OUTDATED', 0);
/**
 * GROUPTOOL_UPTODATE - active group's registrations are consistent with moodle-group's registrations
 */
define('GROUPTOOL_UPTODATE', 1);

/**
 * GROUPTOOL_FOLLOW - follow changes via eventhandler
 */
define('GROUPTOOL_FOLLOW', 1);
/**
 * GROUPTOOL_IGNORE - ignore changes
 */
define('GROUPTOOL_IGNORE', 0);
/**
 * GROUPTOOL_RECREATE_GROUP - recreate group just for use in grouptool
 */
define('GROUPTOOL_RECREATE_GROUP', 0);
/**
 * GROUPTOOL_DELETE_REF - delete all references in grouptool-instance
 */
define('GROUPTOOL_DELETE_REF', 1);