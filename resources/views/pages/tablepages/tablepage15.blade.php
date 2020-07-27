<div style="overflow-x:auto;" class="container flex-container flex-column">
    <div style="width: 500px">
        @include('components/table5', ["table" => $tables[138], "tableWidth" => 500, "col1" => "Dim.", "col2" => "din/kom", "col1Width" => 115, "tableNo" => 2])
    </div>
</div>

<div style="overflow-x:auto;" class="flex-container">
    <div style="width: 300px">
        @include('components/table1', ["table" => $tables[139], "tableWidth" => 300, "col1" => "Dim.", "col2" => "din/1 kom", "col1Width" => 115])
    </div>
    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[140], "tableWidth" => 200, "col1" => "Dim.", "col2" => "din/1 kom", "col1Width" => 75])
    </div>
</div>
