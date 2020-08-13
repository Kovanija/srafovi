<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Proizvod</th>
            <th scope="col" style="min-width:115px">Dim 1</th>
            <th scope="col" style="min-width:115px; padding-right: 20px;">Dim 2</th>
            <th scope="col" style="min-width:105px">Pak</th>
            <th scope="col">Količina</th>
            <th scope="col">Obriši</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1
        @endphp
        @foreach($cart->items as $key => $item)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item['name']}}</td>
            <td>{{$item['dim1']}}</td>
            <td>{!! $item['dim2'] !!}</td>
            <td>{{$item['pack']}}</td>
            <td>{{$item['quantity']}}</td>
            <td style="text-align: center"><button onclick="deleteFromCart({{$key}})" data-id="{{$key}}" class="btn btn-danger deleteItemBtn"><i class="fas fa-times"></button></td>
        </tr>
        @endforeach
    </tbody>
</table>