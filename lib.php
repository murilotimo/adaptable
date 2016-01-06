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

define('THEME_ADAPTABLE_DEFAULT_ALERTCOUNT', '1');
define('THEME_ADAPTABLE_DEFAULT_ANALYTICSCOUNT', '1');
define('THEME_ADAPTABLE_DEFAULT_TOPMENUSCOUNT', '1');
define('THEME_ADAPTABLE_DEFAULT_TOOLSMENUSCOUNT', '1');
define('THEME_ADAPTABLE_DEFAULT_NEWSTICKERCOUNT', '1');

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_adaptable_process_css($css, $theme) {

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_adaptable_set_customcss($css, $customcss);

    // Define the default settings for the theme incase they've not been set.
    $defaults = array(
        '[[setting:fsize]]' => '90',
        '[[setting:linkcolor]]' => '#009688',
        '[[setting:linkhover]]' => '#009688',
        '[[setting:maincolor]]' => '#009688',
        '[[setting:backcolor]]' => '#FFFFFF',
        '[[setting:rendereroverlaycolor]]' => '#009688',
        '[[setting:rendereroverlayfontcolor]]' => '#FFFFFF',
        '[[setting:buttoncolor]]' => '#009688',
        '[[setting:buttontextcolor]]' => '#ffffff',
        '[[setting:buttonhovercolor]]' => '#00695c',
        '[[setting:buttonlogincolor]]' => '#ef5350',
        '[[setting:buttonloginhovercolor]]' => '#e53935',
        '[[setting:buttonlogintextcolor]]' => '#0084c2',
        '[[setting:buttonloginpadding]]' => '0px',
        '[[setting:buttonloginheight]]' => '24px',
        '[[setting:buttonloginmargintop]]' => '2px',
        '[[setting:buttonradius]]' => '5px',
        '[[setting:dividingline]]' => '#ffffff',
        '[[setting:dividingline2]]' => '#ffffff',
        '[[setting:navbarborder]]' => '#B7B3EF',
        '[[setting:navbarhover]]' => '#3C469C',
        '[[setting:breadcrumb]]' => '#b4bbbf',
        '[[setting:breadcrumbtextcolor]]' => '#444444',
        '[[setting:activebreadcrumb]]' => '#e8eaeb',
        '[[setting:loadingcolor]]' => '#f44336',
        '[[setting:footerbkcolor]]' => '#424242',
        '[[setting:footertextcolor]]' => '#ffffff',
        '[[setting:footertextcolor2]]' => '#ffffff',
        '[[setting:footerlinkcolor]]' => '#ffffff',
        '[[setting:headerbkcolor]]' => '#00796B',
        '[[setting:headerbkcolor2]]' => '#009688',
        '[[setting:headertextcolor]]' => '#ffffff',
        '[[setting:headertextcolor2]]' => '#ffffff',
        '[[setting:blockheadercolor]]' => '#009688',
        '[[setting:blockbackgroundcolor]]' => '#FFFFFF',
        '[[setting:blockheaderbackgroundcolor]]' => '#FFFFFF',
        '[[setting:blockbordercolor]]' => '#59585D',
        '[[setting:marketblockbordercolor]]' => '#e8eaeb',
        '[[setting:marketblocksbackgroundcolor]]' => '#FFFFFF',
        '[[setting:blocklinkcolor]]' => '#009688',
        '[[setting:blockheaderbordertop]]' => '1px',
        '[[setting:blockheaderborderleft]]' => '0px',
        '[[setting:blockheaderborderright]]' => '0px',
        '[[setting:blockheaderborderbottom]]' => '0px',
        '[[setting:blockmainbordertop]]' => '0px',
        '[[setting:blockmainborderleft]]' => '0px',
        '[[setting:blockmainborderright]]' => '0px',
        '[[setting:blockmainborderbottom]]' => '0px',
        '[[setting:blockheaderbordertopstyle]]' => 'dashed',
        '[[setting:blockmainbordertopstyle]]' => 'solid',
        '[[setting:blockheadertopradius]]' => '0px',
        '[[setting:blockheaderbottomradius]]' => '0px',
        '[[setting:blockmaintopradius]]' => '0px',
        '[[setting:blockmainbottomradius]]' => '0px',
        '[[setting:tilesbordercolor]]' => '#009688',
        '[[setting:infoboxcolor]]' => '#333333',
        '[[setting:infoboxcolor2]]' => '#f3f3f3',
        '[[setting:slidermargintop]]' => '20px',
        '[[setting:slidermarginbottom]]' => '20px',
        '[[setting:currentcolor]]' => '#d9edf7',
        '[[setting:sectionheadingcolor]]' => '#5f588a',
        '[[setting:infoboxtextcolor]]' => '#ffffff',
        '[[setting:infoboxtextcolor2]]' => '#666666',
        '[[setting:menufontsize]]' => '14px',
        '[[setting:topmenufontsize]]' => '14px',
        '[[setting:menubkcolor]]' => '#ffffff',
        '[[setting:menufontcolor]]' => '#444444',
        '[[setting:menubordercolor]]' => '#80cbc4',
        '[[setting:mobilemenubkcolor]]' => '#F9F9F9',
        '[[setting:mobilemenufontcolor]]' => '#000000',
        '[[setting:covbkcolor]]' => '#009688',
        '[[setting:covfontcolor]]' => '#ffffff',
        '[[setting:editonbk]]' => '#4caf50',
        '[[setting:editoffbk]]' => '#f44336',
        '[[setting:editverticalpadding]]' => '',
        '[[setting:edithorizontalpadding]]' => '',
        '[[setting:edittopmargin]]' => '',
        '[[setting:editfont]]' => '#ffffff',
        '[[setting:slideroption2color]]' => '#0066cc',
        '[[setting:slideroption2a]]' => '#0066cc',
        '[[setting:socialsize]]' => '32',
        '[[setting:socialsizemobile]]' => '22',
        '[[setting:mobile]]' => '22',
        '[[setting:socialpaddingtop]]' => '1.8%',
        '[[setting:fontname]]' => 'Open Sans',
        '[[setting:fontheadername]]' => 'Roboto Slab',
        '[[setting:fontcolor]]' => '#333333',
        '[[setting:fontheadercolor]]' => '#333333',
        '[[setting:fontweight]]' => '400',
        '[[setting:fontheaderweight]]' => '400',
        '[[setting:fonttitlename]]' => 'Audiowide',
        '[[setting:fonttitleweight]]' => '400',
        '[[setting:fonttitlesize]]' => '48px',
        '[[setting:fonttitlecolor]]' => '#FFFFFF',
        '[[setting:fullscreenwidth]]' => '98%',
        '[[setting:coursetitlemaxwidth]]' => '50%',
        '[[setting:coursetitlepaddingtop]]' => '0px',
        '[[setting:hidebreadcrumbmobile]]' => '',
        '[[setting:hidepagefootermobile]]' => '',
        '[[setting:hidealertsmobile]]' => '',
        '[[setting:hidesocialmobile]]' => '',
        '[[setting:socialboxpaddingtopmobile]]' => '',
        '[[setting:socialboxpaddingbottommobile]]' => '',
        '[[setting:hidecoursetitlemobile]]' => '',
        '[[setting:hidelogomobile]]' => '',
        '[[setting:hideheadermobile]]' => '',
        '[[setting:enableheading]]' => 'fullname',
        '[[setting:breadcrumbtitle]]' => 'shortname',
        '[[setting:enableavailablecourses]]' => 'display',
        '[[setting:enableticker]]' => true,
        '[[setting:enabletickermy]]' => true,
    );

    // Get all the defined settings for the theme and replace defaults.
    foreach ($theme->settings as $key => $val) {
        if (array_key_exists('[[setting:'.$key.']]', $defaults) && !empty($val)) {
            $defaults['[[setting:'.$key.']]'] = $val;
        }
    }

    $homebkg = '';
    if (!empty($theme->settings->homebk)) {
        $homebkg = $theme->setting_file_url('homebk', 'homebk');
        $homebkg = 'background-image: url("' . $homebkg . '");';
    }
    $defaults['[[setting:homebkg]]'] = $homebkg;

    // Replace the CSS with values from the $defaults array.
    $css = strtr($css, $defaults);
    if (empty($theme->settings->tilesshowallcontacts) || $theme->settings->tilesshowallcontacts == false) {
        $css = theme_adaptable_set_tilesshowallcontacts($css, false);
    } else {
        $css = theme_adaptable_set_tilesshowallcontacts($css, true);
    }
    return $css;
}


