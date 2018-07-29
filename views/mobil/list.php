<script type="text/javascript">
		var server = '<?php echo base_url(); ?>';
		function deleteMobil(id_mobil) {
			var a = confirm('Yakin ingin menghapus mobil ini?');
			if (a == true) {

				$.ajax({
					url: '<?php echo base_url('api/delete/mobil.php'); ?>',
					type: 'get',
					dataType: 'json',
					data: {'id': id_mobil},
				})
				.done(function(rest) {
					if (rest.status == 'OK') {
						$('#place').html('');
						getCar(10, 0);
					} else {
						alert(rest.message);
					}
					//console.log(rest);
				})
				.fail(function(e) {
					//console.log("error");
					alert(e.responseText);
				});

			}
			
		}
		function getCar($limit, $offset) {
			
			$.ajax({
				url: '<?php echo base_url('api/get/mobil_list.php'); ?>',
				type: 'get',
				dataType: 'json',
				data: {
					'limit': $limit,
					'offset': $offset,
				}
			})
			.done(function(data) {
				var rest = [];
				for (var i = 0; i < data.length; i++) {
					rest += '\
						<tr>\
							<td>'+(i + 1)+'</td>\
							<td>\
								<div class="foto" style="background-image: url('+server+'public/img/mobil/'+data[i].foto+');"></div>\
							</td>\
							<td>'+data[i].nama+'</td>\
							<td>'+data[i].plat_nomor+'</td>\
							<td>'+data[i].merk+'</td>\
							<td>'+data[i].warna+'</td>\
							<td>'+data[i].tahun+'</td>\
							<td>Rp. '+data[i].harga_sewa+'</td>\
							<td>\
								<div class="status btn btn-'+data[i].status.toLowerCase()+'-color">\
									'+data[i].status+'\
								</div>\
							</td>\
							<td>\
								<a href="'+server+'?path=detail_car&id_car='+data[i].id_mobil+'">\
									<button class="bg btn btn-primary-color">\
										<span class="fa fa-lg fa-eye"></span>\
									</button>\
								</a>\
								<a href="'+server+'?path=edit_car&id_car='+data[i].id_mobil+'">\
									<button class="bg btn btn-primary-color">\
										<span class="fa fa-lg fa-pencil"></span>\
									</button>\
								</a>\
								<button class="bg btn btn-primary-color"\
									onclick="deleteMobil('+data[i].id_mobil+')">\
									<span class="fa fa-lg fa-trash"></span>\
								</button>\
							</td>\
						</tr>\
					';
				}
				$('#place').append(rest);
			})
			.fail(function(e) {
				console.log(e.responseText);
			});
		}
		$(document).ready(function() {
			$('#place').html('');
			getCar(10, 0);

			var status = '<?php echo $_GET['status'] ?>';
			if (status == '') {
				$('#semua').addClass('active');
			}
			$('#'+status).addClass('active');

		});
</script>
<div>
	<div class="room">
		<div class="navigator">
			<a href="<?php echo base_url('?side=add&path=new_car'); ?>">
				<button class="btn btn-main-color" style="width: 150px;">
					<span class="fa fa-lg fa-plus"></span>
					<span>Mobil</span>
				</button>
			</a>
			<div class="panel-menu">
				<!--memakai ajax jquery-->
				<ul>
					<a href="<?php echo base_url('?side=car&path=list_car&status=semua'); ?>">
						<li id="semua">Semua</li>
					</a>
					<a href="<?php echo base_url('?side=car&path=list_car&status=disewa'); ?>">
						<li id="disewa">Disewa</li>
					</a>
					<a href="<?php echo base_url('?side=car&path=list_car&status=bebas'); ?>">
						<li id="bebas">Bebas</li>
					</a>
				</ul>
			</div>
		</div>
		<div class="frame-reservasi">
			<div class="here">
				<table>
					<thead>
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Nama</th>
							<th>No. Polisi</th>
							<th>Merk</th>
							<th>Warna</th>
							<th>Tahun</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="place"></tbody>
				</table>
			</div>
		</div>
	</div>
</div>