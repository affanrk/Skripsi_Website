@extends('layout.base-layout')

@section('title', '- Prediction')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="container text-center p-6 lg:p-8" style="max-width: 800px;">
        <!-- Title -->
        <h1 class="fw-bold text-4xl md:text-5xl" style="color: #333; font-family: 'Montserrat', sans-serif; margin-bottom: 30px;">Classification Result</h1>

        <!-- Image Display -->
        @if(isset($imagePath))
        <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="{{ asset('/storage/images/' . basename($imagePath)) }}" alt="Uploaded Image"
                class="img-fluid border border-dark"
                style="height: 250px; max-width: 100%; border-radius: 12px;">
        </div>
        @else
        <p class="text-danger">Image corrupted.</p>
        @endif

        <!-- Prediction Section -->
        @if(isset($prediction))
        <div class="d-flex justify-content-center align-items-center mb-4">
            @if($prediction === 'none')
            <div class="text-center">
                <p class="fw-bold text-lg md:text-xl" style="font-family: 'Montserrat', sans-serif; color: #555;">Model is not confident in any class.</p>
            </div>
            @else
            <div class="text-center">
                <p class="fw-bold text-lg md:text-xl" style="color: #333; font-family: 'Montserrat', sans-serif;">Prediction:
                    <span class="fw-normal">{{ $prediction }}</span>
                </p>
                <p class="fw-bold text-lg md:text-xl" style="color: #333; font-family: 'Montserrat', sans-serif;">Probability:
                    <span class="fw-normal">{{ $probabilityPercentage }}</span>
                </p>
            </div>
            @endif
        </div>
        @else
        <p class="text-danger">No prediction found.</p>
        @endif

        <!-- Button -->
        <div class="text-center mt-4">
            <a class="btn btn-lg bg-dark text-white px-5 py-3 fw-bold rounded hover:bg-light"
                style="opacity: 0.8; transition: opacity 0.2s ease; font-family: 'Montserrat', sans-serif;"
                onmouseover="this.style.opacity='1'"
                onmouseout="this.style.opacity='0.8'"
                href="/classification">
                Change Image
            </a>
        </div>
    </div>
</div>
@endsection