<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <!doctype html>
                    <html lang="en">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                        <title>Hello, world!</title>
                    </head>
                    <body>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <div class="card">
                <div class="card-header text-white bg-primary">Salat Time Create</div>
                <div class="card-body">
                    <!-- Action Button -->
                    <div class="mb-3 text-end">
                        <a href="{{ route('salat-times.index') }}" class="btn btn-info">All Salat Times</a>
                    </div>
                    <!-- Form -->
                            <form action="{{ route('salat-times.store') }}" method="POST">
                                @csrf

                                <!-- Salat Input -->
                                <div class="mb-3">
                                    <label for="salatInput" class="form-label">Salat*</label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('salat') is-invalid @enderror" 
                                        id="salatInput" 
                                        name="salat" 
                                        value="{{ old('salat') }}"
                                        placeholder="Enter Salat Name"
                                    >
                                    @error('salat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Time Input -->
                                <div class="mb-3">
                                    <label for="timepicker" class="form-label">Select Time*</label>
                                    <input 
                                        type="text" 
                                        id="timepicker" 
                                        class="form-control @error('time') is-invalid @enderror" 
                                        name="time" 
                                        value="{{ old('time') }}" 
                                        placeholder="Select time"
                                    >
                                    @error('time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>


                    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            flatpickr("#timepicker", {
                                enableTime: true,
                                noCalendar: true,
                                dateFormat: "H:i",
                                time_24hr: true
                            });
                        });
                    </script>
                    </body>
                    </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
