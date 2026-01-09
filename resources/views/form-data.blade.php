@extends('template.default')

@section('content')
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #916420ff 0%, #c49a5a 100%);">
                        <h2 class="mb-0">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            Form Submission Successful
                        </h2>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="mb-4 pb-2 border-bottom" style="color: #916420ff;">
                            <i class="bi bi-person-lines-fill me-2"></i>Personal Information
                        </h4>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="info-box p-3 bg-light rounded">
                                            <label class="text-muted small mb-1">
                                                <i class="bi bi-person me-1"></i>First Name
                                            </label>
                                            <h5 class="mb-0">{{ $fname }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box p-3 bg-light rounded">
                                            <label class="text-muted small mb-1">
                                                <i class="bi bi-person me-1"></i>Last Name
                                            </label>
                                            <h5 class="mb-0">{{ $lname }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box p-3 bg-light rounded">
                                            <label class="text-muted small mb-1">
                                                <i class="bi bi-calendar-event me-1"></i>Birthday
                                            </label>
                                            <h6 class="mb-0">{{ date('F d, Y', strtotime($birthday)) }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box p-3 bg-light rounded">
                                            <label class="text-muted small mb-1">
                                                <i class="bi bi-hash me-1"></i>Age
                                            </label>
                                            <h6 class="mb-0">{{ $age }} years old</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box p-3 bg-light rounded">
                                            <label class="text-muted small mb-1">
                                                <i class="bi bi-gender-ambiguous me-1"></i>Gender
                                            </label>
                                            <h6 class="mb-0">{{ ucfirst($gender) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-4 pb-2 border-bottom" style="color: #916420ff;">
                            <i class="bi bi-geo-alt-fill me-2"></i>Address Information
                        </h4>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="info-box p-3 bg-light rounded">
                                    <label class="text-muted small mb-1">
                                        <i class="bi bi-house-door me-1"></i>Full Address
                                    </label>
                                    <p class="mb-0">{{ $address }}</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-4 pb-2 border-bottom" style="color: #916420ff;">
                            <i class="bi bi-heart-fill me-2"></i>Preferences
                        </h4>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="info-box p-3 bg-light rounded">
                                    <label class="text-muted small mb-1">
                                        <i class="bi bi-palette-fill me-1"></i>Favourite Color
                                    </label>
                                    <h5 class="mb-0">
                                        @if($color == 'Red') 🔴
                                        @elseif($color == 'Green') 🟢
                                        @elseif($color == 'Blue') 🔵
                                        @elseif($color == 'Yellow') 🟡
                                        @elseif($color == 'Orange') 🟠
                                        @elseif($color == 'Purple') 🟣
                                        @elseif($color == 'Pink') 🩷
                                        @elseif($color == 'Brown') 🟤
                                        @elseif($color == 'Black') ⚫
                                        @elseif($color == 'White') ⚪
                                        @elseif($color == 'Gray') ⚫
                                        @endif
                                        {{ $color }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box p-3 bg-light rounded">
                                    <label class="text-muted small mb-1">
                                        <i class="bi bi-music-note-beamed me-1"></i>Favourite Music Genre
                                    </label>
                                    <h5 class="mb-0">{{ ucfirst($music) }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <a href="{{ route('form.index') }}" class="btn btn-lg px-5 text-white" style="background-color: #916420ff;">
                                <i class="bi bi-arrow-left-circle me-2"></i>Back to Form
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .info-box {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .info-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            border: none;
        }
    </style>
@endsection