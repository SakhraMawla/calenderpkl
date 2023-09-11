<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['calender'] = 'page/calender';
$route['(open_ticket|view_ticket|form_ticket|ticket|login|calender)'] = 'page/format/$1';
$route['test'] = 'page/test';
