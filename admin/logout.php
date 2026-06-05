<?php
// admin/logout.php
session_start(); // 1. Wajib panggil session_start dulu agar server tahu sesi mana yang mau dihapus

// 2. Bersihkan semua isi variabel session
$_SESSION = array();

// 3. Hapus cookie session di browser (Biar session bener-bener mati total)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Hancurkan session dari memori server
session_destroy();

// 5. TENDANG BALIK KE HALAMAN UTAMA (catalog.php atau index.php depan)
// Gunakan ../ untuk keluar dari folder admin
header("Location: ../index.php"); 
exit; // Wajib dikasih exit agar script berhenti total di sini