<?php
	require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>



<div class="beranda">
	<div>
		<div>
			
			<p><br>Selamat Datang Hotel Masa Kini<br>

				<br>

		</div>

	</div>

			<div id="reservasi">
				<li>Reservasi</li>
				<form method="post" action="user/pemesanan" name="opsi">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Harga/Malam</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 185.000">ekonomi</option>
									<option value="Rp 300.000">family</option>
									<option value="Rp 110.000">standart</option>
									<option value="Rp 250.000">VIP</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
								<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
			</div>
</div>
			

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
				<p>
				Hotel masa kini adalah usaha yang bergerak di bidang jasa perhotelan yang terletak di pusat kota Kuala Tungkal tepatnya di Jl. Ki Hajar Dewantara No. 121. Hotel ini merupakan hotel bintang tiga yang berlokasi strategis dekat pusat kota, lokasi yang cukup ramai dan akses mudah ke tempat perbelanjaan serta taman dan kuliner makanan. Hotel ini memiliki total 28 kamar yang terdiri atas 5 kamar Family, 11 kamar Vip, 9 kamar Standart, 3 kamar Ekonomi.
				</p><br>
				
		
			</div>

			

			<div id="petalokasi">
				<h3>Peta Lokasi</h3><br>
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.410988486714!2d103.46025181475353!3d-0.8187266994027234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e289eb08349562f%3A0xca4bd78cbb815412!2sHotel%20Masa%20Kini!5e0!3m2!1sid!2sid!4v1639909410190!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>

			<div id="cekinout">
				<h3>INFORMASI</h3><br>
				<h4>Check-In</h4>
				<p>Jam Check-In Standar : 12.00 WIB</p>
				<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
				<h4>Check-Out</h4>
				<p>Jam Check-Out Standar : 12.00 WIB</p>
				<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
			</div>
			</center>
	

<?php
	require_once "view/footer.php"
?>
