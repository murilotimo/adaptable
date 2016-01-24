<?php
    if(!is_siteadmin()){
        redirect($CFG->wwwroot);
    }

require_once(dirname(__FILE__) . '/includes/header.php');

    if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
        $course_header = $OUTPUT->course_header();
        $course_content_header = $OUTPUT->course_content_header();
        if (empty($PAGE->layout_options['nocoursefooter'])) {
            $course_content_footer = $OUTPUT->course_content_footer();
            $course_footer = $OUTPUT->course_footer();
        }
    }

           
require_once(dirname(__FILE__) . '/includes/header.php');

?>

<div class="container outercont">
    <div id="page-content" class="row-fluid">
            <?php echo $OUTPUT->page_navbar(true); ?>
        <section id="region-main" class="span12">
           <?php echo $course_content_header; ?>
           <?php echo $OUTPUT->main_content() ?>
           <?php echo $course_content_footer; ?>
        </section>
    </div>
</div>
<?php
require_once(dirname(__FILE__) . '/includes/footer.php');
