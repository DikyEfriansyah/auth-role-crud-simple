@extends('template')

@section('title')
  <title>Tambah Projects</title>
@endsection

@section('title-content')
    <h3>Tambah Projects</h3>
@endsection

@section('content')
<form action="/projects/create" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama Project</label>
        <input type="text" name="name_project" class="form-control" id="name_project" placeholder="Masukan Nama">
        @error('name_project')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
              @enderror
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="selesai" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
              Selesai
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="belum_selesai" value="0" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Belum selesai
            </label>
          </div>
        @error('status')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
              @enderror
      </div>
      <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
        @error('keterangan')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
              @enderror
      </div>
      
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@endsection