/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_adaptable_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_adaptable_set_tilesshowallcontacts($css, $display) {
    $tag = '[[setting:tilesshowallcontacts]]';
    if ($display) {
        $replacement = 'block';
    } else {
        $replacement = 'none';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_adaptable_initialise_zoom(moodle_page $page) {
    user_preference_allow_ajax_update('theme_adaptable_zoom', PARAM_TEXT);
    $page->requires->yui_module('moodle-theme_adaptable-zoom', 'M.theme_adaptable.zoom.init', array());
}

/**
 * Get the user preference for the zoom function.
 */
function theme_adaptable_get_zoom() {
    return get_user_preferences('theme_adaptable_zoom', '');
}

// Full width funcs.

function theme_adaptable_initialise_full(moodle_page $page) {
    user_preference_allow_ajax_update('theme_adaptable_full', PARAM_TEXT);
    $page->requires->yui_module('moodle-theme_adaptable-full', 'M.theme_adaptable.full.init', array());
}

/**
 * Get the user preference for the zoom function.
 */
function theme_adaptable_get_full() {
    return get_user_preferences('theme_adaptable_full', '');
}

/**
 * Get the key of the last closed alert for a specific alert index.
 * This will be used in the renderer to decide whether to include the alert or not
 */
function theme_adaptable_get_alertkey($alertindex) {
    user_preference_allow_ajax_update('theme_adaptable_alertkey' . $alertindex, PARAM_TEXT);
    return get_user_preferences('theme_adaptable_alertkey' . $alertindex, '');
}


function theme_adaptable_get_block_side() {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('adaptable');
    }
    return get_user_preferences('theme_adaptable_block_side', $theme->settings->blockside);
}

function theme_adaptable_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }

    if (!empty($page->theme->settings->logo)) {
        $return->heading = html_writer::link($CFG->wwwroot, '', array('title' => get_string('home'), 'class' => 'logo'));
    } else {
        $return->heading = $output->page_heading();
    }

    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote">'.$page->theme->settings->footnote.'</div>';
    }

    return $return;
}

function theme_adaptable_get_setting($setting, $format = false) {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('adaptable');
    }

    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_adaptable_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('adaptable');
    }
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ($filearea === 'style') {
            theme_essential_serve_css($args[1]);
        } else if ($filearea === 'homebk') {
            return $theme->setting_file_serve('homebk', $args, $forcedownload, $options);
        } else if ($filearea === 'pagebackground') {
            return $theme->setting_file_serve('pagebackground', $args, $forcedownload, $options);
        } else if (preg_match("/p[1-9][0-9]/", $filearea) !== false) {
            return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
        } else if ((substr($filearea, 0, 9) === 'marketing') && (substr($filearea, 10, 5) === 'image')) {
            return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
        } else if ($filearea === 'iphoneicon') {
            return $theme->setting_file_serve('iphoneicon', $args, $forcedownload, $options);
        } else if ($filearea === 'iphoneretinaicon') {
            return $theme->setting_file_serve('iphoneretinaicon', $args, $forcedownload, $options);
        } else if ($filearea === 'ipadicon') {
            return $theme->setting_file_serve('ipadicon', $args, $forcedownload, $options);
        } else if ($filearea === 'ipadretinaicon') {
            return $theme->setting_file_serve('ipadretinaicon', $args, $forcedownload, $options);
        } else if ($filearea === 'fontfilettfheading') {
            return $theme->setting_file_serve('fontfilettfheading', $args, $forcedownload, $options);
        } else if ($filearea === 'fontfilettfbody') {
            return $theme->setting_file_serve('fontfilettfbody', $args, $forcedownload, $options);
        } else if ($filearea === 'adaptablemarkettingimages') {
            return $theme->setting_file_serve('adaptablemarkettingimages', $args, $forcedownload, $options);
        } else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}

function theme_adaptable_get_course_activities() {
    GLOBAL $CFG, $PAGE, $OUTPUT;
    // A copy of block_activity_modules.
    $course = $PAGE->course;
    $content = new stdClass();
    $modinfo = get_fast_modinfo($course);
    $modfullnames = array();

    $archetypes = array();

    foreach ($modinfo->cms as $cm) {
        // Exclude activities which are not visible or have no link (=label).
        if (!$cm->uservisible or !$cm->has_view()) {
            continue;
        }
        if (array_key_exists($cm->modname, $modfullnames)) {
            continue;
        }
        if (!array_key_exists($cm->modname, $archetypes)) {
            $archetypes[$cm->modname] = plugin_supports('mod', $cm->modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
        }
        if ($archetypes[$cm->modname] == MOD_ARCHETYPE_RESOURCE) {
            if (!array_key_exists('resources', $modfullnames)) {
                $modfullnames['resources'] = get_string('resources');
            }
        } else {
            $modfullnames[$cm->modname] = $cm->modplural;
        }
    }
    core_collator::asort($modfullnames);

    return $modfullnames;
}

function theme_adaptable_performance_output($param) {
    $html = html_writer::tag('span', get_string('loadtime', 'theme_adaptable').' '. round($param['realtime'], 2) . ' ' .
            get_string('seconds'), array('id' => 'load'));
    return $html;
}

function theme_adaptable_page_init(moodle_page $page) {
    global $CFG;
    $page->requires->jquery();
    // REMOVED: Deprecated function    error_log($CFG->version); ???
    if ($CFG->version < 2015051100) {
        $page->requires->jquery_plugin('bootstrap', 'theme_adaptable');
        $page->requires->jquery_plugin('dropdown', 'theme_adaptable');
    }

    $page->requires->jquery_plugin('pace', 'theme_adaptable');
    $page->requires->jquery_plugin('flexslider', 'theme_adaptable');
    $page->requires->jquery_plugin('ticker', 'theme_adaptable');
    $page->requires->jquery_plugin('easing', 'theme_adaptable');
    $page->requires->jquery_plugin('adaptable', 'theme_adaptable');
}

function theme_adaptable_remove_site_fullname($heading) {
    global $SITE, $PAGE;
    if (strpos($PAGE->pagetype, 'course-view-') === 0) {
        return $heading;
    }

    $header = preg_replace("/^".$SITE->fullname."/", "", $heading);

    return $header;
}
