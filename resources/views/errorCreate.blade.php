@extends("layouts.app")



@section('content')

    <div class="card mx-5">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Configuratie gebruiker</label>
                        {{$user->name}} <br>
                        <label>Configuratie Hooftgebruiker</label>
                        {{$user->name}}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPrioriteit">Prioriteit</label>
                        <select type="text" class="form-control" id="inputPrioriteit">
                            <option style="color: red;font-weight: bold;">Nu afhandelen</option>
                            <option style="color: orange; font-weight: bold;">Zo spoedig mogelijk</option>
                            <option style="color: gold; font-weight: bold;">Afhandelen</option>
                            <option style="color: gray; font-weight: bold;">Wacht</option>
                            <option style="color: green; font-weight: bold;">Geen</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputError">Error beschrijfing</label>
                    <textarea type="text" class="form-control" id="inputError" placeholder="Beschrijf hier je error"></textarea>
                </div>
                @if($user->role->name == 'admin')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            test admin
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit error</button>
            </form>
        </div>
    </div>

@endsection