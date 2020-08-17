<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
  </style>
</head>
<body>
<div>
        <div>
            <h1>{{ $customer->name }}</h1>
            <h2>{{ $customer->location }}</h2>
            <h2>{{ $customer->pib }}</h2>
        </div>
        <div>
            <span>{{ $date }}</span>
        </div>
    </div>
    <table style="border-collapse: collapse; width: 100%; margin-top: 50px; font-size: 12px;">
        <thead>
            <tr>
                <th style="border-bottom: 1px solid black" scope="col">#</th>
                <th style="border-bottom: 1px solid black; text-align: left; width:300px;" scope="col">Proizvod</th>
                <th style="border-bottom: 1px solid black; text-align: center" scope="col">Dim 1</th>
                <th style="border-bottom: 1px solid black; text-align: left; min-width: 100px;" scope="col">Dim 2</th>
                <th style="border-bottom: 1px solid black; text-align: right" scope="col">Pak</th>
                <th style="border-bottom: 1px solid black; text-align: center" scope="col">Kolicina</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1
            @endphp
            @foreach($cart->items as $item)
            <tr>
                <th style="border-bottom: 1px solid black" scope="row">{{$i++}}</th>
                @if($item['category'] == 2)
                <td style="border-bottom: 1px solid black">{{$item['dim1']}}</td>
                <td style="border-bottom: 1px solid black; text-align:center">{{$item['dim2']}}</td>
                <td style="border-bottom: 1px solid black"></td>
                @else
                <td style="border-bottom: 1px solid black">{{$item['name']}}</td>
                <td style="border-bottom: 1px solid black; text-align:center;">{{$item['dim1']}}</td>
                <td style="border-bottom: 1px solid black">{!! $item['dim2'] !!}</td>
                @endif
                <td style="border-bottom: 1px solid black; text-align: right;">{{$item['pack']}}</td>
                <td style="border-bottom: 1px solid black; text-align: center;">{{$item['quantity']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
