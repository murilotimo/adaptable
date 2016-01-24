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
 * @package   theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// Include files
include('renderer.php');
include('array_definitions.php');


class adaptablesettings extends renderer{
	public function __construct(){
        $this->save();
		$this->rendersettings();
	}

    public function rendersettings(){
        $courses = array();

        $get_courses = get_courses();
        foreach ($get_courses as $key => $value) {
            if(strtolower($value->shortname) != "moodle")
                $courses[$value->id] = $value->shortname;
        }
        if(is_array($courses) && count($courses)>0) asort($courses);

        for($x=1; $x<=500; $x++){
            $heights[$x] = $x.'px';
        }

        $this->header('#');

// Sample
/**

        $this->newOption('radio', 'moodleVersion', 'Moodle Version', 'Select the version of your Moodle.','28', array('25' => '2.5', '26' => '2.6', '27' => '2.7', '28' => '2.8'));

        $this->newOption('thumbList', 'themeColor', 'Color Scheme', 'Select the color scheme', 'green', array('colorSchemes/blue.jpg' => 'blue', 'colorSchemes/orange.jpg' => 'orange', 'colorSchemes/green.jpg' => 'green', 'colorSchemes/custom.jpg' => 'custom'));

        $this->newOption('colorpicker', 'bgcolor', 'Background Color', 'Select the background color to be used if layout style is Boxed with Background Color.','#CCCCCC');        

        $this->newOption('select', 'layoutStyle', 'Layout Style', 'Select the layout style','wide', array('wide' => 'Wide', 'bgcolor' => 'Boxed with Background Color', 'bgpattern' => 'Boxed with Background Pattern', 'bgimage' => 'Boxed with Background Image'));        

        $this->newOption('imageURL', 'bgpatternCustom', '', 'Or use a external pattern.');

        $this->newOption('longtext', 'googleAnalytics', 'Google Analytics', 'Put your Google Analytics code');
        $this->newOption('text', 'copyright', 'Footer Text / Copyright', 'Type the texts you want view on the last bar.','');

        $this->newOption('separator');
        $this->newOption('title', '', 'Select Modules', 'Choose until 3 options of modules to be showing on FOOTER section.');

        $this->newOption('slideshow', 'slideshowdata', 'Slider Content', 'Type all informations about your content to each slider.', '');

        $this->newOption('singlelist', 'featuredcourses', 'Select your features courses', 'Select your featured courses bellow to show on Frontpage.', 'Name of Course', $courses);
**/


        // General *************************************************.
        $this->newTab(get_string('generalsettings', 'theme_adaptable'), get_string('generalsettings', 'theme_adaptable'), 'cog');

        // Image Background.
        $this->newOption('imageURL', 'bgpatternCustom', get_string('homebk', 'theme_adaptable'), get_string('homebkdesc', 'theme_adaptable'));



        // Colours **************************************************.
        $this->newTab(get_string('colorsettings', 'theme_adaptable'), get_string('colorsettings', 'theme_adaptable'), 'paint-brush');

        $this->newOption('colorpicker', 'settingsmaincolors', '', '','#CCCCCC', null, null);






    // Main colors heading.
    $name = 'theme_adaptable/settingsmaincolors';
    $heading = get_string('settingsmaincolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);








        // Fonts.
        $this->newTab(get_string('fontsettings', 'theme_adaptable'), get_string('fontsettings', 'theme_adaptable'), 'font');

        // Header.
        $this->newTab(get_string('headersettings', 'theme_adaptable'), get_string('headersettings', 'theme_adaptable'), 'header');

        $this->newOption('select', 'headerType', 'Header', 'Select the header','none', array('1' => 'Header 1', '2' => 'Header 2', '3' => 'Header 3', '4' => 'Header 4', '5' => 'Header 5'));
        $this->newOption('radio', 'headerSocialIcons', 'Header Social Icons', 'Select "ON" to enable Social Icons on HEADER section or "OFF" to disable.', '1', array('1' => 'On', '0' => 'Off'));
        $this->newOption('imageURL', 'logoURL', 'Logo URL', 'Use a external link for include your logo image. Recommended size: 200x70.');
        $this->newOption('select', 'logoHeight', 'Logo Height', 'Select logo height','70', $heights);
        $this->newOption('select', 'headerPadding', 'Header Padding', 'Select header padding','25', $heights);
        $this->newOption('select', 'menuMarginTop', 'Menu Margin Top', 'Select margin top of menu if you using headers #1, #2 or #3. Work as margin top of social icons in Header #5','3', $heights);
        $this->newOption('radio', 'registerLink', 'Register Link', 'Select "ON" to enable Register Link on HEADER section or "OFF" to disable.<br>(Need activate Self-Registration in Site administration -> Plugins -> Authentication -> Manage authentication -> Self registration)', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('radio', 'loggedAs', 'You are logged in as USERNAME', 'Select "ON" to enable "You are logged in as USERNAME" on HEADER section or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));

        $this->newOption('list', 'mainMenu', 'Main Menu', 'Type your main menu texts and complete with they links below.', '', array('text' => 'Menu', 'link' => 'Link (URL)', 'deep' => 'Deep'));


        // Alert Box.
        $this->newTab(get_string('frontpagealertsettings', 'theme_adaptable'), get_string('frontpagealertsettings', 'theme_adaptable'), 'bell');


        // Header Menus.
        $this->newTab(get_string('menusettings', 'theme_adaptable'), get_string('menusettings', 'theme_adaptable'), 'bars');


        // User Menu.
        $this->newTab(get_string('menusettings', 'theme_adaptable'), get_string('menusettings', 'theme_adaptable'), 'user');


        // Social.
        $this->newTab(get_string('socialsettings', 'theme_adaptable'), get_string('socialsettings', 'theme_adaptable'), 'share-alt');


        // Navbar.
        $this->newTab(get_string('usernav', 'theme_adaptable'), get_string('usernav', 'theme_adaptable'), 'minus');


        // Navbar Tools Menus.
        $this->newTab(get_string('navbarmenusettings', 'theme_adaptable'), get_string('navbarmenusettings', 'theme_adaptable'), 'wrench');


        // Slideshow.
        $this->newTab(get_string('frontpageslidersettings', 'theme_adaptable'), get_string('frontpageslidersettings', 'theme_adaptable'), 'picture-o');


        // News Ticker.
        $this->newTab(get_string('frontpagetickersettings', 'theme_adaptable'), get_string('frontpagetickersettings', 'theme_adaptable'), 'newspaper-o');


        // Frontpage Courses.
        $this->newTab(get_string('frontpagecoursesettings', 'theme_adaptable'), get_string('frontpagecoursesettings', 'theme_adaptable'), 'list');


        // Blocks.
        $this->newTab(get_string('blocksettings', 'theme_adaptable'), get_string('blocksettings', 'theme_adaptable'), 'square');


        // Marketing Blocks.
        $this->newTab(get_string('frontpageblocksettings', 'theme_adaptable'), get_string('frontpageblocksettings', 'theme_adaptable'), 'th');


        // Footer.
        $this->newTab(get_string('footersettings', 'theme_adaptable'), get_string('footersettings', 'theme_adaptable'), 'cog');


        // Mobile.
        $this->newTab(get_string('layoutmobilesettings', 'theme_adaptable'), get_string('layoutmobilesettings', 'theme_adaptable'), 'mobile');


        // Mobile.
        $this->newTab(get_string('analyticssettings', 'theme_adaptable'), get_string('analyticssettings', 'theme_adaptable'), 'line-chart');


// To be Removed ****************************************************.
/**

        $this->newTab('general','general','general.png');

        $this->newOption('radio', 'moodleVersion', 'Moodle Version', 'Select the version of your Moodle.','28', array('25' => '2.5', '26' => '2.6', '27' => '2.7', '28' => '2.8'));
        $this->newOption('thumbList', 'themeColor', 'Color Scheme', 'Select the color scheme', 'green', array('colorSchemes/blue.jpg' => 'blue', 'colorSchemes/orange.jpg' => 'orange', 'colorSchemes/green.jpg' => 'green', 'colorSchemes/custom.jpg' => 'custom'));
        $this->newOption('colorpicker', 'customColorScheme1', 'Custom Color Scheme', 'Create a custom color scheme.','#CCCCCC', null, array('floatLeft'));
        $this->newOption('colorpicker', 'customColorScheme2', '', '','#CCCCCC', null, array('floatLeft','left10px'));
        $this->newOption('colorpicker', 'customColorScheme3', '', '','#CCCCCC', null, array('floatLeft','left10px'));
        $this->newOption('colorpicker', 'customColorScheme4', '', '','#CCCCCC', null, array('left138px'));
        $this->newOption('select', 'layoutStyle', 'Layout Style', 'Select the layout style','wide', array('wide' => 'Wide', 'bgcolor' => 'Boxed with Background Color', 'bgpattern' => 'Boxed with Background Pattern', 'bgimage' => 'Boxed with Background Image'));        
        $this->newOption('colorpicker', 'bgcolor', 'Background Color', 'Select the background color to be used if layout style is Boxed with Background Color.','#CCCCCC');        
        $this->newOption('thumbList', 'bgpattern', 'Background Pattern', 'Select the background pattern to be used if layout style is Boxed with Background Pattern.', 'bg1.png', $patterns);
        $this->newOption('imageURL', 'bgpatternCustom', '', 'Or use a external pattern.');
        $this->newOption('imageURL', 'bgimage', 'Background Image', 'Select the background pattern to be used if layout style is Boxed with Background Pattern.');
        $this->newOption('imageURL', 'faviconURL', 'Favicon URL', 'Use a external link for include your favicon image.');
        $this->newOption('select', 'font', 'Font', 'Select the font style','oxygen', array('arial' => 'Arial','calibri' => 'Calibri','helvetica' => 'Helvetica','lato' => 'Lato', 'oxygen' => 'Oxygen', 'roboto' => 'Roboto', 'ubuntu' => 'Ubuntu', 'verdana' => 'Verdana'));        
        $this->newOption('radio', 'shibbolethLogin', 'Shibboleth Login', 'Activate the link of shibboleth login in login page.', '0', array('0' => 'No', '1' => 'Yes'));
        $this->newOption('radio', 'guestLogin', 'Guest Login', 'Activate the login as guest.', '0', array('0' => 'No', '1' => 'Yes'));
        $this->newOption('radio', 'generalSidebar', 'Sidebar', 'Choose the default side of your sidebar in general.', 'side-pre', array('side-pre' => 'Left', 'side-post' => 'Right'));
        $this->newOption('radio', 'breadcrumb', 'Breadcrumb', 'Select "ON" to enable Breadcrumb or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('radio', 'editPageButton', 'Edit Page Button', 'Select "ON" to enable "Edit Page Button" or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('longtext', 'googleAnalytics', 'Google Analytics', 'Put your Google Analytics code');
        $this->newOption('longtext', 'customCSS', 'Custom CSS', 'Add custom CSS to theme');


      $this->newTab(get_string('footersettings', 'theme_adaptable'), get_string('footersettings', 'theme_adaptable'), 'font');

        $this->newOption('title', '', 'Select Modules', 'Choose until 3 options of modules to be showing on FOOTER section.');
        $this->newOption('title', '', '', '<b>Module 1</b>');
        $this->newOption('select', 'module1', '', '','none', array('none' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image'));
        $this->newOption('title', '', '', '<b>Module 2</b>');
        $this->newOption('select', 'module2', '', '','none', array('none' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image'));
        $this->newOption('title', '', '', '<b>Module 3</b>');
        $this->newOption('select', 'module3', '', '','none', array('none' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image'));
        $this->newOption('text', 'copyright', 'Footer Text / Copyright', 'Type the texts you want view on the last bar.','');
        $this->newOption('radio', 'footerSocialIcons', 'Footer Social Icons', 'Select "ON" to enable Social Icons on FOOTER section or "OFF" to disable.', '1', array('1' => 'On', '0' => 'Off'));

        $this->newTab('footerModule','footer Module','footerModules.png');

        $this->newOption('title', '', 'About Us', 'Talk about you. The text and image (200x70) bellow will be on module "About Us" on footer.');
        $this->newOption('title', '', '', '<b>Use an Image (URL)</b>');
        $this->newOption('imageURL', 'footermod_aboutus_whitelogo', '', '');
        $this->newOption('title', '', '', '<b>Description</b>');
        $this->newOption('longtext', 'footermod_aboutus_text', '', '');

        $this->newOption('separator');
        $this->newOption('list', 'footermod_links', 'Links', 'Insert useful links on your footer section.', '', array('text' => 'Link Title', 'link' => 'Link URL'));

        $this->newOption('separator');
        $this->newOption('title', '', 'Contact Info', 'Type your contact informations.');
        $this->newOption('title', '', '', '<b>Address</b>');
        $this->newOption('text', 'footermod_contact_address', '', '');
        $this->newOption('title', '', '', '<b>City</b>');
        $this->newOption('text', 'footermod_contact_city', '', '');
        $this->newOption('title', '', '', '<b>Phone Number</b>');
        $this->newOption('text', 'footermod_contact_phone', '', '');
        $this->newOption('title', '', '', '<b>E-mail</b>');
        $this->newOption('text', 'footermod_contact_mail', '', '');

        $this->newOption('separator');
        $this->newOption('title', '', 'Image', 'You can use an image on footer as some feature of your business.');
        $this->newOption('title', '', '', '<b>Image Title</b>');
        $this->newOption('text', 'footermod_image_title', '', '');
        $this->newOption('title', '', '', '<b>Image URL</b>');
        $this->newOption('imageURL', 'footermod_image_url', '', '');

        $this->newTab('frontpage','frontpage','frontpage.png');

        $this->newOption('radio', 'slidermode', 'Slideshow', 'Select "ON" to enable Slideshow on your frontpage or "OFF" to disable.', 'banner', array('slideshow' => 'On', 'banner' => 'Off'));
        $this->newOption('radio', 'sliderplugin', 'Slideshow Type', 'Select the Slideshow Plugin.', 'banner', array('content' => 'Content Slider', 'plume' => 'Plume Slider'));
        $this->newOption('text', 'sliderspeed', 'Slideshow Interval', 'Slideshow Interval in Miliseconds. Default: 3000ms.','3000');
        $this->newOption('text', 'sliderheight', 'Slideshow Height', 'Slideshow Height in Pixels. Default: 400px','400');
        $this->newOption('slideshow', 'slideshowdata', 'Slider Content', 'Type all informations about your content to each slider.', '');
        $this->newOption('select', 'sliderpattern', 'Slideshow Background', 'Choose a pattern to use as slideshow background.','waves', array('arches' => 'Arches', 'escheresque' => 'Escheresque', 'pinstripedsuit' => 'Pinstriped Suit', 'color' => 'Theme Color', 'waves' => 'Waves'));
        $this->newOption('radio', 'frontpagesidebar', 'Sidebar', 'Choose the default side of your sidebar.','none', array('side-pre' => 'Left Bar', 'side-post' => 'Right Bar', 'none' => 'None'));
        $this->newOption('radio', 'showfeaturedcourses', 'Featured Courses', 'Select "ON" to enable Featured Courses on Frontpage site or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('select', 'courseName', 'Course Name', 'Choose the Course name that appears in Featured Courses and My Courses.','fullname', array('shortname' => 'Shortname', 'fullname' => 'Fullname'));
        $this->newOption('singlelist', 'featuredcourses', 'Select your features courses', 'Select your featured courses bellow to show on Frontpage.', 'Name of Course', $courses);
        $this->newOption('radio', 'showlinkboxes', 'Link Box', 'Select "ON" to enable Link Boxes on your frontpage or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('linkbox', 'linkboxdata', 'Link Box Content', 'Type all informations about your content to each Link Box.', '');

        $this->newTab('socials','socials','socials.png');
        $this->newOption('text', 'social_rss', 'RSS', '','');
        $this->newOption('text', 'social_twitter', 'Twitter', '','');
        $this->newOption('text', 'social_dribbble', 'Dribbble', '','');
        $this->newOption('text', 'social_vimeo', 'Vimeo', '','');
        $this->newOption('text', 'social_facebook', 'Facebook', '','');
        $this->newOption('text', 'social_youtube', 'Youtube', '','');
        $this->newOption('text', 'social_flickr', 'Flickr', '','');
        $this->newOption('text', 'social_gplus', 'Google+', '','');
        $this->newOption('text', 'social_linkedin', 'Linkedin', '','');
        $this->newOption('text', 'social_tumblr', 'Tumblr', '','');
        $this->newOption('text', 'social_wordpress', 'Wordpress', '','');
        $this->newOption('text', 'social_pinterest', 'Pinterest', '','');
**/

        $this->footer();
    }
}

?>
