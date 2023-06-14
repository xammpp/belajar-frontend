@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Halaman About</h1>
    <h2>{{ $name }}</h2>
</div>
@endsection