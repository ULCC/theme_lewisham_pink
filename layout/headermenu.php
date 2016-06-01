<?php
$mycourselink = $CFG->wwwroot.'/course/view.php?id=5159&amp;topic=1';
if (!isguestuser() && isloggedin()) {
   require_once($CFG->dirroot.'/lib/adodb/adodb.inc.php');
   global $USER, $DB;
   $mis = NewADOConnection("mysqli") ;
   $mis->SetFetchMode(ADODB_FETCH_ASSOC) ;

   try{

      $sql = "
SELECT mdl_course.id id
FROM mdl_course, mdl_role_assignments, mdl_context
WHERE contextid = mdl_context.id
AND category = 30
AND contextlevel = 50
AND userid = $USER->id
AND instanceid = mdl_course.id
ORDER BY id
" ;
      if($maincourse = $DB->get_record_sql($sql)) {
         $mycourselink = $CFG->wwwroot.'/course/view.php?id='.$maincourse->id.'&amp;topic=1';
      } else {
         //echo $sql ;
      }

   } catch (exception $e ) {
      //var_dump($e);
   }
}

echo '<div id="navcontainer">';
echo '<ul id="navlist">';
echo "<li class='courses'><a href='$CFG->wwwroot/my'>My Home</a></li>";
echo '<li class="learning"><a href="'.$CFG->wwwroot.'/course/view.php?id=83">Learning Centre</a></li>';
echo '<li class="support"><a href="'.$CFG->wwwroot.'/course/view.php?id=85">Support</a></li>';
echo '<li class="getinvolved"><a href="'.$CFG->wwwroot.'/course/view.php?id=84">My Future</a></li>';
echo '</ul>';
echo '</div>';