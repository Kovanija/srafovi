@extends('layouts/master')

@section('content')


@foreach($tables as $table)
    @switch($table[0])
        @case(1)
            @include('components/table1', ["table" => $table])
            @break
        @case(2)
            @include('components/table2', ["table" => $table])
            @break
    @endswitch
@endforeach



<div style="overflow-x:auto;">
    <table>
        <col>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <tr>
            <th rowspan="2" style="background-color: #ff6600">Dim.</th>
            <th colspan="3" scope="colgroup">1 m</th>
            <th colspan="1" scope="colgroup">2 m</th>
            <th colspan="1" scope="colgroup">3 m</th>
        </tr>
        <tr>
            <th scope="col">kv 5.6</th>
            <th scope="col">nezasticena</th>
            <th scope="col">kv 8.8</th>
            <th scope="col">kv 5.6</th>
            <th scope="col">kv 5.6</th>
        </tr>
        <tr>
            <th scope="row">M3</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M4</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M5</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M6</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M8</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M10</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M12</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M14</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M16</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M18</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M20</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M22</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M24</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M27</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M30</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">M36</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div><br>


<br>
<div style="overflow-x:auto;">
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
</div><br>

<div style="overflow-x:auto;">
    <table class="a">
        <col>
        <col>
        <colgroup span="4"></colgroup>
        <thead>
            <tr>
                <th scope="col">Sraf</th>
                <th scope="col">Tipl</th>
                <th scope="col">Pak.</th>
                <th colspan="3" scope="colgroup">Cena</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">4.5x60</th>
                <th scope="row">Ø 8</th>
                <th scope="row">150</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">5x50</th>
                <th scope="row">Ø 8</th>
                <th scope="row">100</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">5x70</th>
                <th scope="row">Ø 8</th>
                <th scope="row">100</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">6x90</th>
                <th scope="row">Ø 10</th>
                <th scope="row">50</th>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection