@extends('layouts.index')

@section('content')
    <h1>IMAGE STORAGE</h1>
    <form action={{route('admin.image.store')}} enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="image">Mettez votre image</label>
            <input type="file" name="image" id="image">
        </div>
        <button class="btn" type="submit">Envoyer</button>
    </form>
@endsection