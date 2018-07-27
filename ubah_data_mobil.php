<!DOCTYPE html>
<html>
<head>
	<title>Rental - Daftar Mobil</title>

	<script type="text/javascript" src="public/js/jquery.js"></script>
</head>
<body>
<script type="text/javascript">
	function loadCover() {
		var OFReader = new FileReader();
		OFReader.readAsDataURL(document.getElementById("foto").files[0]);
		OFReader.onload = function (oFREvent) {
			$("#place-foto").css('background-image', 'url('+oFREvent.target.result+')');
		}
	}
	function publish() {
		var fd = new FormData();
		var id = $('#id-mobil').val();
		var nama = $('#nama-mobil').val();
		var jenis = $('#jenis-mobil').val();
		var merk = $('#merk-mobil').val();
		var warna = $('#warna-mobil').val();
		var nomor_polisi = $('#nomor-polisi').val();
		var nomor_rangka = $('#nomor-rangka').val();
		var nomor_mesin = $('#nomor-mesin').val();
		var slinder = $('#isi-slinder').val();
		var harga = $('#harga-sewa').val();
		var tahun = $('#tahun-mobil').val();
		var status = $('#status-mobil').val();

		fd.append('id', id);
		fd.append('nama', nama);
		fd.append('jenis', jenis);
		fd.append('merk', merk);
		fd.append('warna', warna);
		fd.append('nomor_polisi', nomor_polisi);
		fd.append('nomor_rangka', nomor_rangka);
		fd.append('nomor_mesin', nomor_mesin);
		fd.append('slinder', slinder);
		fd.append('harga', harga);
		fd.append('tahun', tahun);
		fd.append('status', status);
		$.each($('#form-publish').serializeArray(), function(a, b) {
		   	fd.append(b.name, b.value);
		});

		$.ajax({
		  	url: '{{ url("/add/car/edit") }}',
			data: fd,
			processData: false,
			contentType: false,
			type: 'post',
			beforeSend: function() {
				$('#btn-submit').val('Sedang Menambahkan');
			}
		})
		.done(function(data) {
		   	if (data === 'failed') {
		   		alert('Gagal mengubah data mobil. Data masih sama seperti sebelumnya.');
		   		$('#btn-submit').val('Simpan Perubahan');
		   	} else {
				window.location = '{{ url("/data/car/detail/") }}'+'/'+data;
		   	}
		})
		.fail(function(data) {
		  	alert('error terjadi, mohon ulangi lagi nanti.');
		  	//console.log(data.responseJSON);
		  	$('#btn-submit').val('Simpan Perubahan');
		});

		return false;
	}
</script>
	<div id="body">
		<?php require "side.php"; ?>
		<div id="main">
			<h1>Ubah Data Mobil</h1>
			<!--butuh data mobil-->
			<form id="form-publish" method="post" action="javascript:void(0)" enctype="multipart/form-data" onsubmit="publish()">
				<div>
					<div class="reservasi">
						<div class="main">
							<div class="frame-reservasi">
								<div class="here">
									<H2>Data Publik Mobil</H2>
								</div>
								<div class="here">
									<p>ID Mobil</p>
									<input type="text" name="id-mobil" placeholder="" class="txt txt-main-color" id="id-mobil" required="true" 
									value=""
									 disabled="true">
								</div>
								<div class="here">
									<p>Nama Mobil</p>
									<input type="text" name="nama" placeholder="" class="txt txt-main-color" id="nama-mobil" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Jenis Mobil</p>
									<input type="text" name="jenis" placeholder="" class="txt txt-main-color" id="jenis-mobil" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Merk Mobil</p>
									<input type="text" name="merk" placeholder="" class="txt txt-main-color" id="merk-mobil" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Warna</p>
									<input type="text" name="warna" placeholder="" class="txt txt-main-color" id="warna-mobil" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Status</p>
									<select class="select" id="status-mobil">
										<!--validasi status kendaraan-->
										<option value="Bebas" selected="true">Bebas</option>
										<option value="Disewa">Disewa</option>
									</select>
								</div>
							</div>
							<div class="frame-reservasi">
								<div class="here">
									<H2>Data Inti Mobil</H2>
								</div>
								<div class="here">
									<p>Nomor Polisi</p>
									<input type="text" name="no-polisi" placeholder="" class="txt txt-main-color" id="nomor-polisi" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Nomor Rangka</p>
									<input type="text" name="no-rangka" placeholder="" class="txt txt-main-color" id="nomor-rangka" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Nomor Mesin</p>
									<input type="text" name="no-mesin" placeholder="" class="txt txt-main-color" id="nomor-mesin" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Isi Silinder</p>
									<input type="text" name="slinder" placeholder="" class="txt txt-main-color" id="isi-slinder" required="true" 
									value=""
									>
								</div>
							</div>
							<div class="frame-reservasi">
								<div class="here">
									<H2>Lainnya</H2>
								</div>
								<div class="here">
									<p>Harga Sewa</p>
									<input type="text" name="harga" placeholder="" class="txt txt-main-color" id="harga-sewa" required="true" 
									value=""
									>
								</div>
								<div class="here">
									<p>Tahun Mobil</p>
									<input type="text" name="tahun" placeholder="" class="txt txt-main-color" id="tahun-mobil" required="true" value="">
								</div>
							</div>
						</div>
						<div class="side">
							<div class="frame-reservasi">
								<div class="here">
									<H2>Gambar Tidak Dapat Diubah</H2>
								</div>
								<div class="here">
									<label for="foto">
										<div class="frame-foto" id="place-foto" style="background-image: url();"></div>
									</label>
								</div>
								<div class="here">
									<input type="submit" name="save" class="btn btn-main-color" id="btn-submit" value="Simpan Perubahan">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>