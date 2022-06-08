@extends('master')
@section('content')


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
                <div class="form-group row">
                  @csrf
                  <label for="Email" class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Password" class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>

 
@endsection
