<?php

// Hata raporlamayı aç (sadece geliştirme aşamasında)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Oturum yönetimini başlat
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Gerekli dosyaları güvenli yollarla dahil et
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/helpers.php';

// Sunucu adına göre BASE_URL'i dinamik olarak ayarla
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost' || $host === '127.0.0.1') {
    $project_folder = '/kai'; 
    define('BASE_URL', $protocol . $host . $project_folder);
} else {
    define('BASE_URL', $protocol . $host);
}
