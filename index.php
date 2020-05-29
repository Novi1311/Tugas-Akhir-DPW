<!DOCTYPE html>
<html lang="em">
<head>
	<meta charset="utf-8">
	<title>program parkir</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<header>
		<h1>PROGRAM LAYANAN PARKIR</h1>
	</header>

	<form action="" method="get">
		<table>
			<tr>
				<td>ID member</td>
				<td><input type="text" name="id" class="id" placeholder="Masukkan ID"></td>
			</tr>
			<tr>
				<td>Jenis Parkir</td>
				<td><select name="jenis_parkir">
					<option value="">Pilih jenis parkir</option>
					<option value="sekali masuk">Sekali Masuk</option>
					<option value="langganan">Langganan</option>
				</select></td>
			</tr>
			<tr>
				<td>Jenis Kendaraan</td>
				<td><select name="jenis_kendaraan" id="">
					<option value="">Pilih jenis kendaraan</option>
					<option value="roda2">Roda 2</option>
					<option value="roda4">Roda 4</option>
				</select></td>
			</tr>
			<tr>
				<td>Lama Parkir</td>
				<td><input type="text" name="lama" class="lama"></td>
				<td class="jam">Jam</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" class="submit"></td>
			</tr>
		</table>
	</form>

	<div class="total">
		<h2>TOTAL BAYAR</h2>
		<input type="text" disabled="disabled" placeholder="<?php
    if (isset($_GET["submit"])) {
        $id = $_GET["id"];
        $jenis_parkir = $_GET["jenis_parkir"];
        $jenis_kendaraan = $_GET["jenis_kendaraan"];
        $lama = $_GET["lama"];

        $tarif_member=0;
        $tarif_kendaraan=0;
        $diskon=0;
        $total=0;

        if ($jenis_kendaraan=="roda2") {
            if ($lama > 1 && $lama < 4) {
                $tarif_kendaraan = 2000 + (2000*($lama - 1));
            } else if ($lama > 3) {
                $tarif_kendaraan = 5000;
            }else {
                $tarif_kendaraan = 2000;
            }
        }else {
            if ($lama > 1 && $lama < 4) {
                $tarif_kendaraan = 5000 + (5000*($lama - 1));
            } else if ($lama > 3) {
                $tarif_kendaraan = 10000;
            } else {
                $tarif_kendaraan = 5000;
            }
        }
        
        if ($jenis_parkir=="sekali masuk") {
            $tarif_member  = 1/100;
        } else {
            $tarif_member = 2/100;
        }

        $diskon  = $tarif_kendaraan * $tarif_member;
        $total = $tarif_kendaraan - $diskon;
        
        echo  "Rp".$total;
    }

?>">
	</div>

	<footer>NOVI NOVITA - 18.01.013.096 | NOVA APRILLIA PANGESTI - 18.01.013.094 | UNIVERSITAS TEKNOLOGI SUMBAWA</footer>

</body>
</html>

