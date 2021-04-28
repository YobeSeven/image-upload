@extends('layouts.index')

@section('content')
    <h1>ADMIN</h1>
    @foreach ($images as $image)
        <img width="30%" src={{asset('storage/img/' . $image->src)}} alt="">
        <p>{{$image->src}}</p>
    @endforeach
    <a class="btn btn-danger" href={{route('admin.image.create')}}>Create</a>
@endsection