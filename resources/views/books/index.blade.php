@extends('master')

@section('title', 'Books list')

@section('header')
    <h2>Book list</h2>
    <p>
        Have you read anything in there? Feel free to reach me out!
    </p>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Books</li>
        </ol>
    </nav>

    <button type="button" class="btn btn-success btn-primary w-100 my-2">Add an author</button>

    <table class="table">
        <thead>
        <tr class="fs-5">
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">By</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">The Lord of the Rings</th>
            <td>?</td>
            <td>John Ronald Reuel Tolkien</td>
            <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">Hamlet</th>
            <td>?</td>
            <td>William Shakespeare</td>
            <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">The Sorrows of Young Werther</th>
            <td>1774</td>
            <td>Johann Wolfgang Goethe</td>
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
