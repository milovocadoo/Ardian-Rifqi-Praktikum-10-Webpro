<?php

// Memeriksa apakah data nama dikirim menggunakan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data nama dari input
    $nama = trim($_POST["nama"] ?? "");

    // Validasi input agar tidak kosong
    if ($nama == "") {
        echo "Input nama tidak boleh kosong!";
    } else {

        // Mengembalikan pesan sapaan
        echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") .
             "! Selamat datang di AJAX!";
    }

} else {

    echo "Permintaan tidak valid.";

}

?>
