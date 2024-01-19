<?php
include 'libs/load.php';
$company_name = "Grizzly Technologies";
$page =  "About";
$title = "About | Green Makers Media";
include '_partials/_head.php';
include '_partials/_header.php';
include '_partials/_breadcrumb_area.php';
load_template('about_area');
load_template('skill_area');
load_template('cta_area');
include '_partials/_footer.php';
