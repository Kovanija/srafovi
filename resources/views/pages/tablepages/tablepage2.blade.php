<div style="overflow-x:auto;">
    <div class="a flex-container flex-column" style="width:1200px">
        <div style="width:800px;">
            @include('components/table2', ["table" => $tables[9], "tableWidth" => 800, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <br>
     
        <div style="width:1100px;">
            @include('components/table2', ["table" => $tables[10], "tableWidth" => 1100, "col1" => "Dim.", "col1Width" => 50])
    
        </div>
        <br>
     
        <div style="width:1150px;">
            @include('components/table2', ["table" => $tables[11], "tableWidth" => 1150, "col1" => "Dim.", "col1Width" => 50])
            
        </div>
        <br>
     
        <div style="width:900px;">
            @include('components/table2', ["table" => $tables[12], "tableWidth" => 900, "col1" => "Dim.", "col1Width" => 50])
    
        </div>
    </div>
 </div><br>