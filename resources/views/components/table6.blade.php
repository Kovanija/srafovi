<div class="tableContainer cleaner" style="width: {{$tableWidth}}px">
    @php
        $singleTableWidth = floor(($tableWidth-150) / $tableNo);
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
            array_push($data[$currentTable][$key], $det[0], $det[1]);
            if($count%$perTable == 0){
                $currentTable++;
            }
            $count++;
        }
        $count2 = 0;
    @endphp
    @foreach($data as $d)
    @php
    if($count2 == 2){
        echo "<div style='float:left;'><img src='/img/" . $imagePath . "' alt=''></div>";
        echo "<div style='float:left'><img src='/img/" . $imagePath2 . "' alt=''></div>";
    }
    $count2++;
    @endphp
    <table class="customTable" style="width:{{$singleTableWidth}}px">
        <thead>
            <tr>
                <th style="width: {{$col1Width}}px">{{$col1}}</th>
                @foreach($table[3] as $dim)
                <th>{{$dim}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($d as $dim2 => $cells)
        <tr>
            <th scope="row">{{$dim2}}</th>
            @foreach($cells as $cell)
        <td class="{{ $cell->ordered ? 'ordered' : ''}} {{Session::has('cart') ? (array_key_exists($cell->id, Session::get('cart')->items) ? 'added' : '') : '' }}">
            {{-- @if(!$cell->ordered) --}}
            <input 
            list="datalist-{{ $cell->id }}"
            type="number" 
            min="1" 
            class="quantityInput" 
            data-id="{{ $cell->id }}" 
            value="{{Session::has('cart') ? (array_key_exists($cell->id, Session::get('cart')->items) ? Session::get('cart')->items[$cell->id]['quantity'] : '') : '' }}"/>
            <datalist id="datalist-{{ $cell->id }}">
                <option value="50">
                <option value="100">
                <option value="150">
                <option value="200">
            </datalist>
        {{-- @endif --}}
        </td>
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
    @endforeach
</div>