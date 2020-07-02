@extends('adminlte.master');

@section('content')
<form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
      <label for="judul">Judul Pertanyaan</label>
      <input type="isi" class="form-control" placeholder="Enter judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi Pertanyaan</label>
        <input type="isi" class="form-control" placeholder="Enter isi" id="isi">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection