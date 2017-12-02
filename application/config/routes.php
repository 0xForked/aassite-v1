<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Auth Controller
$route['login'] = 'auth';

//Admin Controller
$route['dashboard'] = 'admin';
$route['dashboard/messages'] = 'admin/messages';
$route['dashboard/article'] = 'admin/article_all';
$route['dashboard/article/create'] = 'admin/article_add';
$route['dashboard/article/categories'] = 'admin/categories';
$route['dashboard/article/tags'] = 'admin/tags';
$route['dashboard/portfolio'] = 'admin/portfolio_all';
$route['dashboard/portfolio/create'] = 'admin/portfolio_add';
$route['dashboard/media'] = 'admin/media';

//Pages
$route['project'] = 'pages/project';
$route['blog'] = 'pages/blog';
$route['contact'] = 'pages/contact';
$route['privacy'] = 'pages/privacy';
$route['about'] = 'pages/about';

//Detail
$route['blog/(:any)'] = 'article/view_detail/$1';
$route['categories/(:any)'] = 'article/view_category/$1';
$route['project/(:any)'] = 'portfolio/view_category/$1';

//Main
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
