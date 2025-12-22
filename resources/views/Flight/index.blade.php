@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <div class="container">
        <form action="/flight" method="post">
            @csrf
            <label for="num">Enter number</label>
            <input type="number" id="num" class="form-control" name="num">
            <button class="btn btn-success" type="submit">Enter</button>
        </form>
    </div>
@endsection