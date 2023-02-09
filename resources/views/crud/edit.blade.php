@extends('layouts.navbar')

<title>Edit Game Data</title>

@section('content')

<h1 class="text-center mt-5 mb-5">Edit Game Data</h1>

<form action="{{ route('crud.update', $game->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Game Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $game->name }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Required RAM</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="ram" value="{{ $game->ram }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Required CPU</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="cpu" value="{{ $game->cpu }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Required HDD Space</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="hddspace" value="{{ $game->hddspace }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value="{{ $game->price }}">
    </div>
    <div class="text-center mt-5">
        <button class="btn btn-md btn-success" type="submit">Done</button>
    </div>
</form>

@endsection