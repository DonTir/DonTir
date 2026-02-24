<?php
// Koneksi... (sama seperti diatas)
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

// Hitung suara
$hasil_a = mysqli_query($koneksi, "SELECT * FROM voting WHERE pilihan='Mas arif'");
$hasil_b = mysqli_query($koneksi, "SELECT * FROM voting WHERE pilihan='Burger bangor'");

$total_a = mysqli_num_rows($hasil_a);
$total_b = mysqli_num_rows($hasil_b);
?>

<h2>Hasil Perolehan Suara Sementara</h2>
<p>Budi Santoso: <?php echo $total_a; ?> Suara</p>
<p>Siti Aminah: <?php echo $total_b; ?> Suara</p>

<a href="index.php">Kembali ke Beranda</a>