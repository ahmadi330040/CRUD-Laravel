@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
  <form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
      <label for="judul">Judul Pertanyaan</label>
      <input type="text" class="form-control" placeholder="Enter judul" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi Pertanyaan</label>
        <input type="text" class="form-control" placeholder="Enter isi" id="isi" name="isi">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection