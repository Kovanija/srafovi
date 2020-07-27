<div style="overflow-x:auto;" class="container">

   <div style="width:500px">
    @include('components/table2', ["table" => $tables[50], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50])
    </div>
 </div><br>

 <div style="overflow-x:auto;" class="flex-container">
    <div style="width:250px">
        @include('components/table2', ["table" => $tables[51], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 50])
        </div>

        <div style="width:250px">
            @include('components/table2', ["table" => $tables[52], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 50])
        </div>
  </div><br>

  <div style="overflow-x:auto;" class="container">

    <div style="width:400px" id="tableColorSm">
        @include('components/table2', ["table" => $tables[53], "tableWidth" => 400, "col1" => "Dim.", "col1Width" => 75])
    </div>
 </div><br>

 <div style="overflow-x:auto;" class="flex-container">
    <div style="width:700px" id="tableColorLg">
        @include('components/table2', ["table" => $tables[54], "tableWidth" => 700, "col1" => "Dim.", "col1Width" => 75])
    </div>
    <div style="width:250px">
        @include('components/table1', ["table" => $tables[55], "tableWidth" => 250, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 100])
    </div>
  </div><br>

  <div style="overflow-x:auto;" class="flex-container">
    <div class="flex-container flex-column">
        <div style="width:300px">
            @include('components/table2', ["table" => $tables[56], "tableWidth" => 300, "col1" => "Dim.", "col1Width" => 50])
        </div>
    
        <div style="width:250px">
            @include('components/table2', ["table" => $tables[57], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 50])
        </div>
    </div>
    <div class="flex-container flex-column">
        <div style="width:400px">
            @include('components/table2', ["table" => $tables[58], "tableWidth" => 400, "col1" => "Dim.", "col1Width" => 50])
        </div>
    
        <div style="width:250px">
            @include('components/table1', ["table" => $tables[60], "tableWidth" => 250, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
        </div>
        <div style="width:250px">
            @include('components/table1', ["table" => $tables[62], "tableWidth" => 250, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
        </div>
    </div>
    <div class="flex-container flex-column">
        <div style="width:300px">
            @include('components/table2', ["table" => $tables[59], "tableWidth" => 300, "col1" => "Dim.", "col1Width" => 50])
        </div>
    
        <div style="width:250px">
            @include('components/table1', ["table" => $tables[61], "tableWidth" => 250, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
        </div>
        <div style="width:250px">
            @include('components/table1', ["table" => $tables[63], "tableWidth" => 250, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 75])
        </div>
    </div>
  
    
  </div><br>