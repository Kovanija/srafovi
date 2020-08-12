@extends('layouts/master')

@section('content')
<div class="container">
    <div class="flex-container">
        {{-- <div>
            <img src="img/image003.png" class="img">
        </div> --}}
        <div>
            <img src="img/image001.png" class="img">
        </div>
    </div>
    <div class="">
          <div class="card login-card">
              <div class="card-header">
                  <h3>Ulogujte se</h3>
              </div>
              <div class="card-body">
                  <form method="POST" action="/login">
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
                      <div class="form-group">
                          <input type="submit" value="Ulogujte se" class="btn float-right login_btn">
                      </div>
                  </form>
              </div>
              @if($errors->any())
              <div class="card-footer">
                 
                <div class="d-flex justify-content-center errors">
                    {{$errors->first()}} 
                </div>
            </div>
            @endif
          </div>
      </div>

      
      
  </div>
  @endsection