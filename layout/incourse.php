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
 * Edwiser RemUI
 * @package   theme_remui_infnet
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/theme/remui/layout/incourse.php');

$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2); // Customização Infnet
$PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/incourse.js'));
if($uri_parts[0] == '/moodle/mod/page/view.php'){
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/local_zoomadmin.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/fokus/js/fokus.min.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/highlight/highlight.pack.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/fluidbox/jquery.fluidbox.js'));	
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/bigfoot/bigfoot.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/inits.js'));
}
else if ($uri_parts[0] == '/moodle/mod/assign/view.php') {
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/bigfoot/bigfoot.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/highlight/highlight.pack.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/inits-highlight.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/rubric.js'));
}
else if ($uri_parts[0] == '/moodle/mod/quiz/attempt.php') {
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/highlight/highlight.pack.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/inits-highlight.js'));
} 
else if ($uri_parts[0] == '/moodle/report/competency/index.php') {
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/reportcompetency.js'));
} 
else if ($uri_parts[0] == '/moodle/admin/tool/lp/coursecompetencies.php' ||
             $uri_parts[0] == '/moodle/report/coursecompetencies/index.php') {
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/bigfoot/bigfoot.js'));
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/coursecompetencies.js'));
} 
else if ($uri_parts[0] == '/moodle/mod/attendance/take.php') {
    $PAGE->requires->js( new moodle_url($CFG->wwwroot . '/theme/remui_infnet/javascript/attendance.js'));
}
