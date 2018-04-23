@extends('layouts.app')

@section('content')

    <form method="post" action="{{ url('workspace/save') }}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="cpu">CPU</label>
            <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Intel I7">
        </div>
        <div class="form-group">
            <label for="ram">RAM</label>
            <input type="text" class="form-control" name="ram" id="ram" placeholder="4096">
            <small class="form-text text-muted">RAM in MB</small>
        </div>
        <div class="form-group">
            <label for="screen_amount">Amount of screens</label>
            <select class="form-control" id="screen_amount" name="screen_amount">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="screen_res">Screen resolution(s)</label>
            <input type="text" class="form-control" name="screen_res" id="screen_res" placeholder="1024x720,1366x720">
            <small class="form-text text-muted">Scheid met een comma en gebruik een x tussen de hoogte en breedte</small>
        </div>
        <div class="form-group">
            <label for="os">Gebruikte besturingssysteem</label>
            <input type="text" class="form-control" name="os" id="os" placeholder="Windows 10">
        </div>
        <div class="form-group">
            <label for="browser">Gebruikte browser</label>
            <input type="text" class="form-control" name="browser" id="browser" placeholder="Chrome">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection