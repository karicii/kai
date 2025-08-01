<?php

// Sunucu adına göre BASE_URL'i dinamik olarak ayarla
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

// Localhost veya bilinen yerel geliştirme adresleri için
if ($host === 'localhost' || $host === '127.0.0.1') {
    // Projenin yerel sunucudaki klasör adını buraya yaz. Eğer kök dizindeyse boş bırak.
    $project_folder = '/kai'; 
    define('BASE_URL', $protocol . $host . $project_folder);
} else {
    // Canlı sunucu adresi
    define('BASE_URL', $protocol . $host);
}

?>
