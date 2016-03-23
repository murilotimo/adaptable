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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


$logintemplate = get_config('theme_adaptable', 'logintemplate');
$loginbox1enabled = get_config('theme_adaptable', 'loginbox1enabled');
$loginbox1content = get_config('theme_adaptable', 'loginbox1content');
$loginbox2enabled = get_config('theme_adaptable', 'loginbox2enabled');
$loginbox2content = get_config('theme_adaptable', 'loginbox2content');
$loginbox3enabled = get_config('theme_adaptable', 'loginbox3enabled');
$loginbox3content = get_config('theme_adaptable', 'loginbox3content');
$loginbox4enabled = get_config('theme_adaptable', 'loginbox4enabled');
$loginbox4content = get_config('theme_adaptable', 'loginbox4content');

$loginlogourl = $PAGE->theme->setting_file_url('loginlogo', 'loginlogo');


// Get the fonts.
$fontname = str_replace(" ", "+", $PAGE->theme->settings->fontname);
$fontheadername = str_replace(" ", "+", $PAGE->theme->settings->fontheadername);
$fonttitlename = str_replace(" ", "+", $PAGE->theme->settings->fonttitlename);

// Get the fonts subset.
if (!empty($PAGE->theme->settings->fontsubset)) {
    $fontssubset = '&subset=latin,'.$PAGE->theme->settings->fontsubset;
} else {
    $fontssubset = '';
}

// Font weights.
if (!empty($PAGE->theme->settings->fontweight)) {
    $fontweight = ':'.$PAGE->theme->settings->fontweight;
} else {
    $fontweight = ':400';
}

if (!empty($PAGE->theme->settings->fontheaderweight)) {
    $fontheaderweight = ':'.$PAGE->theme->settings->fontheaderweight;
} else {
    $fontheaderweight = ':400';
}

if (!empty($PAGE->theme->settings->fonttitleweight)) {
    $fonttitleweight = ':'.$PAGE->theme->settings->fonttitleweight;
} else {
    $fonttitleweight = ':700';
}

// Get the HTML for the settings bits.
$html = theme_adaptable_get_html_for_settings($OUTPUT, $PAGE);


echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?> style="height:100%;">
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link rel="stylesheet" href="<?php p($CFG->wwwroot) ?>/theme/adaptable/style/font-awesome.min.css">

<?php
if (!empty($fontname) && $fontname != 'default') {
?>
        <link href='https://fonts.googleapis.com/css?family=<?php echo $fontname.$fontweight.$fontssubset; ?>'
        rel='stylesheet'
        type='text/css'>
<?php
}
?>

<?php
if (!empty($fontheadername) && $fontheadername != 'default') {
?>
    <link href='https://fonts.googleapis.com/css?family=<?php echo $fontheadername.$fontheaderweight.$fontssubset; ?>'
    rel='stylesheet'
    type='text/css'>
<?php
}
?>

<?php
if (!empty($fonttitlename)  && $fonttitlename != 'default') {
?>
    <link href='https://fonts.googleapis.com/css?family=<?php echo $fonttitlename.$fonttitleweight.$fontssubset; ?>'
    rel='stylesheet'
    type='text/css'>
<?php
}
?>

<?php echo $OUTPUT->standard_head_html() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="alt_login" style="height:100%;">


<?php echo $OUTPUT->standard_top_of_body_html() ?>


<div class="header">
<div class="container">
<div id="logocontainer">
              <img class="sitelogo" src="<?php echo $loginlogourl ?>" width="400px" alt="Custom logo here" />
            </div>

