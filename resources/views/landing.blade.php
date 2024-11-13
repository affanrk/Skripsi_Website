@extends('layout.base-layout')

@section('title', '- Classification')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="mx-auto px-auto text-center">
        <div class="grid gap-6 lg:gap-8">
            <!-- Title Section -->
            <h1 class="fw-bold text-3xl md:text-4xl lg:text-5xl" style="color: #333; font-family: 'Montserrat', sans-serif;">Classify Your Movement</h1>
            <p class="fw-light text-lg md:text-xl lg:text-2xl" style="color: #666; max-width: 600px; margin: 0 auto; font-family: 'Montserrat', sans-serif;">
                Upload an image of your workout, and GymFormX will classify it as a Benchpress, Squat, or Deadlift.
            </p>

            <!-- Form Section -->
            <form method="POST" id="form" action="{{ route('predict_image') }}" enctype="multipart/form-data" class="mx-auto" style="max-width: 400px;">
                @csrf
                <!-- File Upload Input -->
                <div class="mb-4">
                    <label for="image" class="form-label fw-bold" style="font-family: 'Montserrat', sans-serif; color: #333;">Upload Your Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="form-control" style="border: 2px solid #ddd; padding: 12px;" required>
                </div>
                <!-- Hidden Text Inputs for Data -->
                <input type="text" name="text1" id="text1" class="d-none">
                <input type="text" name="text2" id="text2" class="d-none">
                <input type="text" name="text3" id="text3" class="d-none">

                <!-- Classify Button -->
                <div class="text-center">
                    <button id="predictBtn" class="btn btn-lg bg-dark text-white px-5 py-3 fw-bold rounded hover:bg-light"
                        style="opacity: 0.8; transition: opacity 0.2s ease; font-family: 'Montserrat', sans-serif;"
                        onmouseover="this.style.opacity='1'"
                        onmouseout="this.style.opacity='0.8'">
                        Classify Image
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Prediction -->
<script>
    document.getElementById('predictBtn').addEventListener('click', function() {
        var input = document.getElementById('image');
        var imageFile = input.files[0];

        if (imageFile) {
            var formData = new FormData();
            formData.append('image', imageFile);

            fetch('https://127.0.0.1:8080/predict', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    var form = document.getElementById('form');
                    document.getElementById('text1').value = data.Class;
                    document.getElementById('text2').value = data.Prediction;
                    document.getElementById('text3').value = data.Probability;
                    form.submit();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            alert('Please upload an image.');
        }
    });
</script>
@endsection