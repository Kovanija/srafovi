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
    <table style="border-collapse: collapse; width: 100%; margin-top: 50px">
        <thead>
            <tr>
                <th style="border-bottom: 1px solid black" scope="col">#</th>
                <th style="border-bottom: 1px solid black; text-align: left" scope="col">Proizvod</th>
                <th style="border-bottom: 1px solid black; text-align: left" scope="col">Dimenzije 1</th>
                <th style="border-bottom: 1px solid black; text-align: left" scope="col">Dimenzije 2</th>
                <th style="border-bottom: 1px solid black; text-align: left" scope="col">Pakovanje</th>
                <th style="border-bottom: 1px solid black; text-align: left" scope="col">Kolicina</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1
            @endphp
            @foreach($cart->items as $item)
            <tr>
                <th style="border-bottom: 1px solid black" scope="row">{{$i++}}</th>
                <td style="border-bottom: 1px solid black">{{$item['name']}}</td>
                <td style="border-bottom: 1px solid black">{{$item['dim1']}}</td>
                <td style="border-bottom: 1px solid black">{{$item['dim2']}}</td>
                <td style="border-bottom: 1px solid black">{{$item['pack']}}</td>
                <td style="border-bottom: 1px solid black">{{$item['quantity']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
