<?php
	//mengambil tanggal sistem saat ini (1-31)
	$hari = date("d");
	$hariini=$hari;
	//mengambil bulan sistem saat ini (1-12)
	$bulan = date("m");
	//mengambil tahun sistem saat ini
	$tahun = date("Y");
	//mencari jumlah hari bulan dan tahun ini
	$jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));

	?>

<?php
	switch ($bulan) {
		case 1: $nmbulan = "January"; break;
		case 2: $nmbulan = "February"; break;
		case 3: $nmbulan = "March"; break;
		case 4: $nmbulan = "April"; break;
		case 5: $nmbulan = "May"; break;
		case 6: $nmbulan = "June"; break;
		case 7: $nmbulan = "July"; break;
		case 8: $nmbulan = "August"; break;
		case 9: $nmbulan = "September"; break;
		case 10: $nmbulan = "October"; break;
		case 11: $nmbulan = "November"; break;
		case 12: $nmbulan = "December"; break;
	}
	echo "<center><h1>$nmbulan $tahun</h1></center>";?>
	<br>
	<table style="border: 2px solid black;" align="center" cellpadding="5">
		<tr bgcolor="lightgreen">
			<td align="center"><font color="#FF0000">Sun</font></td>
			<td align="center">Mon</td>
			<td align="center">Tue</td>
			<td align="center">Wed</td>
			<td align="center">Thu</td>
			<td align="center">Fri</td>
			<td align="center">Sat</td>
		</tr>

<?php
	$s=date("w",mktime (0,0,0,$bulan,1,$tahun));
	for ($ds=1; $ds<=$s; $ds++) { 
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) {
		//jika minggu ke 0, maka buat baris baru
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==0) {
			echo "<tr>";
		}

		$warna="#000000"; //warna default
		$warnasel="white"; //warna sel default

		//jika hari minggu beri warna merah
		if (date("l",mktime (0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}

		//blok sel yang sesuai hari ini
		if ($hariini==$d) {
			$warna="black";
			$warnasel="lightblue";
		}

		

		//beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle bgcolor=$warnasel> <span style=\"color:$warna\">$d</span></td>";
		
		

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==6) {
			echo "</tr>";
		}
	} 
	echo '</table>';
?>