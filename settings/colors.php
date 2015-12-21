<?php
    // Colors section.
    $temp = new admin_settingpage('theme_adaptable_color', get_string('colorsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_color', get_string('colorsettingsheading', 'theme_adaptable'),
    format_text(get_string('colordesc', 'theme_adaptable'), FORMAT_MARKDOWN)));


    // Main colors heading.
    $name = 'theme_adaptable/settingsmaincolors';
    $heading = get_string('settingsmaincolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);


    // Site main color.
    $name = 'theme_adaptable/maincolor';
    $title = get_string('maincolor', 'theme_adaptable');
    $description = get_string('maincolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site background color.
    $name = 'theme_adaptable/backcolor';
    $title = get_string('backcolor', 'theme_adaptable');
    $description = get_string('backcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Link color.
    $name = 'theme_adaptable/linkcolor';
    $title = get_string('linkcolor', 'theme_adaptable');
    $description = get_string('linkcolordesc', 'theme_adaptable');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Link hover color.
    $name = 'theme_adaptable/linkhover';
    $title = get_string('linkhover', 'theme_adaptable');
    $description = get_string('linkhoverdesc', 'theme_adaptable');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Header colors heading.
    $name = 'theme_adaptable/settingsheadercolors';
    $heading = get_string('settingsheadercolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_adaptable/loadingcolor';
    $title = get_string('loadingcolor', 'theme_adaptable');
    $description = get_string('loadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f44336', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header background color.
    $name = 'theme_adaptable/headerbkcolor';
    $title = get_string('headerbkcolor', 'theme_adaptable');
    $description = get_string('headerbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00796B', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header text color.
    $name = 'theme_adaptable/headertextcolor';
    $title = get_string('headertextcolor', 'theme_adaptable');
    $description = get_string('headertextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header background color.
    $name = 'theme_adaptable/headerbkcolor2';
    $title = get_string('headerbkcolor2', 'theme_adaptable');
    $description = get_string('headerbkcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header text color.
    $name = 'theme_adaptable/headertextcolor2';
    $title = get_string('headertextcolor2', 'theme_adaptable');
    $description = get_string('headertextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_adaptable/loadingcolor';
    $title = get_string('loadingcolor', 'theme_adaptable');
    $description = get_string('loadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#4db6ac', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Menu colors heading.
    $name = 'theme_adaptable/settingsmenucolors';
    $heading = get_string('settingsmenucolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main menu background color.
    $name = 'theme_adaptable/menubkcolor';
    $title = get_string('menubkcolor', 'theme_adaptable');
    $description = get_string('menubkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text color.
    $name = 'theme_adaptable/menufontcolor';
    $title = get_string('menufontcolor', 'theme_adaptable');
    $description = get_string('menufontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text hover color.
    $name = 'theme_adaptable/menufonthovercolor';
    $title = get_string('menufonthovercolor', 'theme_adaptable');
    $description = get_string('menufonthovercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3c469c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu bottom border color.
    $name = 'theme_adaptable/menubordercolor';
    $title = get_string('menubordercolor', 'theme_adaptable');
    $description = get_string('menubordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#80cbc4', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile Menu colors heading.
    $name = 'theme_adaptable/settingsmobilemenucolors';
    $heading = get_string('settingsmobilemenucolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Mobile menu background color.
    $name = 'theme_adaptable/mobilemenubkcolor';
    $title = get_string('mobilemenubkcolor', 'theme_adaptable');
    $description = get_string('mobilemenubkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#F9F9F9', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile menu text color.
    $name = 'theme_adaptable/mobilemenufontcolor';
    $title = get_string('mobilemenufontcolor', 'theme_adaptable');
    $description = get_string('mobilemenufontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Info Box colors heading.
    $name = 'theme_adaptable/settingsinfoboxcolors';
    $heading = get_string('settingsinfoboxcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box background color.
    $name = 'theme_adaptable/infoboxcolor';
    $title = get_string('infoboxcolor', 'theme_adaptable');
    $description = get_string('infoboxcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box text color.
    $name = 'theme_adaptable/infoboxtextcolor';
    $title = get_string('infoboxtextcolor', 'theme_adaptable');
    $description = get_string('infoboxtextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Info Box 2 colors heading.
    $name = 'theme_adaptable/settingssecondinfoboxcolors';
    $heading = get_string('settingssecondinfoboxcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box 2 background color.
    $name = 'theme_adaptable/infoboxcolor2';
    $title = get_string('infoboxcolor2', 'theme_adaptable');
    $description = get_string('infoboxcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f3f3f3', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box 2 text color.
    $name = 'theme_adaptable/infoboxtextcolor2';
    $title = get_string('infoboxtextcolor2', 'theme_adaptable');
    $description = get_string('infoboxtextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#666666', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Market blocks colors heading.
    $name = 'theme_adaptable/settingsmarketingcolors';
    $heading = get_string('settingsmarketingcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Market blocks border color.
    $name = 'theme_adaptable/marketblockbordercolor';
    $title = get_string('marketblockbordercolor', 'theme_adaptable');
    $description = get_string('marketblockbordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Market blocks background color.
    $name = 'theme_adaptable/marketblocksbackgroundcolor';
    $title = get_string('marketblocksbackgroundcolor', 'theme_adaptable');
    $description = get_string('marketblocksbackgroundcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Overlay tiles colors heading.
    $name = 'theme_adaptable/settingsoverlaycolors';
    $heading = get_string('settingsoverlaycolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/rendereroverlaycolor';
    $title = get_string('rendereroverlaycolor', 'theme_adaptable');
    $description = get_string('rendereroverlaycolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/rendereroverlayfontcolor';
    $title = get_string('rendereroverlayfontcolor', 'theme_adaptable');
    $description = get_string('rendereroverlayfontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/tilesbordercolor';
    $title = get_string('tilesbordercolor', 'theme_adaptable');
    $description = get_string('tilesbordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/covbkcolor';
    $title = get_string('covbkcolor', 'theme_adaptable');
    $description = get_string('covbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/covfontcolor';
    $title = get_string('covfontcolor', 'theme_adaptable');
    $description = get_string('covfontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/dividingline';
    $title = get_string('dividingline', 'theme_adaptable');
    $description = get_string('dividinglinedesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/dividingline2';
    $title = get_string('dividingline2', 'theme_adaptable');
    $description = get_string('dividingline2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Navbar colors heading.
    $name = 'theme_adaptable/settingsnavbarcolors';
    $heading = get_string('settingsnavbarcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/navbarborder';
    $title = get_string('navbarborder', 'theme_adaptable');
    $description = get_string('navbarborderdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/navbarhover';
    $title = get_string('navbarhover', 'theme_adaptable');
    $description = get_string('navbarhoverdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Breadcrumb colors heading.
    $name = 'theme_adaptable/settingsbreadcrumbcolors';
    $heading = get_string('settingsbreadcrumbcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/breadcrumb';
    $title = get_string('breadcrumb', 'theme_adaptable');
    $description = get_string('breadcrumbdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb text color.
    $name = 'theme_adaptable/breadcrumbtextcolor';
    $title = get_string('breadcrumbtextcolor', 'theme_adaptable');
    $description = get_string('breadcrumbtextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_adaptable');
    $description = get_string('activebreadcrumbdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/sectionheadingcolor';
    $title = get_string('sectionheadingcolor', 'theme_adaptable');
    $description = get_string('sectionheadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#5f588a', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/currentcolor';
    $title = get_string('currentcolor', 'theme_adaptable');
    $description = get_string('currentcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#d9edf7', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Footer colors heading.
    $name = 'theme_adaptable/settingsfootercolors';
    $heading = get_string('settingsfootercolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/footerbkcolor';
    $title = get_string('footerbkcolor', 'theme_adaptable');
    $description = get_string('footerbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#424242', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footertextcolor';
    $title = get_string('footertextcolor', 'theme_adaptable');
    $description = get_string('footertextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footertextcolor2';
    $title = get_string('footertextcolor2', 'theme_adaptable');
    $description = get_string('footertextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footerlinkcolor';
    $title = get_string('footerlinkcolor', 'theme_adaptable');
    $description = get_string('footerlinkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
