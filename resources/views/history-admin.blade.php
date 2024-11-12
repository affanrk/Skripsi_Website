@extends('layout.base-layout')

@section('title', '- History Admin')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="container p-6 lg:p-8">
        <!-- Title Section -->
        <div class="text-center mb-4 mt-24">
            <h1 class="fw-bold text-3xl md:text-4xl" style="font-family: 'Montserrat', sans-serif; color: #333;">Classification History - Admin</h1>
            <p class="text-md md:text-lg mt-2 text-muted" style="font-family: 'Montserrat', sans-serif;">Manage classified images and predictions</p>
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
                        <th scope="col" class="p-3">Action</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    @foreach ($images as $data)
                    <tr class="text-center align-middle">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">
                            <img src="{{ asset('/storage/images/' . basename( $data->path )) }}" alt="Uploaded Image"
                                style="height: 100px; width: 100px; border-radius: 8px; object-fit: cover;" 
                                class="border border-secondary mx-auto d-block">
                        </td>
                        <td class="p-3">{{ $data->prediction }}</td>
                        <td class="p-3">{{ $data->probability }}</td>
                        <td class="p-3">{{ $data->created_at }}</td>
                        <td class="p-3">
                            <a class="btn btn-danger text-white fw-bold" href="/history/admin/delete/{{ $data->id }}"
                               style="border-radius: 6px; padding: 5px 12px; transition: opacity 0.2s ease;" 
                               onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                               Delete
                            </a>
                        </td>
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
