<?php
$siswa = [
    ["Andi", 75],
    ["Budi", 88],
    ["Citra", 95],
    ["Dinda", 70],
    ["Farhan", 82]
];

$totalNilai = 0;
$jumlahSiswa = count($siswa);

for ($i = 0; $i < $jumlahSiswa; $i++) {
    $totalNilai += $siswa[$i][1];
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "Rata-rata nilai kelas: $rataRata <br><br>";

echo "Siswa dengan nilai di atas rata-rata: <br>";
for ($i = 0; $i < $jumlahSiswa; $i++) {
    if ($siswa[$i][1] > $rataRata) {
        echo $siswa[$i][0] . " : " . $siswa[$i][1] . "<br>";
    }
}
?>