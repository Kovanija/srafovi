<div class="tableContainer cleaner" style="width: {{$tableWidth}}px">
    @php
        $singleTableWidth = floor($tableWidth / $tableNo);
        $perTable = ceil(count($table[2]) / $tableNo);
        $data = array();
        for($i = 0; $i<$tableNo; $i++){
            $data[$i] = array();
        }
        $currentTable = 0;
        $count = 1;
        foreach($table[2] as $key => $det){
            if (!isset($data[$currentTable][$key])) {
                $data[$currentTable][$key] = array();
            }
            array_push($data[$currentTable][$key], $det[0]);
            if($count%$perTable == 0){
                $currentTable++;
            }
            $count++;
        }
    @endphp
    @foreach($data as $d)
    <table class="customTable" style="width:{{$singleTableWidth}}px">
        <thead>
            <tr>
                <th style="width: {{$col1Width}}px">{{$col1}}</th>
                <th>{{$col2}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($d as $dim1 => $cells)
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
        </tbody>
    </table>
    @endforeach
</div>
