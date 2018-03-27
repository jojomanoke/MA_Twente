@extends("layouts.app")



@section('content')

    <div class="mx-5 card">
        <h5 class="card-header">Overview of all errors</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Prioriteit</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach()--}}
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>

@endsection