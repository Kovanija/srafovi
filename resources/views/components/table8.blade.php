<div class="tableContainer" style="width: {{$tableWidth}}px">
    <table class="customTable">
        
        <thead>
            <tr>
                <th scope="col">{{$colDim1}}</th>
                <th scope="col">{{$colDim2}}</th>
                <th>{{$col2}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table[2] as $detail)
            <tr>
                <th scope="row">{{$detail->dim1}}</th>
                <th scope="row">{{$detail->dim2}}</th>
                <td class="{{ $detail->ordered ? 'ordered' : ''}} {{Session::has('cart') ? (array_key_exists($detail->id, Session::get('cart')->items) ? 'added' : '') : '' }}">
                    @if(!$detail->ordered)
                    <input 
                    type="number" 
                    min="1" 
                    class="quantityInput" 
                    data-id="{{ $detail->id }}" 
                    value="{{Session::has('cart') ? (array_key_exists($detail->id, Session::get('cart')->items) ? Session::get('cart')->items[$detal->id]['quantity'] : '') : '' }}"/>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>