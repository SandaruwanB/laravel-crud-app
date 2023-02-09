@extends('layouts.navbar')

<title>Crud Operations</title>

@section('content')
    <h1 class="text-center mt-5 mb-5">All Games</h1>

    <a href="{{ route('crud.create') }}" class="mb-4 btn btn-sm btn-primary">Add New</a>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Game Name</th>
            <th>Required RAM</th>
            <th>Required CPU</th>
            <th>Required HDD Space</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $game->name }}</td>
                    <td>{{ $game->ram }}GB</td>
                    <td>{{ $game->cpu }}</td>
                    <td>{{ $game->hddspace }}GB</td>
                    <td>${{ $game->price }}</td>
                    <td>
                        <form action="{{ route('crud.destroy', $game->id) }}" method="POST">
                            <a href="{{ route('crud.edit', $game->id) }}" class="btn btn-sm btn-secondary" title="edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('crud.show', $game->id) }}" class="btn btn-sm btn-info" title="open"><i class="bi bi-envelope-open-fill"></i></a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" title="remove"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection