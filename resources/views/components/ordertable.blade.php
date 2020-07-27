<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Proizvod</th>
            <th scope="col">Dimenzije 1</th>
            <th scope="col">Dimenzije 2</th>
            <th scope="col">Pakovanje</th>
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
            <td>{{$item['dim2']}}</td>
            <td>{{$item['pack']}}</td>
            <td>{{$item['quantity']}}</td>
            <td style="text-align: center"><button data-id="{{$key}}" class="btn btn-danger deleteItemBtn"><i class="fas fa-times"></button></td>
        </tr>
        @endforeach
    </tbody>
</table>