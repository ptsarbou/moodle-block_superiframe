<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_superiframe');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superiframe/view.php');
$PAGE->set_heading($SITE->fullname);
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_superiframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superiframe'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_superiframe'),5);

// Some content goes here
echo "I am some dummy content. Get rid of me fast!";
echo '<br>' . fullname($USER);
echo '<br>' . $OUTPUT->user_picture($USER);
//echo '<br>' . "This is the weather in Athens";
//echo '<p><iframe src="//api.weather365.net/foreign/citygeoip.php?language=31&tm=3&bgc=000&tc=FFF width="99%" height="150" align="left" scrolling="no" frameborder="0" allowtransparency="true" name="Weather365"> <p>Your browser cannot show frames - click here <a href="http://www.weather365.net"> WEATHER365.net </a></p> </iframe>';
echo '<br>';

$src=$def_config->url;
$height=$def_config->height;
$width=$def_config->width;
echo "<iframe src='$src' height='$height' width='$width'></iframe>";
echo '<br>' . "$def_config->pagelayout";


//send footer out to browser
echo $OUTPUT->footer();
return;
	