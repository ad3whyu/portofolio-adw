<?php 
session_start();
include "koneksi.php";

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    // Cegah SQL Injection
    $nama = mysqli_real_escape_string($connect, $nama);
    $email = mysqli_real_escape_string($connect, $email);
    $subjek = mysqli_real_escape_string($connect, $subjek);
    $pesan = mysqli_real_escape_string($connect, $pesan);

    // Query untuk menyimpan data
    $query = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

    // Eksekusi query
    // Eksekusi query
    if (mysqli_query($connect, $query)) {
        // Jika berhasil
        $_SESSION['alert'] = "success";
        $_SESSION['message'] = "Pesan Anda telah dikirim!";
    } else {
        // Jika gagal
        $_SESSION['alert'] = "danger";
        $_SESSION['message'] = "Terjadi kesalahan, pesan tidak dapat dikirim.";
    }

    // Redirect kembali ke halaman index.php untuk menampilkan alert
    header("Location: ../index.php#contact");
    exit;
}
?>
