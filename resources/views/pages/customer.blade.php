@extends('layouts/master')

@section('content')
<div class="container">
      <div class="">
        <div class="card">
            <div class="card-header">
                <h3>Pretraga po PIB-u</h3>
            </div>
            <div class="card-body">
                <form method="GET" action="/tables">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="pib" class="form-control" placeholder="PIB">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Pretraži" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            @if(Session::has('pibError'))
            <div class="card-footer">
              <div class="d-flex justify-content-center errors">
                  {{Session::get('pibError')}} 
              </div>
          </div>
          @endif
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Pretraga po imenu</h3>
            </div>
            <div class="card-body">
                <form method="GET" action="/customer/find">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Ime/Naziv">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Pretraži" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            @if(Session::has('findError'))
            <div class="card-footer">
              <div class="d-flex justify-content-center errors">
                  {{Session::get('findError')}} 
              </div>
          </div>
          @endif
          @if(Session::has('findSuccess'))
            <div class="card-footer">
              <div class="d-flex justify-content-center success">
                  <ul>
                      @foreach(Session::get('findSuccess') as $customer)
                        <li><a href="/tables?pib={{$customer->pib}}">{{$customer->name}} | {{$customer->pib}}</a></li>
                      @endforeach
                  </ul>
              </div>
          </div>
          @endif
        </div>

          <div class="card">
              <div class="card-header">
                  <h3>Dodajte novog kupca</h3>
              </div>
              <div class="card-body">
                  <form method="POST" action="/customer">
                    @csrf
                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" name="name" class="form-control" placeholder="Ime/naziv" value="{{ old('name') }}">
                      </div>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" name="pib" class="form-control" placeholder="PIB" value="{{ old('pib') }}">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                        </div>
                        <input type="text" name="location" class="form-control" placeholder="Mesto" value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="customer_type">Tip kupca</label>
                        <select class="form-control" name="customer_type" id="customer_type">
                          <option value="pravno lice">Pravno lice</option>
                          <option value="fizicko lice">Fizičko lice</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Dodaj" class="btn float-right login_btn">
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
            @if(Session::has('customerError'))
            <div class="card-footer">
              <div class="d-flex justify-content-center errors">
                  {{Session::get('customerError')}} 
              </div>
          </div>
          @endif
          @if(Session::has('customerSuccess'))
            <div class="card-footer">
              <div class="d-flex justify-content-center success">
                  {{Session::get('customerSuccess')}} 
              </div>
          </div>
          @endif
          </div>
      </div>
  </div>
  @endsection