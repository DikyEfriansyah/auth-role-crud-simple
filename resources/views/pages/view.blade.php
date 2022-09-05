@extends('template')

@section('title')
    <title>{{$project->name_project}}</title>
@endsection

@section('content')
    @if ($project->status == 1)
        <p class="btn btn-info btn-sm">Selesai</p>
    @else
        <p class="btn btn-danger btn-sm">Belum Selesai</p>
    @endif
    <h3>{{$project->name_project}}</h3>
    <br>
    <p>{{$project->keterangan}}</p>
@endsection