<div style="overflow-x:auto;">
<h2>{{$table[1][0]->name}}</h2>
    <table>
        <thead>
            <tr>
                <th>Dim.</th>
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
        <td data-id="{{ $cell->id }}"></td>
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
</div>