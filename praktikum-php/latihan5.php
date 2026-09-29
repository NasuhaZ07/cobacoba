<?php
    $siswa = ["Andi", "Budi", "Citra", "Dewi"];

    echo "<h3>Daftar Nama Siswa</h3>";  
    foreach ($siswa as $index => $nama) {
        $no = $index + 1;
        echo "$no. $nama <br>";
}

$biodata = [
    "nama" => "Nasuha",
    "kelas" => "XI PPLG B",
    "hobi" => "Hobi"
];
echo "Nama: " . $biodata["nama"] . "<br>";
echo "Kelas: " . $biodata["kelas"] . "<br>";
echo "Hobi: " . $biodata["hobi"] . "<br>";
?>