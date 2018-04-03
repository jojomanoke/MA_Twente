@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('workspace/add')}}" class="btn btn-success float-right">Add configuration</a>

        <table class="table">
            @if(empty($workspaces))
                <tr>
                    Nothing found
                </tr>

            @else
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">OS</th>
                    <th scope="col">CPU</th>
                    <th scope="col">Used browser</th>
                    <th scope="col">Used screens</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($workspaces as $w)
                        <tr>
                            <th scope="row">{{$w->id}}</th>
                            <td>{{$w->software_config->os}}</td>
                            <td>{{$w->computer_config->cpu}}</td>
                            <td>{{$w->software_config->browser}}</td>
                            <td>{{$w->computer_config->screen_amount}}</td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection