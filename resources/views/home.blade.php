@extends('layouts.index')

@section('content')
    <h1>HOME</h1>
    @foreach ($images as $image)
        @if (Str::after($image->src,'.') == 'png' || Str::after($image->src,'.') == 'jpg' )
            <img width="30%" src={{asset('storage/img/' . $image->src)}} alt="">
            <p>{{$image->src}}</p>
        @else
            <p>PAS IMAGE</p>
            <p>{{$image->src}}</p>
        @endif
    @endforeach
    <a href={{route('admin')}}>Admin</a>
@endsection