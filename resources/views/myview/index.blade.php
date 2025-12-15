@extends('template.default')

@section('title', 'My Controller')
@section('header1', 'My View Controller')

@section('content')
    <div class="container">
        <form action="#" method="post">
            @csrf
            <label for="num">Enter number</label>
            <input type="number" id="num" class="form-control" name="num">
            <button class="btn btn-success" type="submit">Enter</button>
        </form>
    </div>

@endsection