@extends('layouts.back.index')
@section('title',"Images for ".$gallery->category)
@section('brand',"Images for ".$gallery->category)
@section('style')
@endsection
@section('content')
<div class="p-3">
    <div class="card p-4">
        <div id="form">
            <form method="POST" enctype="multipart/form-data" action="/image/add/{{$gallery->id}}">
                @csrf
                <input multiple type="file" accept="image/*" name="images[]" multiple class="form-input" required />
                <input type="submit" class="mt-2 btn btn-primary" value="add Images" />
            </form>
        </div>
    </div>
    <div class="mt-5">
        <div class="row">
            @foreach ($gallery->images as $slider)
            <div class="col-md-4 mb-3">
                <div class=" card w-100 h-100 p-4">
                    <img src="{{asset($slider->path)}}" class="w-100 pb-3" />
                    <a href="/image/del/{{$slider->id}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
