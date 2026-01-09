@extends('template.default')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Pokedex Data</h2>
        <a href="/pokedex/create" class="btn btn-primary">+ เพิ่ม Pokemon</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($pokedexs as $poke)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/pokedex/'.$poke->image_url) }}" class="card-img-top p-3" alt="{{ $poke->name }}" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center">{{ $poke->name }}</h5>
                    <p class="text-center"><span class="badge bg-info text-dark">{{ $poke->type }}</span></p>
                    
                    <div class="row text-center mb-2" style="font-size: 0.9rem;">
                        <div class="col-4"><strong>HP:</strong> {{ $poke->hp }}</div>
                        <div class="col-4"><strong>ATK:</strong> {{ $poke->attack }}</div>
                        <div class="col-4"><strong>DEF:</strong> {{ $poke->defense }}</div>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="/pokedex/{{ $poke->id }}/edit" class="btn btn-warning btn-sm">แก้ไขข้อมูล</a>
                        <form action="/pokedex/{{ $poke->id }}" method="POST" onsubmit="return confirm('ยืนยันการลบ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100">ลบข้อมูล</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection