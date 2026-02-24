<?php
$host = "localhost"; $user = "root"; $pass = ""; $db = "db_sekolah";
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (isset($_POST['vote'])) {
    $identitas = $_POST['identitas'];
    $pilihan = $_POST['kandidat'];

    // CEK: Apakah NISN/Nama ini sudah pernah memilih?
    $cek = mysqli_query($koneksi, "SELECT * FROM voting WHERE nisn='$identitas'");
    
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Maaf, kamu sudah menggunakan hak suara!'); window.location='index.php';</script>";
    } else {
        // Jika belum, simpan ke database
        $query = "INSERT INTO voting (nisn, pilihan) VALUES ('$identitas', '$pilihan')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Terima kasih! Suaramu telah direkam.'); window.location='hasil.php';</script>";
        }
    }
}
?>