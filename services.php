<?php
$company_name = "Grizzly Technologies";
include 'libs/load.php';
$page =  "Services ";
$title = "Services | Green Makers Media";
include '_partials/_head.php';
include '_partials/_header.php';
include '_partials/_breadcrumb_area.php';
load_template('services_area');
load_template('skill_area');
load_template('pricing_area');
include '_partials/_footer.php';