<?php
          if (!empty($errormsg)) {
              echo html_writer::start_tag('div', array('class' => 'loginerrors'));
              echo html_writer::link('#', $errormsg, array('id' => 'loginerrormessage', 'class' => 'accesshide'));
              echo $OUTPUT->error_text($errormsg);
              echo html_writer::end_tag('div');
          }
        ?>


      <div class="subcontent loginsub">
        




        <form action="<?php echo $CFG->httpswwwroot; ?>/login/index.php" method="post" id="login" <?php echo $autocomplete; ?> >
          <div class="loginform">
           


            <div class="form-input">
              <div class="floatleft">
              <input type="text" placeholder="Username" name="username" id="username" size="15" value="<?php p($frm->username) ?>" />
          </div><div class="floatleft">
              <input placeholder="Password" type="password" name="password" id="password" size="15" value="" <?php echo $autocomplete; ?> />
            </div>
            <input type="submit" id="loginbtn" value="<?php print_string("login") ?>" />

             </div>
      

<div class="extra">
              <a href="forgot_password.php">Forgot password?</a> | <?php echo 'How we use Cookies';
                echo $OUTPUT->help_icon('cookiesenabled'); ?>
              </div>
</div>     
</div>
     </form>  
      </div>





</div></div>
<?php

echo $OUTPUT->get_alert_messages();

?>

<?php
    echo $OUTPUT->get_news_ticker();
    ?>


    

<div class="fullpage"></div>
<div id="bgcolor"></div>
<div id="bgtrans"></div>
<div class="container outercont">
    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
         <?php echo $OUTPUT->main_content() ?>   

<?php
if ($logintemplate == 1) {
?>
   <div id="marketblocks" class="container"> 
   <div class="row-fluid marketrow_a">       


<!-- CONTENT AREA -->
<div class="span3 first box1 layouta">
<?php
if ($loginbox1enabled == show) { 
  echo $loginbox1content; 
  } ?> 
  </div>

<div class="span3 first box2 layouta">
<?php
if ($loginbox2enabled == show) { 
  echo $loginbox2content;
  } ?> 
  </div>

<div class="span3 first box3 layouta">
<?php
if ($loginbox3enabled == show) { 
  echo $loginbox3content;
  } ?> 
  </div>

<div class="span3 first box4 layouta">
<?php
if ($loginbox4enabled == show) { 
  echo $loginbox4content;
  } ?> 
  </div>
  <!-- END CONTENT -->

<?php
}

    elseif ($logintemplate == 2) {
      ?>


   <div id="marketblocks" class="container"> 
   <div class="row-fluid marketrow_b"> 


<!-- CONTENT AREA -->
<div class="span12 first box1 layoutb">
<?php
if ($loginbox1enabled == show) { 
  echo $loginbox1content; 
  } ?> 
  </div>

<div class="span12 first box2 layoutb">
<?php
if ($loginbox2enabled == show) { 
  echo $loginbox2content;
  } ?> 
  </div>

<div class="span12 first box3 layoutb">
<?php
if ($loginbox3enabled == show) { 
  echo $loginbox3content;
  } ?> 
  </div>

<div class="span12 first box4 layoutb">
<?php
if ($loginbox4enabled == show) { 
  echo $loginbox4content;
  } ?> 
  </div>

<!-- END CONTENT -->


<?php   
 }
    elseif ($logintemplate == 3) {
        ?>
    
   <div id="marketblocks" class="container"> 
   <div class="row-fluid marketrow_c">       


<!-- CONTENT AREA -->
<div class="span6 first box1 layoutc">
<?php
if ($loginbox1enabled == show) { 
  echo $loginbox1content; 
  } ?> 
  </div>

<div class="span6 first box2 layoutc">
<?php
if ($loginbox2enabled == show) { 
  echo $loginbox2content;
  } ?> 
  </div>

<div class="span6 first box3 layoutc">
<?php
if ($loginbox3enabled == show) { 
  echo $loginbox3content;
  } ?> 
  </div>

<div class="span6 first box4 layoutc">
<?php
if ($loginbox4enabled == show) { 
  echo $loginbox4content;
  } ?> 
  </div>

<!-- END CONTENT -->
        
  <?php
  }
  ?>  



</div>
</div>




        </section>
    </div>

</div>
<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
<?php echo $PAGE->theme->settings->jssection; ?>
<?php echo $OUTPUT->get_analytics(); ?>


</body>
</html>