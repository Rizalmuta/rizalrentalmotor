<?php
require ('back.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$waktu = $_POST["waktu"];
$motor = $_POST["motor"];
$rental = new RentalMotor($nama, $waktu, $motor);
$rental->input();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>rental motor</title>
</head>
<body>


<center>
<h1>JASA SEWA RENTAL MOTOR</h1>
<form action="" method="post">
<label for="nama">NAMA:</label>
<input type="text" name="nama" id="nama"><br></br>
            
                
<label for="waktu">WAKTU RENTAL:</label>
<input type="text" name="waktu" id="waktu"><br></br>
           
                            
<label for="motor">JENIS MOTOR:</label>
<select name="motor" id="motor">
<option value="yamaha">R1m</option>
<option value="honda">Beat</option>
<option value="kawasaki">zx25r</option>
<option value="ducati">Panigle V4</option>
</select>
<button type="submit"<i></i>kirim</button>
</form>
</html>
</body>