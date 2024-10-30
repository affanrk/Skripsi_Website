@extends('layout.base-layout')

@section('title', '- History')

@section('content')
<div class="d-flex justify-content-center min-h-screen align-items-center min-vh-100 bg-light">
    <div class="container p-6 lg:p-8">
        <!-- Title Section -->
        <div class="text-center mb-4 mt-24">
            <h1 class="fw-bold text-3xl md:text-4xl" style="font-family: 'Montserrat', sans-serif; color: #333;">Classification History</h1>
            <p class="text-md md:text-lg mt-2 text-muted" style="font-family: 'Montserrat', sans-serif;">Your previous classification results are listed below</p>
        </div>
        <!-- Table Section -->
        @if ($images)
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm rounded">
                <!-- Table Head -->
                <thead class="bg-dark text-white text-center">
                    <tr class="text-sm md:text-md">
                        <th scope="col" class="p-3">#</th>
                        <th scope="col" class="p-3">Image</th>
                        <th scope="col" class="p-3">Prediction</th>
                        <th scope="col" class="p-3">Probability</th>
                        <th scope="col" class="p-3">Timestamp</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    @foreach ($images as $data)
                    <tr class="text-center align-middle">
                        <td class="p-3">{{ $loop->iteration }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->
                        <td class="p-3">
                            <img src="{{ asset('/storage/images/' . basename($data->path)) }}" alt="Uploaded Image"
                                style="height: 100px; width: 100px; border-radius: 8px; object-fit: cover;"
                                class="border border-secondary mx-auto d-block">
                        </td>
                        <td class="p-3">{{ $data->prediction }}</td>
                        <td class="p-3">{{ $data->probability }}</td>
                        <td class="p-3">{{ $data->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <!-- No Data Found Message -->
        <div class="text-center mt-4">
            <p class="text-lg md:text-xl text-muted" style="font-family: 'Montserrat', sans-serif;">No images found</p>
        </div>
        @endif
    </div>
</div>
@endsection