@extends('layout.base-layout')

@section('title', '- About Model')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8 bg-white shadow-md rounded-lg dark:bg-gray-800">
        <!-- About Section -->
        <div class="grid gap-6 lg:gap-8 mb-16 mt-24 text-center">
            <h1 class="font-extrabold text-4xl text-gray-900 dark:text-gray-900" style="font-family: 'Montserrat', sans-serif;">About our AI Model</h1>
            <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700 p-6">
                <h2 class="card-title font-bold text-2xl text-gray-800 dark:text-gray-800">Model Overview</h2>
                <p class="card-text text-gray-800 dark:text-gray-600 mt-4 text-lg" style="font-family: 'Montserrat', sans-serif;">
                    Our AI model is constructed using Graph Convolutional Networks (GCN) integrated with the MobileViG architecture. This approach enables efficient analysis of complex relationships in data, enhancing the classification of gym movements. Key hyperparameters such as learning rate, Optimizer, and Epoch are carefully tuned to optimize the performance.
                </p>
                <!-- Hyperparameter Table -->
                <div class="overflow-x-auto mt-6">
                    <table class="table-auto w-full text-left text-lg text-gray-900 dark:text-gray-600 border-collapse">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-600">
                                <th class="px-4 py-2 border font-bold text-white">Hyperparameter</th>
                                <th class="px-4 py-2 border font-bold text-white">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Architecture</td>
                                <td class="px-4 py-2 border">MobileVig</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Optimizer</td>
                                <td class="px-4 py-2 border">AdamW</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Learning Rate</td>
                                <td class="px-4 py-2 border">0.0001</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Training Epochs</td>
                                <td class="px-4 py-2 border">50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Dataset Sample Section -->
        <div class="grid gap-6 lg:gap-8 mb-16">
            <h2 class="font-bold text-3xl text-gray-900 dark:text-gray-800 text-center">Dataset Samples</h2>
            <div class="flex justify-center flex-wrap gap-6">
                <!-- Sample Cards -->
                <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700" style="width: 250px;">
                    <img src="{{ asset('img/benchpress-sample.jpg') }}" class="rounded-t-lg object-cover h-64" alt="Benchpress Sample">
                    <div class="card-body p-4">
                        <h5 class="card-title text-gray-900 dark:text-gray-600 font-extrabold">Benchpress</h5>
                    </div>
                </div>
                <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700" style="width: 250px;">
                    <img src="{{ asset('img/squat-sample.jpg') }}" class="rounded-t-lg object-cover h-64" alt="Squat Sample">
                    <div class="card-body p-4">
                        <h5 class="card-title text-gray-900 dark:text-gray-600 font-extrabold">Squat</h5>
                    </div>
                </div>
                <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700" style="width: 250px;">
                    <img src="{{ asset('img/deadlift-sample.jpg') }}" class="rounded-t-lg object-cover h-64" alt="Deadlift Sample">
                    <div class="card-body p-4">
                        <h5 class="card-title text-gray-900 dark:text-gray-600 font-extrabold">Deadlift</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- Results Section -->
        <div class="grid gap-6 lg:gap-8 mb-16">
            <h2 class="font-bold text-3xl text-gray-900 dark:text-gray-800 text-center">Model Results</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Confusion Matrix -->
                <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700 p-6">
                    <h5 class="font-extrabold text-gray-900 dark:text-gray-600 mb-4">Confusion Matrix</h5>
                    <img src="{{ asset('img/confusion-matrix.png') }}" alt="Confusion Matrix" class="rounded-lg">
                </div>

                <!-- Classification Report -->
                <div class="card bg-white shadow-md rounded-lg dark:bg-gray-700 p-6">
                    <h5 class="font-extrabold text-gray-900 dark:text-gray-600 mb-4">Classification Report</h5>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full text-left text-lg text-gray-900 dark:text-gray-600 border-collapse">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-600">
                                    <th class="px-4 py-2 border font-bold text-white">Class</th>
                                    <th class="px-4 py-2 border font-bold text-white">Precision</th>
                                    <th class="px-4 py-2 border font-bold text-white">Recall</th>
                                    <th class="px-4 py-2 border font-bold text-white">F1 Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 border">Benchpress</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Squat</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                    <td class="px-4 py-2 border">90.00%</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Deadlift</td>
                                    <td class="px-4 py-2 border">80.00%</td>
                                    <td class="px-4 py-2 border">80.00%</td>
                                    <td class="px-4 py-2 border">80.00%</td>
                                </tr>
                                <!-- Add other rows as needed -->
                                <tr>
                                    <td class="px-4 py-2 border">Average</td>
                                    <td class="px-4 py-2 border">86.67%</td>
                                    <td class="px-4 py-2 border">86.67%</td>
                                    <td class="px-4 py-2 border">86.67%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Button -->
        <div class="text-center justify-content-center align-items-center mb-20">
            <a class="btn btn-lg bg-dark text-white px-5 py-3 fw-bold rounded hover:bg-light"
                style="opacity: 0.8; transition: opacity 0.2s ease; font-family: 'Montserrat', sans-serif;"
                onmouseover="this.style.opacity='1'"
                onmouseout="this.style.opacity='0.8'"
                href="/">
                Back
            </a>
        </div>
    </div>
</div>
@endsection