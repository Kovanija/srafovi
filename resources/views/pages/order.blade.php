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
    <div class="mb-5">
        <button id="orderBtn" class="btn btn-success">Naruči</button>
        <a href="/cart/pdf" class="btn orangeButton">Pretvori u PDF</a>
    </div>
    <hr>
    <div class="mt-5">
        <a href="/cart/finish" class="btn btn-danger">Završi</a>
        <a href="/cart/flush" class="btn btn-outline-danger">Izbriši sve</a>
    </div>
    

    <div id="successBox" class="success">

    </div>
    <div id="errorBox" class="errors">
        
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset('js/order.js')}}"></script>
@endsection