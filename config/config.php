<?php
// Database connection
// MySQLi or PDO
try {
    // DB Constants
    define("HOST", "localhost");
    define("DBNAME", "anime");
    define("USER", "root");
    define("PASS", "");

    // Make sure APPURL is defined only once
    if (!defined('APPURL')) {
        define("APPURL", "http://localhost/anime-main");
    }


    // DSN with charset
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8mb4", USER, PASS);

    // Error Mode: Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Connection test (for debug only)
    // echo "Database connection successful";

} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage(); // log this in production instead
}
