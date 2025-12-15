@extends('template.default')

@section('title', 'MyView2')
@section('header1', 'MYVIEW 2')

@section('content')
    <!-- วิธีการใช้ php ใน blade template -->
    <?php
        $myphp = "php";
        echo"<h1>This is My View 2</h1>";
        
        $myarray = [1,2,3,4];
        echo $myarray[2];
        echo "<br>";
        var_dump($myarray);
        echo "<br>";
        print_r($myarray);
        echo "<br>";
        $myarray2["a"] = 1;
        $myarray2[] = 2;
        $myarray2[] = 3;
        $myarray2[] = [1,2, [3,4]]; // multidimensional array
        print_r($myarray2);
        echo "<br>";
        for ($i = 0; $i < count($myarray); $i++) {
            echo "index $i : value ".$myarray[$i]."<br>";
        }
        for ($i = 0; $i < sizeof($myarray); $i++) {
            echo "index $i : value ".$myarray[$i]."<br>";
        }
    ?>
    <h1><?php echo "Hello PHP2"; ?></h1>
    <h1><?php printf("Hello PHP3"); ?></h1>
    <h1>{{ "Hello PHP4" }}</h1>
    <h1><?= "Hello PHP5"?></h1>
    <!-- ---------------------------------- -->

    <div class="container pt-5">
        <h1 style="color: #204a87ff;">This is My View 2</h1>
        <p>Welcome to My View 2 page!</p>
        <input type="text" id="myinput" value="input text value">
        <button onclick="myfunc1()">click 1</button>
        <button onclick="myfunc2()">click 2</button>
        <button onclick="myfunc3()">click 3</button>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('My View 2 Loaded');
    </script>
    <h1>my view 2 najas</h1>
@endpush

@push('scripts')
    <script>
        console.log('Additional Script for My View 2');
    </script>
    <h1>my view 3 najas</h1>
@endpush

@push('scripts')
    <script>
        myvar = 1;
        let myvar2;

        console.log(myvar);
        console.log(myvar2);
    </script>

    <script>
        myvar2 = "my var2 value";
        myvar = 2;
        console.log(myvar, myvar2);
    </script>

    <script>
        function myfunc1() {
            console.log(document.getElementById('myinput').value);
            document.getElementById('myinput').classList.add('form-control');
        }

        let myfunc2 = function() {
            console.log('myfunc called 2');
        }

        myfunc3 = () => console.log('myfunc3 called');

        function myfunc4(callback){
            console.log('myfunc4 called');
            callback();
        }

        myfunc4(myfunc3);

        console.log(document.getElementById('myinput'));
        console.log(document.getElementById('myinput').value);

        let myarray = [10, 20, 30, 40, 50];
        myarray.forEach( (value, index) => {
            console.log('index:', index, 'value:', value);
        });
    </script>
@endpush