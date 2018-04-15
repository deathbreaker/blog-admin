@extends('app.base')

@section('title', 'Vypsání článků')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div>Hello from articles</div>
@endsection

