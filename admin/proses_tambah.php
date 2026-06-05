<?php
// admin/proses_tambah.php
ob_start();
session_start();

// 1. SATPAM: Pastikan hanya admin sah yang bisa mengeksekusi script ini
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php?pesan=belum_login");
    exit;
}

// 2. Panggil file koneksi database
require_once '../config/koneksi.php';

// 3. FORCE CONNECTION FIX (Mengatasi error Argument #1 must be of type mysqli)
// Jika di file koneksi.php kamu memakai nama $koneksi, kita copy nilainya ke $conn
if (isset($koneksi) && !isset($conn)) {
    $conn = $koneksi;
}

// Jika setelah dicopy ternyata tetap kosong/null, kita tembak koneksi baru secara paksa di sini
if (!$conn) {
    $conn = mysqli_connect("localhost", "root", "", "db_pastry"); // Sesuaikan nama DB-mu jika bukan db_pastry
}

// 4. ========== PROSES TAMBAH PRODUK ==========
if (isset($_POST['tambah'])) {
    
    // Ambil data form dengan proteksi escape string
    $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $harga       = intval($_POST['harga']);
    $stok        = intval($_POST['stok']);
    $status_po   = mysqli_real_escape_string($conn, $_POST['status_po']); // Menangkap select name="status"
    $id_kategori = intval($_POST['id_kategori']);

    // Logika Pengelolaan File Foto
    $nama_file = $_FILES['foto_produk']['name'];
    $tmp_file  = $_FILES['foto_produk']['tmp_name'];
    $foto_final = "default-pastry.jpg"; // Gambar default jika tidak upload foto

    if (!empty($nama_file)) {
        $ekstensi = pathinfo($nama_file, PATHINFO_EXTENSION);
        // Rename file unik agar tidak bentrok di folder assets
        $foto_final = $nama_produk;
        $target_dir = "../assets/product/" . $foto_final;
        
        // Pindahkan file dari folder temporary local ke folder assets proyek
        move_uploaded_file($tmp_file, $target_dir);
    }

    // Perintah SQL insert data baru ke database
    $query_tambah = "INSERT INTO tabel_produk (nama_produk, harga, stok, status_po, foto_produk, id_kategori) 
                     VALUES ('$nama_produk', '$harga', '$stok', '$status_po', '$foto_final', '$id_kategori')";

    if (mysqli_query($conn, $query_tambah)) {
        // Jika sukses, kembalikan ke manajemen dengan parameter sukses
        header("Location: katalogmanajemen.php?status=sukses_tambah");
        exit;
    } else {
        // Jika query gagal, cetak error MySQL-nya biar ketahuan salahnya
        die("Gagal menyimpan ke database: " . mysqli_error($conn));
    }
} else {
    // Jika file ini diakses langsung tanpa submit form, tendang balik ke manajemen
    header("Location: katalogmanajemen.php");
    exit;
}

ob_end_flush();
?>