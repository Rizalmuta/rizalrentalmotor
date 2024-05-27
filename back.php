<?php 
class RentalMotor {
private $nama;
private $waktu;
private $motor;
private $jenisMotor = [
"yamaha" => ["R1m", 100000],
"honda" => ["Beat", 50000],
"kawasaki" => ["zx25r", 90000],
"ducati" => ["Panigle V4", 200000],
];


public function __construct($nama, $waktu, $motor) {
$this->nama = $nama;
$this->waktu = $waktu;
$this->motor = $motor;
}

        
public function input () {
$error = [];
if(empty($this->nama)) {
$error[] = "Nama harus diisi";
}


if(empty($error)) {
$Member = $this->namaMember($this->nama);
$hargaSewa = $this->jenisMotor[$this->motor][1];
$totalHarga = $hargaSewa * $this->waktu;
$pajak = 10000;
            

if($Member) {
$diskon = ($totalHarga * 5) / 100;
$totalHarga -= $diskon;
echo "<center>";
echo $this->nama . "  kamu adalah member akan mendapatkan diskon !";
} else {
echo "<center>";
echo $this->nama . "  maaf kamu bukan member";
echo "</center>";
echo "</center>";
}



echo "<center>";
echo "-----------------------------------------------";
echo "<br>motor yang disewa adalah: {$this->jenisMotor[$this->motor][0]} <br>";
echo "harga sewa motor adalah: " . number_format($hargaSewa, 2, ',', '.') . "<br>";
echo "pajak: Rp: " . number_format($pajak, 2, ',', '.') . "<br>";
echo "Total yang harus di bayar: " . number_format($totalHarga + $pajak, 2, ',', '.');
echo "<br>";
echo "------------------------------------------------";
echo "</center>";
}
}
public function namaMember($nama) {
$membernya = ['budi', 'surya', 'jamal', 'arifin'];
return in_array($nama, $membernya);
}
}