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
 * Theme remui.
 *
 * @package   theme_remui_infnet
 * @copyright  2016 Frédéric Massart
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.   
defined('MOODLE_INTERNAL') || die();
// This is the version of the plugin. 
$plugin->version = 2021052600;
// This is the version of Moodle this plugin requires. 
$plugin->requires  = 2018112800;
// This version's maturity level.
$plugin->maturity  = MATURITY_STABLE; 
// versao do plugin num formato mais simples
$plugin->release   = '3.9.9';
// This is the component name of the plugin - it always starts with 'theme_'                                                        
// for themes and should be the same as the name of the folder.        
$plugin->component = 'theme_remui_infnet';
// This is a list of plugins, this plugin depends on (and their versions).                                                          
$plugin->dependencies = [                                                                                                           
    'theme_remui' => '2021031700'                                                                                                   
];
