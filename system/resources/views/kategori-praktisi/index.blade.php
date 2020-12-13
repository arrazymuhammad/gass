@extends('template.base')

@section('content')
<div id="content-page" class="content-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Table Kategori
						<a href="" class="btn btn-primary float-right">Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Photo</th>
							</thead>
							<tbody>
								@foreach($list_kategori as $kategori)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td></td>
									<td>{{$kategori->nama}}</td>
									<td><img src="{{url($kategori->photo)}}" alt=""></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection