<?php

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$bodyclasses = array();
if ($hassidepre && !$hassidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($hassidepost && !$hassidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$hassidepost && !$hassidepre) {
    $bodyclasses[] = 'content-only';
}

echo $OUTPUT->doctype(); ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<!-- jptest -->
<head>
  <title><?php echo $PAGE->title ?></title>
  <?php echo $OUTPUT->standard_head_html() ?>
</head>

<body id="<?php p($PAGE->bodyid); ?>" class="<?php echo $PAGE->bodyclasses.' '.join(' ', $bodyclasses) ?>">
  <?php echo $OUTPUT->standard_top_of_body_html() ?>
  <div id="page">
    <?php if ($PAGE->heading || (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar())) { ?>
    <div id="page-header">
      <div id="page-header-wrapper">
        <?php //if ($PAGE->heading) { ?>
        <img usemap='#homelink' src="<?php echo $OUTPUT->pix_url('logo', 'theme');?>" alt="Lewisham College - eME Student Portal" />
        <map name='homelink'>
          <area shape='rect' coords='11,21,136,145' href='http://eme.lesoco.ac.uk'>
        </map>
        <?php require_once($CFG->dirroot.'/theme/lewisham_transitional/layout/headermenu.php'); ?>
        <div class="headermenu"><?php
                                   echo $OUTPUT->login_info();
          if (!empty($PAGE->layout_options['langmenu'])) {
          echo $OUTPUT->lang_menu();
          }
          echo $PAGE->headingmenu ?></div>
        <?php //} ?>
        <?php if (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar()) { ?>
        <?php if ($hascustommenu) { ?>
        <div id="custommenu"><?php echo $custommenu; ?></div>
        <?php } ?>

        <?php } ?>
      </div>
	  <div class="navbar clearfix">
        <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
        <div class="navbutton"> <?php echo $PAGE->button; ?></div>
      </div>
    </div>
  </div>
  <?php } ?>

  <div id="page-content">

    <!-- START OF CONTENT -->
    <div id="page-content-wrapper" class="clearfix">
      <div id="page-content">
        <div id="report-main-content">
          <div class="region-content">
            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
          </div>
        </div>
        <?php if ($hassidepre) { ?>
        <div id="report-region-wrap">
          <div id="report-region-pre" class="block-region">
            <div class="region-content">
              <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <!-- END OF CONTENT -->

  <?php if (empty($PAGE->layout_options['nofooter'])) { ?>
  <div id="page-footer" class="clearfix">
    <div style="text-align:right; padding: 10px 0 0 0">Powered by <a href="http://moodle.org">Moodle</a> | Hosted by <a href="http://www.ulcc.ac.uk">ULCC</a><div>
      </div>
      <?php
         echo $OUTPUT->standard_footer_html();
      ?>
    </div>
    <?php } ?>
  </div>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
