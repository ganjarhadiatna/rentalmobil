<div class="room">
	<div class="frame-reservasi">
		<div class="here">
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>No Identitas</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!--pake for-->
					<tr>
						<td>{{ $i }}</td>
						<td>
							<div class="foto" style="background-image: url();"></div>
						</td>
						<td>{{ $bk->nomor_identitas }}</td>
						<td>{{ $bk->nama }}</td>
						<td>{{ $bk->jenis_kelamin }}</td>
						<td>{{ $bk->alamat }}</td>
						<td>{{ $bk->telp }}</td>
						<td>{{ $bk->email }}</td>
						<td>
							<a href="{{ url('/data/booking/detail/'.$bk->id_penyewa) }}">
								<button class="bg btn btn-primary-color">
									<span class="fa fa-lg fa-eye"></span>
								</button>
							</a>
							<a href="{{ url('/data/booking/edit/'.$bk->id_penyewa) }}">
								<button class="bg btn btn-primary-color">
									<span class="fa fa-lg fa-pencil"></span>
								</button>
							</a>
							<button class="bg btn btn-primary-color" onclick="deletePenyewa('{{ $bk->id_penyewa }}', '/data/booking')">
								<span class="fa fa-lg fa-trash"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>