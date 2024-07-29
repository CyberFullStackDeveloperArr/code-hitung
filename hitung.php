<?php 
function hitungHuruf($filePath) {
    $konten = file_get_contents($filePath);
    preg_match_all("/[a-zA-Z]/", $konten, $matches);
    return count($matches[0]);
}

echo "Masukkan Nama File .txt: ";
$stdin = fopen('php://stdin', 'r');
$filePath = trim(fgets($stdin));
fclose($stdin);

$jumlahHuruf = hitungHuruf($filePath);
echo "Jumlah Huruf: " . $jumlahHuruf . "\n";
?>