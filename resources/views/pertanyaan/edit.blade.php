@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="judul">Judul Pertanyaan</label>
      <input type="text" class="form-control" placeholder="Enter judul" name="judul" id="judul" value="{{$pertanyaan->judul}}">
      </div>
      <div class="form-group">
          <label for="isi">Isi Pertanyaan</label>
          <input type="text" class="form-control" placeholder="Enter isi" id="isi" name="isi" value="{{$pertanyaan->isi}}">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection