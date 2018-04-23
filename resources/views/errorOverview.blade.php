@extends("layouts.app")



@section('content')

    <div class="mx-5 card">
        <h5 class="card-header">Overview of all errors</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    @if(Auth::user()->role->name == 'admin')
                        <th scope="col">Opdrachtgever</th>
                    @endif
                    <th scope="col">Prioriteit</th>
                    <th scope="col">status</th>
                    <th scope="col">Type error</th>
                    <th scope="col">Oplossing</th>
                    @if(Auth::user()->role->name == 'admin')
                        <th scope="col">Tijdstip van melding</th>
                        <th scope="col">Tijdstip van oplossing</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @if(Auth::user()->role->name == 'admin')
                    @foreach($errors as $error)
                        <tr>
                            <td scope="col">{{$error->user->name}}</td>
                            <th scope="row">{{$error->priority->name}}</th>
                            <td>{{$error->status->name}}</td>
                            <td>{{$error->type}}</td>
                            <td>{{$error->solution}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    {{--hoveel incidenten per gebruiker (workspace) verdeelt in hard en software--}}
                    {{--hoveel incidenten per gebruiker--}}
                @else
                    @foreach($errors as $error)
                        @if($error->user_id == Auth::user()->id)
                            <tr>
                                <th scope="row">{{$error->priority->name}}</th>
                                <td>{{$error->type}}</td>
                                <td>{{$error->type}}</td>
                                <td>{{$error->solution}}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>

@endsection