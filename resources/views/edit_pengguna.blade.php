@extends("tem/template")
@section('title',$title)
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<div class="card col-md-12 mt-3">
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">{{$title}}</h5>
   <form action="/pengguna/{{$pengguna->id_pengguna}}" method="post">
    @method('patch')
    @csrf
  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" value="{{$pengguna->nama_lengkap}}" placeholder="Nama Lengkap">
  @error('nama_lengkap')
  <div class="invalid-feedback">
    Nama Lengkap tidak boleh kosong.
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
  <select class="form-control @error('jk') is-invalid @enderror" name="jk" id="jk">
      <option value="">Pilih Jenis Kelamin</option>
      <option value="1">Laki-Laki</option>
      <option value="2">Perempuan</option>
       </select>
       @error('jk')
  <div class="invalid-feedback">
    Jenis Kelamin belum dipilih
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="tgl_lahir">Tanggal Lahir</label>
    <input type="text" class="form-control datepicker @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="yyyy-mm-dd" value="{{$pengguna->tgl_lahir}}" id="tgl_lahir">
  @error('tgl_lahir')
  <div class="invalid-feedback">
    Tanggal Lahir tidak boleh kosong
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$pengguna->email}}" id="email" placeholder="name@example.com">
    @error('email')
  <div class="invalid-feedback">
    Alamat Email tidak benar
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$pengguna->username}}" minlength="4" id="username" placeholder="username">
  @error('username')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="password">
    @error('password')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
  </div>
  <div class="form-group">
        <label for="repassword">Ulangi Password</label>
    <input type="password" class="form-control @error('repassword') is-invalid @enderror" name="repassword" id="repassword" placeholder="password">
  @error('repassword')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Update</button> <button type="reset" class="btn btn-danger">Batal</button>
</form>
    </div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>


   <script type="text/javascript">
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });

    $("#jk").val('{{$pengguna->jk}}')
   </script>
@endsection