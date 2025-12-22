@extends('template.default')

@section('content')
    <div class="container pt-5">
        <h1 style="color: #916420ff;">Workshop #HTML - FORM</h1>

        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" required>
                <div class="invalid-feedback">Please provide a first name.</div>
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" required>
                <div class="invalid-feedback">Please provide a last name.</div>
            </div>
            <div class="col-md-4">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" required>
                <div class="invalid-feedback">Please provide a birthday.</div>
            </div>
            <div class="col-md-4">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" min="1" max="120" required>
                <div class="invalid-feedback">Please provide a valid age.</div>
            </div>
            <div class="col-md-4">
                <label class="form-label">Gender</label><br>
                <div class="form-check form-check-inline" style="margin-right: 15px;">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="male" required>
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline" style="margin-right: 15px;">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                    <label for="female" class="form-check-label">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="other">
                    <label for="other" class="form-check-label">Other</label>
                </div>
                <div class="invalid-feedback" id="gender-feedback" style="display: none;">Please select a gender.</div>
            </div>
            <div class="col-md-12">
                <label for="formFile" class="form-label">Picture</label>
                <input class="form-control" type="file" id="formFile" accept="image/*" required>
                <div class="invalid-feedback">Please select an image.</div>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" placeholder="1234 Main St" rows="4" required></textarea>
                <div class="invalid-feedback">Please provide an address.</div>
            </div>
            <div class="col-md-12">
                <label for="color" class="form-label">Favourite Color</label>
                <select class="form-select" id="color" aria-label="Color select" required>
                    <option value="">Select a color</option>
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
                <div class="invalid-feedback">Please select a color.</div>
            </div>
            <div class="col-md-12">
                <label class="form-label">Music genre</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="rock" name="music" value="rock" required>
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
                    <input class="form-check-input" type="radio" id="hiphop" name="music" value="hiphip">
                    <label for="hiphop" class="form-check-label">Hip-Hop</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="electronic" name="music" value="electronic">
                    <label for="electronic" class="form-check-label">Electronic</label>
                </div>
                <div class="invalid-feedback" id="music-feedback" style="display: none;">Please select a music genre.</div>
            </div>
            <div class="col-md-12">
                <input type="checkbox" id="terms" class="form-check-input" required>
                <label for="terms">I consent to the processing and storage of my personal data.</label>
                <div class="invalid-feedback" id="terms-feedback" style="display: none;">You must consent to continue.</div>
            </div>
            <div class="col-md-12 d-flex justify-content-between mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('HTML Form Loaded');

        (() => {
            'use strict';

            const form = document.querySelector('.needs-validation');
            const genderInputs = document.querySelectorAll('input[name="gender"]');
            const musicInputs = document.querySelectorAll('input[name="music"]');
            const termsInput = document.getElementById('terms');
            
            const genderFeedback = document.getElementById('gender-feedback');
            const musicFeedback = document.getElementById('music-feedback');
            const termsFeedback = document.getElementById('terms-feedback');

            form.addEventListener('submit', (event) => {
                event.preventDefault();
                event.stopPropagation();
                
                // Check gender validation
                const genderSelected = Array.from(genderInputs).some(input => input.checked);
                if (!genderSelected) {
                    genderFeedback.style.display = 'block';
                } else {
                    genderFeedback.style.display = 'none';
                }
                
                // Check music validation
                const musicSelected = Array.from(musicInputs).some(input => input.checked);
                if (!musicSelected) {
                    musicFeedback.style.display = 'block';
                } else {
                    musicFeedback.style.display = 'none';
                }
                
                // Check terms validation
                if (!termsInput.checked) {
                    termsFeedback.style.display = 'block';
                } else {
                    termsFeedback.style.display = 'none';
                }
                
                form.classList.add('was-validated');
            }, false);

            const resetBtn = document.querySelector('button[type="reset"]');
            resetBtn.addEventListener('click', () => {
                form.classList.remove('was-validated');
                genderFeedback.style.display = 'none';
                musicFeedback.style.display = 'none';
                termsFeedback.style.display = 'none';
            });
            
            // Hide error messages when user selects an option
            genderInputs.forEach(input => {
                input.addEventListener('change', () => {
                    genderFeedback.style.display = 'none';
                });
            });
            
            musicInputs.forEach(input => {
                input.addEventListener('change', () => {
                    musicFeedback.style.display = 'none';
                });
            });
            
            termsInput.addEventListener('change', () => {
                termsFeedback.style.display = 'none';
            });
        })();
    </script>
@endpush