@extends('master')

@section('title', 'Authors list')

@section('header')
    <h2>Author list</h2>
    <p>
        The list is automatically generated from the book list, so these are my favorite authors... Apparently.
    </p>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Authors</li>
        </ol>
    </nav>

    <button type="button" class="btn btn-success btn-primary w-100 my-2">Add an author</button>

    <table class="table">
        <thead>
        <tr class="fs-5">
            <th scope="col">Name</th>
            <th scope="col">Nationality</th>
            <th scope="col">Notable books</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">John Ronald Reuel Tolkien</th>
            <td>English</td>
            <td>The Lord of the Rings, The Hobbit, The Silmarillion</td>
            <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">William Shakespeare</th>
            <td>English</td>
            <td>Hamlet, Macbeth, Othello, Romeo and Juliet</td>
            <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">Johann Wolfgang Goethe</th>
            <td>German</td>
            <td>The Sorrows of Young Werther, Gotz von Berlichingen</td>
            <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
