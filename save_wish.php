<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $wish = isset($_POST['wish']) ? $_POST['wish'] : '';

    // Nama file tempat menyimpan wish
    $filename = 'wishes.txt';

    // Menambahkan wish ke dalam file
    $file = fopen($filename, 'a');
    if ($file) {
        fwrite($file, date('Y-m-d H:i:s') . " - " . htmlspecialchars($wish) . "\n");
        fclose($file);
        echo 'Wish telah disimpan!';
    } else {
        echo 'Gagal menyimpan wish!';
    }
} else {
    echo 'Metode tidak diizinkan!';
}
?>
