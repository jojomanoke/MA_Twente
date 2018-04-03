@extends("layouts.app")



@section('content')

    <div class="mx-5 card">
        <h5 class="card-header">Overview of all errors</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Prioriteit</th>
                    <th scope="col">Type error</th>
                    <th scope="col">Last</th>
                    <th scope="col">Oplossing</th>
                </tr>
                </thead>
                <tbody>
                @foreach($errors as $error)
                <tr>
                    <th scope="row">{{$error->priority->name}}</th>
                    <td>{{$error->type}}</td>
                    <td>{{$error->type}}</td>
                    <td>{{$error->solution}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection