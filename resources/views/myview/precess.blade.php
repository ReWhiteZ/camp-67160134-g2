@extends('template.default')

@section('content')
    <h1>Multi Number {{ $mynum }}</h1>
    <ul>
        <?php
            for ($i = 1; $i <= 12; $i++) {
                $result = $mynum * $i;
                echo "<li>$mynum x $i = $result</li>";
            }
        ?>
    </ul>
@endsection