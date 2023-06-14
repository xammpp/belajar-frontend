@extends('layouts.main')

@extends('layouts.navbar')

@section('title', 'Home')


    @section('content')
        <h1>{{ $title }}</h1>
        <h3>{{ $name }}</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
            </thead>
            @foreach($item as $data)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    @endsection