@extends("layouts.app")



@section('content')

    <div class="card mx-5">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{url("/saveError")}}" >

                    <div class="form-group col-md-6">
                        <label>Configuratie gebruiker</label>
                        {{$user->name}} <br>
                        <label>Configuratie Hoofdgebruiker</label>
                        {{$user->name}}
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPrioriteit">Prioriteit</label>
                        <select type="text" class="form-control" id="inputPrioriteit" name="inputPrioriteit">
                            <option value="1" style="color: red;font-weight: bold;">Nu afhandelen</option>
                            <option value="2" style="color: orange; font-weight: bold;">Zo spoedig mogelijk</option>
                            <option value="3" style="color: gold; font-weight: bold;">Afhandelen</option>
                            <option value="4" style="color: gray; font-weight: bold;">Wacht</option>
                            <option value="5" style="color: green; font-weight: bold;">Geen</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                <label for="inputType">Probleem type</label>
                <select type="text" class="form-control" id="inputType" name="inputType">
                    <option value="software" style="font-weight: bold;">Software</option>
                    <option value="hardware" style="font-weight: bold;">Hardware</option>
                </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputError">Error beschrijfing</label>
                    <textarea class="form-control" id="inputError" name="inputError" placeholder="Beschrijf hier je error"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit error</button>
            </form>
        </div>
    </div>

@endsection