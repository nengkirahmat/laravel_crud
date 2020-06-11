@extends("tem/template")
@section('title',$title)
@section('content')
<div class="card col-md-12 mt-3">
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <a href="/pengguna/create" class="btn btn-primary my-2">Tambah Data</a>
@if (!empty(session('status')))
    <div class="alert alert-success" role="alert">
  {{session('status')}}
</div>
@endif
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($pengguna as $p)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$p->nama_lengkap}}</td>
      <td>@if ($p->jk==1){{"Laki-Laki"}}@elseif ($p->jk==2){{"Perempuan"}}@endif</td>
      <td>{{date('d-m-Y',strtotime($p->tgl_lahir))}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->username}}</td>
      <td><a href="pengguna/{{$p->id_pengguna}}" class="btn btn-info btn-sm">Tampil</a> <a href="/pengguna/{{$p->id_pengguna}}/edit" class="btn btn-warning">Edit</a> <form action="/pengguna/{{$p->id_pengguna}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Hapus</button>
    </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection