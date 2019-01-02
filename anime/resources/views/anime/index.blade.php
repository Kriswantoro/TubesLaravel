@extends('layouts.app')

@section('content')
    <a href="{{ route('anime.create') }}" class="btn btn-info btn-sm">Tambah Daftar Anime</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($animes as $anime)
                <tr>
                    <td>{{ $anime->id }}</td>
                    <td><a href="{{ route('anime.show', $anime->id) }}">{{ $anime->nama }}</a></td>
                    <td>
                        <form action="{{ route('anime.destroy', $anime->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('anime.edit', $anime->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection