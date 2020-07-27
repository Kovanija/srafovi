<div style="overflow-x:auto;" class="flex-container flex-column">
    <div class="flex-container">
        <div style="width: 700px">
            @include('components/table2', ["table" => $tables[123], "tableWidth" => 700, "col1" => "Dim.", "col1Width" => 75])
        </div>
        <div style="width: 150px">
            @include('components/table1', ["table" => $tables[124], "tableWidth" => 150, "col1" => "Dim.(dxL)", "col2" => "Cena", "col1Width" => 75])
        </div>
        <div style="width: 150px">
            @include('components/table1', ["table" => $tables[125], "tableWidth" => 150, "col1" => "Dim.(dxL)", "col2" => "Cena", "col1Width" => 75])
        </div>
    </div>
    <div class=" flex-comtainer">
        <div style="width: 550px">
            @include('components/table2', ["table" => $tables[126], "tableWidth" => 550, "col1" => "(dxL)", "col1Width" => 75])
        </div>
        <div class="flex-container flex-column">
            <div class="flex-container">
                <div style="width: 150px">
                    @include('components/table1', ["table" => $tables[127], "tableWidth" => 150, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
                </div>
                <div style="width: 150px">
                    @include('components/table1', ["table" => $tables[128], "tableWidth" => 150, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
                </div>
                <div style="width: 150px">
                    @include('components/table1', ["table" => $tables[129], "tableWidth" => 150, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
                </div>
            </div>
            <div class="flex-container">
                <div style="width: 250px">
                    @include('components/table2', ["table" => $tables[130], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 75])
                </div>
            </div>
        </div>
    </div>
</div>

<div style="overflow-x:auto;" class="flex-container">
    <div style="width: 350px">
        @include('components/table5', ["table" => $tables[131], "tableWidth" => 350, "col1" => "Dim.", "col2" => "din/kom", "col1Width" => 50, "tableNo" => 3])
    </div>
    <div style="width: 350px">
        @include('components/table5', ["table" => $tables[132], "tableWidth" => 350, "col1" => "Dim.", "col2" => "din/kom", "col1Width" => 50, "tableNo" => 3])
    </div>
    <div style="width: 350px">
        @include('components/table5', ["table" => $tables[133], "tableWidth" => 350, "col1" => "Dim.", "col2" => "din/kom", "col1Width" => 75, "tableNo" => 2])
    </div>
</div>