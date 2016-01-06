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
 * @package    theme
 * @subpackage adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


    $temp = new admin_settingpage('theme_adaptable_footer', get_string('footersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_footer', get_string('footersettingsheading', 'theme_adaptable'),
        format_text(get_string('footerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Show moodle docs link.
    $name = 'theme_adaptable/moodledocs';
    $title = get_string('moodledocs', 'theme_adaptable');
    $description = get_string('moodledocsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_adaptable');
    $description = get_string('showfooterblocksdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/footerblocksplacement';
    $title = get_string('footerblocksplacement', 'theme_adaptable');
    $description = get_string('footerblocksplacementdesc', 'theme_adaptable');
    $choices = array(
        1 => get_string('footerblocksplacement1', 'theme_adaptable'),
        2 => get_string('footerblocksplacement2', 'theme_adaptable'),
        3 => get_string('footerblocksplacement3', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/footer1header';
    $title = get_string('footer1header', 'theme_adaptable');
    $description = get_string('footer1desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer1content';
    $title = get_string('footer1content', 'theme_adaptable');
    $description = get_string('footer1contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer2header';
    $title = get_string('footer2header', 'theme_adaptable');
    $description = get_string('footer2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer2content';
    $title = get_string('footer2content', 'theme_adaptable');
    $description = get_string('footer2contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer3header';
    $title = get_string('footer3header', 'theme_adaptable');
    $description = get_string('footer3desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer3content';
    $title = get_string('footer3content', 'theme_adaptable');
    $description = get_string('footer3contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer4header';
    $title = get_string('footer4header', 'theme_adaptable');
    $description = get_string('footer4desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer4content';
    $title = get_string('footer4content', 'theme_adaptable');
    $description = get_string('footer4contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footnote';
    $title = get_string('footnote', 'theme_adaptable');
    $description = get_string('footnotedesc', 'theme_adaptable');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
