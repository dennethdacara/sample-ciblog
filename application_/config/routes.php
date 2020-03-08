<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// posts
$route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/edit/$1'] = 'posts/edit/$1'; // no need to declare
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';

// static pages
$route['(:any)'] = 'pages/view/$1';
