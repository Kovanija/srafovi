<div class="tableContainer" style="width: {{$tableWidth}}px">
    <table class="customTable">
        <col>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <tr>
            <th rowspan="2" style="width: {{$col1Width}}px">{{$col1}}</th>
            @foreach($table[3] as $dim => $span)
            <th colspan="{{$span}}" scope="colgroup">{{$dim}}</th>
            @endforeach
        </tr>
        <tr>
            @foreach($table[1] as $product)
            <th>
                {{substr($product->name, 14)}}
            </th>
            @endforeach
            <th>
                {{substr($table[1][0]->name, 14)}}
            </th>
            <th>
                {{substr($table[1][0]->name, 14)}}
            </th>
        </tr>
        @foreach($table[2] as $dim1 => $cells)
        <tr>
            <th scope="row">{{$dim1}}</th>
            @foreach($cells as $cell)
        <td class="{{ $cell->ordered ? 'ordered' : ''}} {{Session::has('cart') ? (array_key_exists($cell->id, Session::get('cart')->items) ? 'added' : '') : '' }}">
            @if(!$cell->ordered)
            <input 
            type="number" 
            min="1" 
            class="quantityInput" 
            data-id="{{ $cell->id }}" 
            value="{{Session::has('cart') ? (array_key_exists($cell->id, Session::get('cart')->items) ? Session::get('cart')->items[$cell->id]['quantity'] : '') : '' }}"/>
        @endif
        </td>
            @endforeach
        </tr>
        @endforeach
    </table>
</div>
{{-- <div style="overflow-x:auto;">
    <table>
        <col>
        <thead>
            <tr>
                <th>Dim.</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">M6</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M8</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M10</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M12</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M14</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M16</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M18</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">M20</th>
                <td></td>
            </tr>
        </tbody>
    </table>
</div><br> --}}