@extends('app.base')
@include("components.navbar")

@section('title', 'Přidání článku')

@yield('navbar')


@section('content')
    <div class="container container-customized">
        <h1>Blog</h1>
        <form method="post" action="/article/store">

            <h4 class="mt-3">Přidat nový příspěvek</h4>
            <label for="nazev">Název článku:</label>
            <input type="text" class="form-control" id="nazev" name="nazev">

            <div class="form-group">
                <label for="comment">Článek:</label>
                <textarea class="form-control" rows="5" id="comment" name="obsah"></textarea>
            </div>

            <label for="author">Autor:</label>
            <input type="text" class="form-control mb-3" id="author" name="autor">


            <button type="submit" name="submit" class="btn btn-dark"><i class="far fa-newspaper"></i> Publikovat</button>
        </form>
    </div>

@endsection

