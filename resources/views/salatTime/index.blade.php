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

                        <!-- Bootstrap CSS -->
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

                    <div class="card ">
                    <div class="card-header text-white bg-primary">Salat time lists</div>
                    <div class="card-body">
                    <div class="float-end">
                    <a href="{{route('salat-times.create')}}" class="btn btn-success float-sm-right">Add New</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th width="25%">SN</th>
                            <th width="25%">Salat</th>
                            <th width="25">Time</th>
                            <th width="25">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salatTimes ?? [] as $key=> $salatTime)
                            <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$salatTime->salat ?? ""}}</td>
                            <td>{{$salatTime->time ?? ""}}</td>
                            <td>
                            <div style="display: flex; align-items: center;">
                                <a href="{{ route('salat-times.edit', $salatTime->id) }}" class="btn btn-primary" style="margin-right: 5px;">Edit</a>
                                <form action="{{ route('salat-times.destroy', $salatTime->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                             </td>

                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @if($salatTimes->isEmpty())
                            <div class="alert alert-info text-center">No Salat times available.</div>
                        @endif
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                    </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
