<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['posts'] = 'posts/index';
$route['posts/(:any)'] = 'posts/view/$1';

// static pages
$route['(:any)'] = 'pages/view/$1';