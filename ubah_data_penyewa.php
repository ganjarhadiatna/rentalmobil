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
		var id_penyewa = $('#id-penyewa').val();
		var nomor_identitas = $('#nomor-identitas').val();
		var nama = $('#nama-penyewa').val();
		var jenis_kelamin = $('#jenis-kelamin').val();
		var telp = $('#nomor-telpon').val();
		var email = $('#email-penyewa').val();
		var alamat = $('#alamat-lengkap').text();
		var status_member = $('#status-member').val();

		fd.append('id_penyewa', id_penyewa);
		fd.append('nomor_identitas', nomor_identitas);
		fd.append('nama', nama);
		fd.append('jenis_kelamin', jenis_kelamin);
		fd.append('telp', telp);
		fd.append('email', email);
		fd.append('alamat', alamat);
		fd.append('status_member', status_member);
		$.each($('#form-publish').serializeArray(), function(a, b) {
		   	fd.append(b.name, b.value);
		});

		$.ajax({
		  	url: '{{ url("/add/user/edit") }}',
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
		   		alert('Gagal mengubah data Penyewa. Data yang dimasukan masih sama seperti sebelumnya.');
		   		$('#btn-submit').val('Simpan Kembali');
		   	} else {
				window.location = '{{ url("/data/booking/detail/") }}'+'/'+data;
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
		<h1>Ubah Data Penyewa</h1>
		<!--butuh data mobil-->
		<form id="form-publish" method="post" action="javascript:void(0)" enctype="multipart/form-data" onsubmit="publish()">
			<div>
				<div class="reservasi">
					<div class="main">
						<div class="frame-reservasi">
							<div class="here">
								<H2>Data Penyewa</H2>
							</div>
							<div class="here">
								<p>ID Penyewa</p>
								<input type="text" name="id-penyewa" placeholder="" class="txt txt-main-color" id="id-penyewa" required="true" value="" disabled="true">
							</div>
							<div class="here">
								<p>Nomor Identitas</p>
								<input type="text" name="nomor-identitas" placeholder="" class="txt txt-main-color" id="nomor-identitas" required="true" value="">
							</div>
							<div class="here">
								<p>Nama</p>
								<input type="text" name="nama" placeholder="" class="txt txt-main-color" id="nama-penyewa" required="true" value="">
							</div>
							<div class="here">
								<p>Jenis Kelamin</p>
								<select class="select" id="jenis-kelamin">
									<!--memakai validasi data penyewa-->
									<option value="L" selected="true">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
							<div class="here">
								<p>Nomor Telpon</p>
								<input type="text" name="nomor-telpon" placeholder="" class="txt txt-main-color" id="nomor-telpon" required="true" value="">
							</div>
							<div class="here">
								<p>Email</p>
								<input type="text" name="email" placeholder="" class="txt txt-main-color" id="email-penyewa" required="true" value="">
							</div>
							<div class="here">
								<p>Alamat</p>
								<div class="txt-main-color editable" contenteditable="true" id="alamat-lengkap">
									<?php echo $mb->alamat; ?>
								</div>
							</div>
							<div class="here">
								<p>Status Member</p>
								<select class="select" id="status-member">
									@if ($mb->status_member == 'Biasa')
										<option value="Biasa" selected="true">Biasa</option>
										<option value="Member">Member</option>
									@else
										<option value="Biasa">Biasa</option>
										<option value="Member" selected="true">Member</option>
									@endif
								</select>
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
									<div class="frame-foto" id="place-foto" style="background-image: url('');"></div>
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