@extends('layouts.app')

@section('content')
<h4>{{ $anime->nama }}</h4>
<p>{{ $anime->deskripsi }}</p>
<a href="{{ route('anime.index') }}" class="btn btn-default">Kembali</a>
@endsection