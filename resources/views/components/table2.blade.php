<div class="tableContainer" style="width: {{$tableWidth}}px">
{{-- <h2>{{$table[1][0]->name}}</h2> --}}
    <table class="customTable">
        <thead>
            <tr>
                <th style="width: {{$col1Width}}px">{{$col1}}</th>
                @foreach($table[3] as $dim)
                <th>{{$dim}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($table[2] as $dim2 => $cells)
        <tr>
            <th scope="row">{{$dim2}}</th>
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
        </tbody>
    </table>
</div>