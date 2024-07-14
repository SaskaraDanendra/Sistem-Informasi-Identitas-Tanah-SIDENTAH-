<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardController::index');

// Route Admin Dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin produk
$routes->get('datainduk', 'Admin\DataIndukController::form_create');
$routes->post('datainduk/create-c', 'Admin\DataIndukController::create_c');

// route admin produk
$routes->get('datainduk1', 'Admin\DataIndukController::datainduk1');
$routes->get('datainduk1/detail/(:num)', 'Admin\DataIndukController::detail/$1');

// route admin bidangtanah
$routes->get('bidangtanah', 'Admin\DataIndukController::bidangtanah');
$routes->post('datainduk1/tambah1', 'Admin\DataIndukController::tambah1');
$routes->post('datainduk1/tambahBidangTanah', 'Admin\DataIndukController::tambahBidangTanah'); // Rute baru untuk tambahBidangTanah
$routes->post('bidangtanah/destroy/(:num)', 'Admin\DataIndukController::destroyBidangTanah/$1'); // Rute baru untuk Hapus Bidang Tanah
$routes->put('datainduk1/ubah/(:num)', 'Admin\DataIndukController::update/$1');
$routes->delete('datainduk1/hapus/(:num)', 'Admin\DataIndukController::destroy/$1');
$routes->get('bidangtanah/get/(:num)', 'Admin\DataIndukController::getBidangTanah/$1');
$routes->post('datainduk1/updateBidangTanah', 'Admin\DataIndukController::updateBidangTanah');
$routes->get('detailtanah/detail_bidangc/(:num)', 'Admin\DetailTanahController::detail_bidangc/$1');
$routes->post('sppt/tambah', 'Admin\DetailTanahController::tambahSppt');
$routes->post('sppt/update', 'Admin\SpptController::update');
$routes->get('letak_bidang', 'Admin\LetakBidangController::index');
$routes->post('letak_bidang/tambah', 'Admin\LetakBidangController::tambah');
$routes->post('letak_bidang/update', 'Admin\LetakBidangController::update');

$routes->post('batas_bidang/tambah', 'Admin\BatasBidangController::tambah');
$routes->post('batas_bidang/update', 'Admin\DetailTanahController::updateBatasBidang');

$routes->post('admin/detailtanah/tambahBatasBidang', 'Admin\DetailTanahController::tambahBatasBidang');
$routes->post('batas_bidang/update', 'Admin\DetailTanahController::updateBatasBidang');
$routes->post('admin/detailtanah/tambahRiwayatBidang', 'Admin\DetailTanahController::tambahRiwayatBidang');
$routes->post('admin/detailtanah/updateRiwayatBidang', 'Admin\DetailTanahController::updateRiwayatBidang');




//route admin akun
$routes->get('akun', 'Admin\AkunController::index');
$routes->put('akun/ubah/(:num)', 'Admin\AkunController::update/$1');
$routes->delete('akun/hapus/(:num)', 'Admin\AkunController::delete/$1');

//route Detail Tanah
$routes->get('detailtanah', 'Admin\DetailTanahController::index');
$routes->get('detailtanah/detail_bidangc/(:num)', 'Admin\DetailTanahController::detail_bidangc/$1');


// route admin detail
$routes->get('datainduk1/detail-letterc/(:num)', 'Admin\DataIndukController::detail_letterc/$1');
$routes->get('data_letter/detail_letterc/(:num)', 'Admin\DataIndukController::detail_letterc/$1');
