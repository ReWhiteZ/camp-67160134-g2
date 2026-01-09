@extends('template.default')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">แก้ไขข้อมูล Pokemon: {{ $pokedex->name }}</div>
        <div class="card-body">
            <form action="/pokedex/{{ $pokedex->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $pokedex->name }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" value="{{ $pokedex->type }}">
                    </div>
                    
                    <div class="col-md-4 mb-3"><label>Species</label><input type="text" name="species" class="form-control" value="{{ $pokedex->species }}"></div>
                    <div class="col-md-4 mb-3"><label>Height</label><input type="number" name="height" class="form-control" value="{{ $pokedex->height }}"></div>
                    <div class="col-md-4 mb-3"><label>Weight</label><input type="number" name="weight" class="form-control" value="{{ $pokedex->weight }}"></div>
                    <div class="col-md-4 mb-3"><label>HP</label><input type="number" step="0.1" name="hp" class="form-control" value="{{ $pokedex->hp }}"></div>
                    <div class="col-md-4 mb-3"><label>Attack</label><input type="number" step="0.1" name="attack" class="form-control" value="{{ $pokedex->attack }}"></div>
                    <div class="col-md-4 mb-3"><label>Defense</label><input type="number" step="0.1" name="defense" class="form-control" value="{{ $pokedex->defense }}"></div>

                    <div class="col-12 mb-3">
                        <label>Change Image (ปล่อยว่างถ้าไม่ต้องการเปลี่ยน)</label>
                        <input type="file" name="image" class="form-control">
                        <div class="mt-2">
                            <img src="{{ asset('images/pokedex/'.$pokedex->image_url) }}" width="100">
                            <small>รูปปัจจุบัน</small>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning">อัปเดตข้อมูล</button>
                        <a href="/pokedex" class="btn btn-secondary">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection