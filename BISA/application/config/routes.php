<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['edit_stasiun'] ='admin/edit_stasiun';

$route['admin/dashboard/edit(:any)'] ='admin/keHalamanEdit/$1';
$route['login'] = 'admin/keHalamanLogin';
$route['hapusStasiun/(:any)'] ='admin/hapus_stasiun/$1';
$route['prosesLogin'] ='admin/Login';
$route['logout'] = 'admin/Logout';
$route['admin/dashboard'] ='admin/keHalamanDashboard';
//tambahStasiun
$route['tambahStasiun'] ='admin/tambah_stasiun';
//hapusStasiun


$route['konfirmasi'] = 'guest/keHalamanKonfirmasi';
$route['default_controller'] = 'guest/keHalamanDepan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
