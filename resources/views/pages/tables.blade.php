@extends('layouts/master')

@section('headjs')
<script src="{{asset('js/tablesCart.js')}}"></script>
@endsection

@section('content')
<div class="flex-container pages">
    {{-- @foreach($allPages as $page) 
    <a href="#tablepage{{$page}}">
        <div class="pageDiv">
            {{$page}}
        </div>
    </a> 
    @endforeach --}}
    <form style="margin: 0 auto;" class="page-selector">
        <div class="form-group">
            <label for="pageSelector">Stranica</label>
            <select class="form-control" id="pageSelector">
                @foreach($allPages as $page)
                <option value="tablepage{{$page}}">{{$page}}</option>
                @endforeach
            </select>
        </div>
    </form>
    
</div>

<div class="table-container" style="">

    <div id="tablepage1" class="tablepage">
        @include('pages.tablepages.tablepage1')
    </div>
    <div id="tablepage2" class="tablepage">
        @include('pages.tablepages.tablepage2')
    </div> 
    <div id="tablepage3" class="tablepage">
        @include('pages.tablepages.tablepage3')
    </div> 
    <div id="tablepage4" class="tablepage">
        @include('pages.tablepages.tablepage4')
    </div> 
    <div id="tablepage5" class="tablepage">
        @include('pages.tablepages.tablepage5')
    </div> 
    <div id="tablepage6" class="tablepage">
        @include('pages.tablepages.tablepage6')
    </div> 
    <div id="tablepage7" class="tablepage">
        @include('pages.tablepages.tablepage7')
    </div> 
    <div id="tablepage8" class="tablepage">
        @include('pages.tablepages.tablepage8')
    </div> 
    <div id="tablepage9" class="tablepage">
        @include('pages.tablepages.tablepage9')
    </div> 
    <div id="tablepage10" class="tablepage">
        @include('pages.tablepages.tablepage10')
    </div> 
    <div id="tablepage11" class="tablepage">
        @include('pages.tablepages.tablepage11')
    </div> 
    <div id="tablepage12" class="tablepage">
        @include('pages.tablepages.tablepage12')
    </div> 
    <div id="tablepage13" class="tablepage">
        @include('pages.tablepages.tablepage13')
    </div> 
    <div id="tablepage14" class="tablepage">
        @include('pages.tablepages.tablepage14')
    </div> 
    <div id="tablepage15" class="tablepage">
        @include('pages.tablepages.tablepage15')
    </div> 
    <div id="tablepage16" class="tablepage">
        @include('pages.tablepages.tablepage16')
    </div> 
    <div id="tablepage17" class="tablepage">
        @include('pages.tablepages.tablepage17')
    </div> 
    <div id="tablepage18" class="tablepage">
        @include('pages.tablepages.tablepage18')
    </div> 
    <div id="tablepage19" class="tablepage">
        @include('pages.tablepages.tablepage19')
    </div> 
    <div id="tablepage20" class="tablepage">
        @include('pages.tablepages.tablepage20')
    </div> 
    <div id="tablepage21" class="tablepage">
        @include('pages.tablepages.tablepage21')
    </div>
    <div id="tablepage22" class="tablepage">
        @include('pages.tablepages.tablepage22')
    </div>


</div>

@endsection

@section('javascript')
    <script src="{{asset('js/tables.js')}}"></script>
@endsection