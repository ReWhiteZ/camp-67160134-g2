@extends('template.default')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">เพิ่ม Pokemon ใหม่</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            
            <form action="/pokedex" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Fire, Water, etc.">
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label>Species</label>
                        <input type="text" name="species" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Height (cm)</label>
                        <input type="number" name="height" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Weight (kg)</label>
                        <input type="number" name="weight" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>HP</label>
                        <input type="number" step="0.1" name="hp" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Attack</label>
                        <input type="number" step="0.1" name="attack" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Defense</label>
                        <input type="number" step="0.1" name="defense" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label>Upload Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        <a href="/pokedex" class="btn btn-secondary">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection