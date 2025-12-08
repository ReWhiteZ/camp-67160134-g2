@extends('template.default')

@section('content')
    <div class="container pt-5">
        <h1 style="color: #916420ff;">Workshop #HTML - FORM</h1>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
            <div class="col-md-4">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday">
            </div>
            <div class="col-md-4">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" min="1" max="120">
            </div>
            <div class="col-md-4">
                <label class="form-label">Gender</label><br>
                <div class="form-check form-check-inline" style="margin-right: 15px;">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male" class="form-label">Male</label>
                </div>
                <div class="form-check form-check-inline" style="margin-right: 15px;">
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female" class="form-label">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other" class="form-label">Other</label>
                </div>
            </div>
            <div class="col-md-12">
                <label for="formFile" class="form-label">Picture</label>
                <input class="form-control" type="file" id="formFile" accept="image/*">
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" placeholder="1234 Main St" rows="4"></textarea>
            </div>
            <div class="col-md-12">
                <label for="color" class="form-label">Favourite Color</label>
                <select class="form-select" id="color" aria-label="Color select">
                    <option selected>Select a color</option>
                    <option value="Red">🔴 Red</option>
                    <option value="Green">🟢 Green</option>
                    <option value="Blue">🔵 Blue</option>
                    <option value="Yellow">🟡 Yellow</option>
                    <option value="Orange">🟠 Orange</option>
                    <option value="Purple">🟣 Purple</option>
                    <option value="Pink">🩷 Pink</option>
                    <option value="Brown">🟤 Brown</option>
                    <option value="Black">⚫ Black</option>
                    <option value="White">⚪ White</option>
                    <option value="Gray">⚫ Gray</option>
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-label">Music genre</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="rock" name="music" value="rock">
                    <label for="rock" class="form-check-label">Rock</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="pop" name="music" value="pop">
                    <label for="pop" class="form-check-label">Pop</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="country" name="music" value="country">
                    <label for="country" class="form-check-label">Country</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jazz" name="music" value="jazz">
                    <label for="jazz" class="form-check-label">Jazz</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="hiphop" name="music" value="hiphop">
                    <label for="hiphop" class="form-check-label">Hip-Hop</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="electronic" name="music" value="electronic">
                    <label for="electronic" class="form-check-label">Electronic</label>
                </div>
            </div>
            <div class="col-md-12">
                <input type="checkbox" id="terms" class="form-check-input">
                <label for="terms">I consent to the processing and storage of my personal data.</label>
            </div>
            <div class="col-md-12 d-flex justify-content-between mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('HTML Form Loaded');
    </script>
@endpush