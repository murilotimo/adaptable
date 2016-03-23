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
 * Version details
 *
 * @package    theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$PAGE->set_title('loginsettings');

// Login Page Settings - page config.
$temp = new admin_settingpage('loginpage_settings', get_string('loginpagesettings', 'theme_adaptable'));
$temp->add(new admin_setting_heading('theme_adaptable_analytics', get_string('loginpagesettingsheading', 'theme_adaptable'),
format_text(get_string('loginpagesettingsdescription', 'theme_adaptable'), FORMAT_MARKDOWN)));

// Custom Login Enabled?
$name = 'theme_adaptable/customloginenabled';
$title = 'Would you like to enable this custom login page?';
$description = 'WARNING: This will replace the standard login page. It is advisable to test this feature prior to enabling on a production site.';
$choices = array(columns1=>'Disabled', login=>'Enabled');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Logo file setting
$name = 'theme_adaptable/loginlogo';
$title = 'Login Page Logo';
$description = 'Dimensions: xxx px X xxx px';
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Header background colour setting
$name = 'theme_adaptable/loginheadercolor';
$title = 'Header Background Colour';
$description = 'Login page header background colour';
$default = '#FFF';
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Background Image
$name = 'theme_adaptable/loginbackgroundimage';
$title = 'Page Background Image';
$description = 'If left blank, background colour will display - dimensions: xxx px X xxx px';
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Background Image Opacity
$name = 'theme_adaptable/loginopacity';
$title = 'Page Background Image Opacity';
$description = 'Opacity setting to allow background colour to leak through image - Enter a number between 0 - 1. ie. 75% = 0.75';
$default = '1';
$setting = new admin_setting_configtext($name, $title, $description);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Background colour setting
$name = 'theme_adaptable/loginbackgroundcolor';
$title = 'Page Background Colour';
$description = '';
$default = '#DDD';
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#DDD', $previewconfig);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Page Layout
$name = 'theme_adaptable/logintemplate';
$title = 'Page Layout Template';
$description = 'Select a layout for the alternate login page';
$choices = array(1=>'Layout A', 2=>'Layout B', 3=>'Layout C');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box Outer Padding
$name = 'theme_adaptable/boxouterpadding';
$title = 'Box Outer Padding';
$description = 'Integer value in Pixels';
$default = '0';
$setting = new admin_setting_configtext($name, $title, $description);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

//Content

// Box 1 Enabled?
$name = 'theme_adaptable/loginbox1enabled';
$title = 'Box 1 - Show or Hide?';
$description = '';
$choices = array(hide=>'Hide', show=>'Show');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 1 Content
$name = 'theme_adaptable/loginbox1content';
$title = 'Box 1 Contents';
$description = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 2 Enabled?
$name = 'theme_adaptable/loginbox2enabled';
$title = 'Box 2 - Show or Hide?';
$description = '';
$choices = array(hide=>'Hide', show=>'Show');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 2 Content
$name = 'theme_adaptable/loginbox2content';
$title = 'Box 2 Contents';
$description = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 3 Enabled?
$name = 'theme_adaptable/loginbox3enabled';
$title = 'Box 3 - Show or Hide?';
$description = '';
$choices = array(hide=>'Hide', show=>'Show');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 3 Content
$name = 'theme_adaptable/loginbox3content';
$title = 'Box 3 Contents';
$description = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 4 Enabled?
$name = 'theme_adaptable/loginbox4enabled';
$title = 'Box 4 - Show or Hide?';
$description = '';
$choices = array(hide=>'Hide', show=>'Show');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Box 4 Content
$name = 'theme_adaptable/loginbox4content';
$title = 'Box 4 Contents';
$description = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_adaptable', $temp);