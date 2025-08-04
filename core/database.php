<?php

function get_pdo_connection() {
    // static değişken, bağlantının sayfa içinde sadece bir kez kurulmasını sağlar.
    static $pdo = null;

    if ($pdo === null) {
        // Veritabanı bağlantı bilgileri (docker-compose.yml dosyasından alınmıştır)
        define('DB_HOST', 'mysql');
        define('DB_NAME', 'itskaidb');
        define('DB_USER', 'gemini_user');
        define('DB_PASS', 'gemini_password');

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (\PDOException $e) {
            // Bağlantı hatası durumunda, detayı gösterme, logla ve genel bir hata mesajı ver.
            // error_log($e->getMessage()); // Hataları bir dosyaya loglamak için
            throw new \PDOException("Veritabanı bağlantı hatası.", (int)$e->getCode());
        }
    }

    return $pdo;
}
