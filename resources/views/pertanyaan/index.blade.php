@extends('adminlte.master')

@section('content')
<div class="card">
  <div class="card-header p-2">
    <ul class="nav nav-pills">
      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Buat Pertanyaan</a></li>
    </ul>
  </div><!-- /.card-header -->
  <div class="card-body">
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
        <!-- Post -->
        @foreach ($pertanyaan as $key => $pertanyaan)
            
        <div class="post">
          <div class="user-block">
            <span class="title">
              <a href="#">{{ $pertanyaan->judul }}</a>
              {{-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> --}}
            </span>
            {{-- <span class="description">Shared publicly - 7:30 PM today</span> --}}
          </div>
          <!-- /.user-block -->
        <p>{{$pertanyaan->isi}}</p>

          <p>
              <a href="/pertanyaan/{{$pertanyaan->id}}" class="link-black text-sm">
                <i class="far fa-comments mr-1"></i>Lihat Jawaban
              </a>
              <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="link-black text-sm">
                <i class="fas fa-edit mr-1 ml-3"></i>Edit Pertanyaan
              </a>
            <form action="/pertanyaan/{{$pertanyaan->id}}" method="post">
              @csrf
              @method('DELETE')
              <a href="/pertanyaan/{{$pertanyaan->id}}" class="link-black text-sm">
                <i class="fas fa-trash mr-1"></i>Hapus Pertanyaan
              </a>
              </form>
            </span>
          </p>
            {{-- <input class="form-control form-control-sm" type="text" placeholder="Type a comment"> --}}
        </div>
        @endforeach
        <!-- /.post -->
      </div>
    </div>
    <!-- /.tab-content -->
  </div><!-- /.card-body -->
</div>

@endsection