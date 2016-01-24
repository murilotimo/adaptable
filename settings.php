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

    $ADMIN->add('root', new admin_externalpage('adaptable', 'Adaptable', $CFG->wwwroot."/theme/adaptable/settings/index.php"));
    
    /* Setting default settings */
    
    /* General */
    $moodleVersion = get_config('theme_adaptable','moodleVersion');
    if(!isset($moodleVersion) || trim($moodleVersion) == "") set_config('moodleVersion','28','theme_adaptable');

    $themecolor = get_config('theme_adaptable','themecolor');
    if(!isset($themecolor) || trim($themecolor) == "") set_config('themecolor','orange','theme_adaptable');

    $layoutstyle = get_config('theme_adaptable','layoutStyle');
    if(!isset($layoutstyle) || trim($layoutstyle) == "") set_config('layoutStyle','wide','theme_adaptable');

    $generalsidebar = get_config('theme_adaptable','generalsidebar');
    if(!isset($generalsidebar) || trim($generalsidebar) == "") set_config('generalsidebar','side-pre','theme_adaptable');

    $faviconurl = get_config('theme_adaptable','faviconurl');
    if(!isset($faviconurl) || trim($faviconurl) == "") set_config('faviconurl','','theme_adaptable');

    $breadcrumb = get_config('theme_adaptable','breadcrumb');
    if(!isset($breadcrumb) || trim($breadcrumb) == "") set_config('breadcrumb','1','theme_adaptable');

    $font = get_config('theme_adaptable','font');
    if(!isset($font) || trim($font) == "") set_config('font','oxygen','theme_adaptable');

    $shibbolethLogin = get_config('theme_adaptable','shibbolethLogin');
    if(!isset($shibbolethLogin) || trim($shibbolethLogin) == "") set_config('shibbolethLogin','0','theme_adaptable');

    $guestLogin = get_config('theme_adaptable','guestLogin');
    if(!isset($guestLogin) || trim($guestLogin) == "") set_config('guestLogin','0','theme_adaptable');

    $customColorScheme1 = get_config('theme_adaptable','customColorScheme1');
    if(!isset($customColorScheme1) || trim($customColorScheme1) == "") set_config('customColorScheme1','#FFFFFF','theme_adaptable');

    $customColorScheme2 = get_config('theme_adaptable','customColorScheme2');
    if(!isset($customColorScheme2) || trim($customColorScheme2) == "") set_config('customColorScheme2','#FFFFFF','theme_adaptable');

    $customColorScheme3 = get_config('theme_adaptable','customColorScheme3');
    if(!isset($customColorScheme3) || trim($customColorScheme3) == "") set_config('customColorScheme3','#FFFFFF','theme_adaptable');

    $customColorScheme4 = get_config('theme_adaptable','customColorScheme4');
    if(!isset($customColorScheme4) || trim($customColorScheme4) == "") set_config('customColorScheme4','#FFFFFF','theme_adaptable');

    $editPageButton = get_config('theme_adaptable','editPageButton');
    if(!isset($editPageButton) || trim($editPageButton) == "") set_config('editPageButton','1','theme_adaptable');

    $googleAnalytics = get_config('theme_adaptable','googleAnalytics');
    if(!isset($googleAnalytics) || trim($googleAnalytics) == "") set_config('googleAnalytics','','theme_adaptable');
    
    $customCSS = get_config('theme_adaptable','customCSS');
    if(!isset($customCSS) || trim($customCSS) == "") set_config('customCSS','','theme_adaptable');

    /* Frontpage */
    $frontpagesidebar = get_config('theme_adaptable','frontpagesidebar');
    if(!isset($frontpagesidebar) || trim($frontpagesidebar) == "") set_config('frontpagesidebar','','theme_adaptable');
   
    $featuredcourses = get_config('theme_adaptable','featuredcourses');
    if(!isset($featuredcourses) || trim($featuredcourses) == "") set_config('featuredcourses','','theme_adaptable');
    
    $showfeaturedcourses = get_config('theme_adaptable','showfeaturedcourses');
    if(!isset($showfeaturedcourses) || trim($showfeaturedcourses) == "") set_config('showfeaturedcourses','0','theme_adaptable');

    $courseName = get_config('theme_adaptable','courseName');
    if(!isset($courseName) || trim($courseName) == "") set_config('courseName','fullname','theme_adaptable');
    
        
    /* Linkbox */
    
    $linkboxdata = get_config('theme_adaptable','linkboxdata');
    if(!isset($linkboxdata) || trim($linkboxdata) == "") set_config('linkboxdata','[{"icon":"heart","title":"Linkbox 1","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"camera","title":"Linkbox 2","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"link","title":"Linkbox 3","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"rate","title":"Linkbox 4","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"}]','theme_adaptable');
    
    $showlinkboxes = get_config('theme_adaptable','showlinkboxes');
    if(!isset($showlinkboxes) || trim($showlinkboxes) == "") set_config('showlinkboxes','1','theme_adaptable');    
    
    /* Footer */
    $copyright = get_config('theme_adaptable','copyright');
    if(!isset($copyright) || trim($copyright) == "") set_config('copyright','All rights reserved  | Ararazu ®','theme_adaptable'); 

    $footermodule1 = get_config('theme_adaptable','footermodule1');
    if(!isset($footermodule1) || trim($footermodule1) == "") set_config('footermodule1','aboutus','theme_adaptable');     
    
    $footermodule2 = get_config('theme_adaptable','footermodule2');
    if(!isset($footermodule2) || trim($footermodule2) == "") set_config('footermodule2','links','theme_adaptable');     
    
    $footermodule3 = get_config('theme_adaptable','footermodule3');
    if(!isset($footermodule3) || trim($footermodule3) == "") set_config('footermodule3','contactinfo','theme_adaptable');     
    
    /* Header */
    $headerType = get_config('theme_adaptable','headerType');
    if(!isset($headerType) || trim($headerType) == "") set_config('headerType','1','theme_adaptable');     

    $logourl = get_config('theme_adaptable','logourl');
    if(!isset($logourl) || trim($logourl) == "") set_config('logourl','','theme_adaptable');
    
    $logoHeight = get_config('theme_adaptable','logoHeight');
    if(!isset($logoHeight) || trim($logoHeight) == "") set_config('logoHeight','70','theme_adaptable');

    $headerPadding = get_config('theme_adaptable','headerPadding');
    if(!isset($headerPadding) || trim($headerPadding) == "") set_config('headerPadding','25','theme_adaptable');

    $menuMarginTop = get_config('theme_adaptable','menuMarginTop');
    if(!isset($menuMarginTop) || trim($menuMarginTop) == "") set_config('menuMarginTop','3','theme_adaptable');

    $registerLink = get_config('theme_adaptable','registerLink');
    if(!isset($registerLink) || trim($registerLink) == "") set_config('registerLink','0','theme_adaptable');
    
    $loggedAs = get_config('theme_adaptable','loggedAs');
    if(!isset($loggedAs) || trim($loggedAs) == "") set_config('loggedAs','0','theme_adaptable');

    $menudata = get_config('theme_adaptable','menudata');
    if(!isset($menudata) || trim($menudata) == "") set_config('menudata','[{"text":"My","link":"http:\/\/localhost\/moodle253\/my\/","deep":"1"},{"text":"My Homepage 2","link":"#","deep":"2"},{"text":"Courses","link":"http:\/\/localhost\/moodle253\/course","deep":"1"},{"text":"Course A","link":"http:\/\/www.google.com","deep":"2"},{"text":"Course B","link":"http:\/\/www.facebook.com","deep":"2"},{"text":"Course C","link":"http:\/\/www.pinterest.com","deep":"2"},{"text":"Typography","link":"#","deep":"1"},{"text":"Documentation","link":"#","deep":"1"},{"text":"Installation","link":"#","deep":"2"},{"text":"Features","link":"#","deep":"2"}]','theme_adaptable');     
    
    /* Social Icons */
    
    $headersocialicon = get_config('theme_adaptable','headersocialicon');
    if(!isset($headersocialicon) || trim($headersocialicon) == "") set_config('headersocialicon','1','theme_adaptable');    
    
    $footersocialicon = get_config('theme_adaptable','footersocialicon');
    if(!isset($footersocialicon) || trim($footersocialicon) == "") set_config('footersocialicon','1','theme_adaptable');    
    
    
    /* Slider */
    
    $slidermode = get_config('theme_adaptable','slidermode');
    if(!isset($slidermode) || trim($slidermode) == "") set_config('slidermode','banner','theme_adaptable');    

    $sliderplugin = get_config('theme_adaptable','sliderplugin');
    if(!isset($sliderplugin) || trim($sliderplugin) == "") set_config('sliderplugin','plume','theme_adaptable');    
        
    $sliderspeed = get_config('theme_adaptable','sliderspeed');
    if(!isset($sliderspeed) || trim($sliderspeed) == "") set_config('sliderspeed','3000','theme_adaptable');    

    $sliderheight = get_config('theme_adaptable','sliderheight');
    if(!isset($sliderheight) || trim($sliderheight) == "") set_config('sliderheight','400','theme_adaptable');    

    $slidermode = get_config('theme_adaptable','slidermode');
    if(!isset($slidermode) || trim($slidermode) == "") set_config('slidermode','banner','theme_adaptable');    

    $sliderpattern = get_config('theme_adaptable','sliderpattern');
    if(!isset($sliderpattern) || trim($sliderpattern) == "") set_config('sliderpattern','waves','theme_adaptable');    
    
    $slideshowdata = get_config('theme_adaptable','slideshowdata');
    if(!isset($slideshowdata) || trim($slideshowdata) == "") set_config('slideshowdata','','theme_adaptable');    
    
    /* Footer modules */
    
    $footermod_aboutus_whitelogo = get_config('theme_adaptable','footermod_aboutus_whitelogo');
    if(!isset($footermod_aboutus_whitelogo) || trim($footermod_aboutus_whitelogo) == "") set_config('footermod_aboutus_whitelogo','','theme_adaptable');    
    
    $footermod_aboutus_text = get_config('theme_adaptable','footermod_aboutus_text');
    if(!isset($footermod_aboutus_text) || trim($footermod_aboutus_text) == "") set_config('footermod_aboutus_text','Donec vitae eros sit amet nibh fringilla hendrerit non at odio. Sed eu lacus hendrerit, venenatis elit ac, mollis massa. Sed nec enim ac justo feugiat tincidunt vitae sed felis. Pellentesque tincidunt viverra justo, eget posuere sem facilisis sit amet.','theme_adaptable');        

    $footermod_image_title = get_config('theme_adaptable','footermod_image_title');
    if(!isset($footermod_image_title) || trim($footermod_image_title) == "") set_config('footermod_image_title','Image Title','theme_adaptable');    

    $footermod_image_url = get_config('theme_adaptable','footermod_image_url');
    if(!isset($footermod_image_url) || trim($footermod_image_url) == "") set_config('footermod_image_url','','theme_adaptable');    

    $footermod_links = get_config('theme_adaptable','footermod_links');
    if(!isset($footermod_links) || trim($footermod_links) == "") set_config('footermod_links','[{"text":"Facebook - Share this!","link":"https:\/\/www.facebook.com\/"},{"text":"Google","link":"https:\/\/www.google.com.br\/"},{"text":"Twitter - Follow us!","link":"https:\/\/twitter.com\/"},{"text":"Ararazu","link":"http:\/\/themeforest.net\/user\/ararazu"}]','theme_adaptable');
  
    $footermod_contact_address = get_config('theme_adaptable','footermod_contact_address');
    if(!isset($footermod_contact_address) || trim($footermod_contact_address) == "") set_config('footermod_contact_address','Address 42','theme_adaptable');    

    $footermod_contact_city = get_config('theme_adaptable','footermod_contact_city');
    if(!isset($footermod_contact_city) || trim($footermod_contact_city) == "") set_config('footermod_contact_city','Rio - Brazil','theme_adaptable');    

    $footermod_contact_phone = get_config('theme_adaptable','footermod_contact_phone');
    if(!isset($footermod_contact_phone) || trim($footermod_contact_phone) == "") set_config('footermod_contact_phone','+99 (99) 9999-9999','theme_adaptable');    

    $footermod_contact_mail = get_config('theme_adaptable','footermod_contact_mail');
    if(!isset($footermod_contact_mail) || trim($footermod_contact_mail) == "") set_config('footermod_contact_mail','email@email.com','theme_adaptable');    
    
    /* Social Icons */
    
    $social_rss = get_config('theme_adaptable','social_rss');
    if(!isset($social_rss) || trim($social_rss) == "") set_config('social_rss','','theme_adaptable');    
    
    $social_twitter = get_config('theme_adaptable','social_twitter');
    if(!isset($social_twitter) || trim($social_twitter) == "") set_config('social_twitter','','theme_adaptable');    
    
    $social_dribbble = get_config('theme_adaptable','social_dribbble');
    if(!isset($social_dribbble) || trim($social_dribbble) == "") set_config('social_dribbble','','theme_adaptable');    
   
    $social_vimeo = get_config('theme_adaptable','social_vimeo');
    if(!isset($social_vimeo) || trim($social_vimeo) == "") set_config('social_vimeo','','theme_adaptable');  
    
    $social_facebook = get_config('theme_adaptable','social_facebook');
    if(!isset($social_facebook) || trim($social_facebook) == "") set_config('social_facebook','','theme_adaptable');
    
    $social_youtube = get_config('theme_adaptable','social_youtube');
    if(!isset($social_youtube) || trim($social_youtube) == "") set_config('social_youtube','','theme_adaptable');
    
    $social_flickr = get_config('theme_adaptable','social_flickr');
    if(!isset($social_flickr) || trim($social_flickr) == "") set_config('social_flickr','','theme_adaptable');
    
    $social_gplus = get_config('theme_adaptable','social_gplus');
    if(!isset($social_gplus) || trim($social_gplus) == "") set_config('social_gplus','','theme_adaptable');
    
    $social_linkedin = get_config('theme_adaptable','social_linkedin');
    if(!isset($social_linkedin) || trim($social_linkedin) == "") set_config('social_linkedin','','theme_adaptable');
    
    $social_tumblr = get_config('theme_adaptable','social_tumblr');
    if(!isset($social_tumblr) || trim($social_tumblr) == "") set_config('social_tumblr','','theme_adaptable');
    
    $social_wordpress = get_config('theme_adaptable','social_wordpress');
    if(!isset($social_wordpress) || trim($social_wordpress) == "") set_config('social_wordpress','','theme_adaptable');
    
    $social_pinterest = get_config('theme_adaptable','social_pinterest');
    if(!isset($social_pinterest) || trim($social_pinterest) == "") set_config('social_pinterest','','theme_adaptable');
    
    if(isset($_SERVER['QUERY_STRING']) && trim($_SERVER['QUERY_STRING']) == 'section=themesettingadaptable')
        redirect ($CFG->wwwroot.'/theme/adaptable/settings/index.php');
?>
