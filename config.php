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
 * Config for Lewisham College theme
 *
 * This theme is the theme within Moodle 2.0, it builds upon the base theme
 * adding only CSS to create a simple look and feel.
 *
 * @copyright 2011 ULCC
 *
 */

// Name of the theme. 

$THEME->name = 'lewisham_pink';

// List exsisting theme(s) to use as parents.

$THEME->parents = array(
	'canvas',
	'base',
);

// Name of the stylesheet(s) including in
// this new theme's /styles/ directory.

$THEME->sheets = array(
    'core',
	'ilp',
	'navigation',
    'printstyles'
);

// Do you want to use the new navigation dock?

$THEME->enable_dock = false;

// These are all of the possible layouts in Moodle.

$THEME->layouts = array(
    'base' => array(
        'file' => 'standard.php',
        'regions' => array(),
    ),
    'standard' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'course' => array(
        'file' => 'course.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'coursecategory' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    'incourse' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'admin' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'mydashboard' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    'mypublic' => array(
        'file' => 'standard.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'login' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),
    'popup' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'frametop' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'maintenance' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true),
    ),
    'print' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>false),
    ),
    'ilp' => array(
        'file' => 'standard.php',
        'regions' => array(),
    ),
);
 
