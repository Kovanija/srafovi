@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>{{ $customer->name }}</h1>
            <h2>{{ $customer->location }}</h2>
            <h2>{{ $customer->pib }}</h2>
        </div>
        <div class="pull-right">
            <span>{{ $date }}</span>
        </div>
    </div>
    <div id="orderTable">
        @include('components.ordertable')
    </div>
    <form>
        @csrf
    </form>
    <button id="orderBtn" class="btn btn-success">Naruči</button>
    <a href="/cart/pdf" class="btn orangeButton">Pretvori u PDF</a>
    <a href="/cart/finish" class="btn btn-danger float-right ml-1">Završi</a>
    <a href="/cart/flush" class="btn btn-danger float-right">Izbriši sve</a>

    <div id="successBox" class="success">

    </div>
    <div id="errorBox" class="errors">
        
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset('js/order.js')}}"></script>
@endsection