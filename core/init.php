<?php

// Hata raporlamayı aç (sadece geliştirme aşamasında)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Oturum yönetimini başlat
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Projenin kök dizinini (ROOT_PATH) tanımla. Bu, dosya yollarını garantiler.
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

// Gerekli tüm temel dosyaları doğru sırada dahil et
require_once ROOT_PATH . '/core/config.php';
require_once ROOT_PATH . '/core/database.php';
require_once ROOT_PATH . '/core/helpers.php';
