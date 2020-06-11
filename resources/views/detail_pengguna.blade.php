@extends("tem/template")
@section('title',$title)
@section('content')
<div class="card col-md-12 mt-3">
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
          <div class="card col-md-6">
  <div class="card-body">
    <table class="table">
      <tr>
        <td>Nama Lengkap</td><td>: {{$pengguna->nama_lengkap}}</td>
        </tr><tr>
        <td>Jenis Kelamin</td><td>: {{$pengguna->jk}}</td>
        </tr><tr>
        <td>Tanggal Lahir</td><td>: {{$pengguna->tgl_lahir}}</td>
        </tr><tr>
        <td>Nama Lengkap</td><td>: {{$pengguna->nama_lengkap}}</td>
      </tr><tr>
    </table>
    <form action="{{$pengguna->id_pengguna}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Hapus</button>
    </form>

    <a href="{{$pengguna->id_pengguna}}/edit" class="btn btn-warning">Edit</a>
  </div>
</div>
    </div>
</div>
@endsection