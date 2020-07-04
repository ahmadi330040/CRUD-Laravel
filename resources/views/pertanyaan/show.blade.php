@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Pertanyaan</h3>
    <p>Judul :{{$pertanyaan->judul}}</p>
    <p>Isi :{{$pertanyaan->isi}}</p>
    
    </div>
@endsection