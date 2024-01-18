<?php
$page = "home";
$title = "Home | Green Makers Media";
$company_name = "Grizzly Technologies";

error_reporting(E_ALL);
ini_set('display_errors', 1); //showing errors in browser
include 'libs/load.php';
include '_partials/_head.php';
include '_partials/_header.php';
load_template('banner');
load_template('feature_area');
load_template('about_area');
load_template('services_area');
load_template('testimonial_area');
load_template('gallery_area');
load_template('contact_area');
include '_partials/_footer.php';
