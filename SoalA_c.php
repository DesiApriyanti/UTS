<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array("Nama Produk" => "Pepsodent", "Stok" => 20, "Harga" => 10000),
    array("Nama Produk" => "Rinso", "Stok" => 15, "Harga" => 20000),
    array("Nama Produk" => "Dove", "Stok" => 18, "Harga" => 22000)
);

// Fungsi untuk menghitung total jumlah
function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

// Buat array awal

 $array_awal = [
  "Tanggal Transaksi"=> "08 November 2023",
  "Produk"=> [
    "Pepsodent (2X10.000)"=> "20.000",
    "Rinso (3X20.000)"=> "60.000",
    "Dove (2X22.000)"=> "44.000"
  ],
  "Total"=> "124.000",
  "Diskon"=> "40%",
  "Total Pembayaran"=> "124.000"
];

// Ubah array awal menjadi array multidimensi

$array_multidimensi = [];
foreach ($array_awal["Produk"] as $nama_produk => $harga){
  $array_multidimensi [] = [
    "nama_produk" => $nama_produk,
    "stok" => 2,
    "harga" => $harga
  ];
}

// Urutkan array multidimensi berdasarkan nama produk

usort($array_multidimensi, function ($a, $b) {
  return strcmp($a["nama_produk"], $b["nama_produk"]);
});

// Tampilkan isi array multidimensi menggunakan tabel


echo "Tanggal Transaksi: 08 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan array berdasarkan nama produk


foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar."Rupiah";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($array_multidimensi as $data) {
  echo "<tr>";
  echo "<td>{$data["nama_produk"]}</td>";
  echo "<td>{$data["stok"]}</td>";
  echo "<td>{$data["harga"]}</td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";


// Hitung total jumlah
$totalJumlah = hitungTotalJumlah($barang);

// Cek apakah ada diskon
$diskon = 0;
if ($totalJumlah >= 100000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 50000) {
    $diskon = 0.1; // 10%
}

// Hitung total yang harus dibayar setelah diskon
$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

// Tampilkan data dalam tabel terurut
echo "Tanggal Transaksi: 08 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan array berdasarkan nama produk
usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar."Rupiah";
?>