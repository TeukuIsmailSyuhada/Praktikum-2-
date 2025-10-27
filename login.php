<?php
// Tentukan username dan password yang benar
$valid_username = "Axolotl";
$valid_password = "HAJI969";

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi input
if ($username === $valid_username && $password === $valid_password) {
    echo "<h2>Login Berhasil!</h2>";
    echo "<p>Selamat datang, <strong>$username</strong>.</p>";
} else {
    echo "<h2>Login Gagal!</h2>";
    echo "<p>Username atau password salah.</p>";
    echo '<a href="login.html">Coba Lagi</a>';
}
?>
