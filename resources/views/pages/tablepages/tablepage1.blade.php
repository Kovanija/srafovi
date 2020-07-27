<div style="overflow-x:auto;" class="flex-container">
    <div style="width: 900px">
        @include('components/table1', ["table" => $tables[1], "tableWidth" => 900, "col1" => "Dim.", "col1Width" => 50])
    </div>
</div><br>

<div style="overflow-x:auto;" class="flex-container">
    <div style="width: 500px">
        @include('components/table3', ["table" => $tables[2], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50]) 
    </div>

    <div style="width: 500px">
        @include('components/table1', ["table" => $tables[3], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50])
    </div>
 </div><br>

 <div class="flex-container" style="overflow-x:auto;">
    <div class="flex-container flex-column">
        <div style="width: 200px">
            @include('components/table1', ["table" => $tables[4], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
        </div>
    
        <div style="width: 200px">
            @include('components/table1', ["table" => $tables[5], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
        </div>
    </div>

    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[6], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
    </div>

    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[7], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
    </div>

    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[8], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])  
    </div>
  </div><br>