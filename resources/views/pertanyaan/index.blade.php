@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
  <h1></h1>
  <a href="/pertanyaan/create" class="btn btn-primary mb-3">
   Buat Pertanyaan
  </a>
  <table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">#</th>
        <th>Judul</th>
        <th>Isi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaan as $key => $pertanyaan)
      <tr>
        <td> {{$key+1}} </td>
        <td> {{ $pertanyaan->judul }} </td>
        <td> {{ $pertanyaan->isi }} </td>
      </tr>

      @endforeach

        
    </tbody>
  </table>
</div>  

@endsection