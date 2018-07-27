<div class="room">
	<div class="frame-reservasi">
		<div class="here">
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Mobil</th>
						<th>Admin</th>
						<th>Nama Peminjam</th>
						<th>Tanggal Penyewaan</th>
						<th>Akhir Penyewaan</th>
						<th>Lama Pinjam</th>
						<th>Status Sewa</th>
						<th>Total Bayar</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!--pake for-->
					<tr>
						<td>{{ $i }}</td>
						<td><div class="foto" style="background-image: url('{{ asset("img/mobil/".$sw->foto) }}');"></td>
						<td>{{ $i }}</td>
						<td>{{ $i }}</td>
						<td>{{ $i }}</td>
						<td>{{ $i }}</td>
						<td>{{ $i }} Hari</td>
						<td>
							<strong>{{ $i }}</strong>
						</td>
						<td>Rp. {{ $i }}</td>
						<td>
							<a href="{{ url('/data/transaction/detail/'.$sw->id_sewa) }}">
								<button class="bg btn btn-primary-color">
									<span class="fa fa-lg fa-eye"></span>
								</button>
							</a>
							<a href="{{ url('/data/transaction/edit/'.$sw->id_sewa) }}">
								<button class="bg btn btn-primary-color">
									<span class="fa fa-lg fa-pencil"></span>
								</button>
							</a>
							<button class="bg btn btn-primary-color" onclick="deleteTransaksi('{{ $sw->id_sewa }}')">
								<span class="fa fa-lg fa-trash"></span>
							</button>
						</td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong class="maincolor">Rp. 00</strong></td>
						<td>
							<button class="bg btn btn-main-color">
								<span class="fa fa-lg fa-print"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
