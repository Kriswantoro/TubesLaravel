@extends('layouts.app')

@section('content')
<h4>Ubah Artikel</h4>
<form action="{{ route('anime.update', $anime->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $anime->nama }}">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Deskripsi</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{ $anime->deskripsi }}</textarea>
        @if ($errors->has('deskripsi'))
            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('anime.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection