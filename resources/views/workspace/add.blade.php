@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{url('/workspace/save')}}" method="post">
            {{CSRF_field()}}
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">CPU Name</span>
                </div>
                <input type="text" name="cpu" class="form-control" id="cpu" placeholder="Intel core I5">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Amount of ram</span>
                </div>
                <input type="text" class="form-control" id="ram" placeholder="2048" name="ram">
                <div class="input-group-append">
                    <span class="input-group-text">MB</span>
                </div>
            </div>
            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="screen_amount">Amount of screens</label>
                </div>
                <select class="custom-select" id="screen_amount" name="screen_amount">
                    <option selected value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <small id="resolution_help" class="form-text text-muted">Separate resolutions with comma and use x in between(1920x1080, 640x480)</small>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Screen Resolutions</span>
                </div>
                <textarea id="screen_resolution" name="screen_resolution" class="form-control" aria-label="Screen Resolutions" placeholder="1920x1080, 1440x1200, 640x480"></textarea>
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Operating system</span>
                </div>
                <input type="text" class="form-control" id="os" name="os" placeholder="Windows/Linux/MacOS etc.">
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Browser</span>
                </div>
                <input type="text" class="form-control" id="browser" name="browser" placeholder="Primary browser that you use">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection