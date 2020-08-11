@extends('layouts.back.index')
@section('title',"Portfollio")
@section('brand',"Portfollio")
@section('style')
@endsection
@section('content')
<div class="p-3">
    <div class="card p-4">
        <div id="form">
            <form method="POST" enctype="multipart/form-data" action="/gallery/add">
                @csrf
                <input name="category" placeholder="Title" required />
                <input type="file" accept="image/*" name="image" class="form-input" required />
                <input type="submit" class="mt-2 btn btn-primary" value="add Protfolio" />
            </form>
        </div>
    </div>
    <div class="mt-5">
        <div class="row">
            @foreach ($images as $image)
            <div class="col-md-6">
                <div class=" card w-100 h-100 p-4">
                    <img src="{{$image->image}}" class="w-100 pb-3" />
                    <p>
                        <hr>
                        {{$image->category}}
                        <hr>
                        <a href="/image/{{$image->id}}" class="btn btn-primary">Manage Images</a>
                        <a href="/gallery/del/{{$image->id}}" class="btn btn-danger">Delete</a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
