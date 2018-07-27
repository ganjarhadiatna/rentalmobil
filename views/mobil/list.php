<script type="text/javascript">
		$(document).ready(function() {
			var status = '<?php echo $_GET['status'] ?>';
			if (status == '') {
				$('#semua').addClass('active');
			}
			$('#'+status).addClass('active');
			console.log(status);
		});
</script>
<div>
	<div class="room">
		<div class="navigator">
			<a href="<?php echo base_url('?side=add&path=new_car'); ?>">
				<button class="btn btn-main-color" style="width: 150px;">
					<span class="fa fa-lg fa-plus"></span>
					<span>Tambah Mobil</span>
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
					<tbody>
						<!--pake for-->
						<tr>
							<td>{{ $i }}</td>
							<td><div class="foto" style="background-image: url('');"></div></td>
							<td>{{ $i }}</td>
							<td>{{ $i }}</td>
							<td>{{ $i }}</td>
							<td>{{ $i }}</td>
							<td>{{ $i }}</td>
							<td>Rp. {{ $i }}</td>
							<td>
								<div class="status btn btn-{{ strtolower($mb->status) }}-color">
									{{ $i }}
								</div>
							</td>
							<td>
								<a href="{{ url('/data/car/detail/'.$mb->id_mobil) }}">
									<button class="bg btn btn-primary-color">
										<span class="fa fa-lg fa-eye"></span>
									</button>
								</a>
								<a href="{{ url('/data/car/edit/'.$mb->id_mobil) }}">
									<button class="bg btn btn-primary-color">
										<span class="fa fa-lg fa-pencil"></span>
									</button>
								</a>
								<button class="bg btn btn-primary-color" onclick="deleteMobil('{{ $mb->id_mobil }}', 'data/car')">
									<span class="fa fa-lg fa-trash"></span>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>