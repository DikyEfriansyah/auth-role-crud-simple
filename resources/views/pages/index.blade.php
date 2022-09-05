@extends('template')

@section('title')
    <title>Data Status Project</title>
@endsection

@section('title-content')
    <h3>Data Project</h3>
@endsection

@section('content')
@if (auth()->user()->role == 'user')
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Project</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Status</th>
        <th scope="col" >Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($project as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->name_project}}</td>
                <td>{{$value->keterangan}}</td>
                @if ($value->status == 1)
                    <td>Selesai</td>
                @else
                    <td>Belum Selesai</td>
                @endif
                <td>
                    <a href="{{ route('projects.show', $value->id)}}" class="btn btn-info">View</a>
                        
                    
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endif

@if (auth()->user()->role == 'gardener')
<a href="{{ route('projects.create')}}" class="btn btn-primary">Tambah</a>
<br>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Project</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Status</th>
        <th scope="col" >Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($project as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->name_project}}</td>
                <td>{{$value->keterangan}}</td>
                @if ($value->status == 1)
                    <td>Selesai</td>
                @else
                    <td>Belum Selesai</td>
                @endif
                <td>
                    <form action="{{ route('projects.destroy', $value->id)}}" method="POST">
                        <a href="{{ route('projects.show', $value->id)}}" class="btn btn-info">View</a>
                        <a href="{{ route('projects.edit', $value->id)}}" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endif

@if (auth()->user()->role == 'desaigner')
<a href="{{ route('projects.create')}}" class="btn btn-primary">Tambah</a>
<br>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Project</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Status</th>
        <th scope="col" >Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($project as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->name_project}}</td>
                <td>{{$value->keterangan}}</td>
                @if ($value->status == 1)
                    <td>Selesai</td>
                @else
                    <td>Belum Selesai</td>
                @endif
                <td>
                    <form action="{{ route('projects.destroy', $value->id)}}" method="POST">
                        <a href="{{ route('projects.show', $value->id)}}" class="btn btn-info">View</a>
                        <a href="{{ route('projects.edit', $value->id)}}" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endif
 
@endsection