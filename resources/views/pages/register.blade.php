@extends('layouts.master')

@section('content')
<div class="container">
<div class="">
    <div class="card">
        <div class="card-header">
            <h3>Unesite komercijalistu</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="/user">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Korisničko ime">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Lozinka">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ponovna lozinka">
                </div>
                <div class="form-group">
                    <input type="submit" value="Unesi" class="btn float-right login_btn">
                </div>
            </form>
        </div>
        @if($errors->any())
              <div class="card-footer">
                <div class="d-flex justify-content-center errors">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                </div>
            </div>
            @endif
            @if(Session::has('registerError'))
            <div class="card-footer">
              <div class="d-flex justify-content-center errors">
                  {{Session::get('registerError')}} 
              </div>
          </div>
          @endif
          @if(Session::has('registerSuccess'))
            <div class="card-footer">
              <div class="d-flex justify-content-center success">
                  {{Session::get('registerSuccess')}} 
              </div>
          </div>
          @endif
    </div>
</div>
@endsection