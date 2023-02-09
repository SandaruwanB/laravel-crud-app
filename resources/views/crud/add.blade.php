@extends('layouts.navbar')

<title>Add New Game</title>

@section('content')
    <h1 class="text-center mt-5 mb-5">Add New Game</h1>

    <form action="{{ route('crud.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Game Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Required RAM</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="ram">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Required CPU</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="cpu">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Required HDD Space</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="hddspace">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-md btn-success" type="submit">Done</button>
        </div>
    </form>
@endsection