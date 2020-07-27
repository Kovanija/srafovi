<div style="overflow-x:auto;">
    <div class="flex-container">
    <div style="width:500px">
        @include('components/table2', ["table" => $tables[13], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50])
    </div>
  
    <div class="flex-container flex-column">
        <div style="width:300px">
            @include('components/table5', ["table" => $tables[18], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "col1Width" => 60, "tableNo" => 2])
        </div>
      
        <div style="width:300px">
            @include('components/table4', ["table" => $tables[19], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "colDim1" => "Šraf", "colDim2" => "Tipl"])
        </div>
    </div>
    </div>
  </div>

  <div style="overflow-x:auto;">
   <div class="flex-container">
    <div style="width: 300px;">
        @include('components/table4', ["table" => $tables[14], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "colDim1" => "Šraf", "colDim2" => "Tipl"])
    </div>
  
    <div style="width:200px">
        @include('components/table1', ["table" => $tables[16], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])  
    </div>
  
    <div style="width: 300px">
        @include('components/table4', ["table" => $tables[20], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "colDim1" => "Šraf", "colDim2" => "Tipl"])
    </div>
   </div>
  
    <div class="flex-container">
        <div style="width:300px">
            @include('components/table4', ["table" => $tables[15], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "colDim1" => "Šraf", "colDim2" => "Tipl"])
    
        </div>
      
        <div style="width:200px">
            @include('components/table1', ["table" => $tables[17], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
        </div>
      
        <div style="300px">
            @include('components/table4', ["table" => $tables[21], "tableWidth" => 300, "col1" => "Dim.", "col2" => "Cena", "colDim1" => "Šraf", "colDim2" => "Tipl"])
    
        </div>
    </div>
    </div><br>

    <div style="overflow-x:auto;" class="flex-container">

        <div style="width: 350px">
            @include('components/table2', ["table" => $tables[22], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <br>
    
        <div style="width: 400px">
            @include('components/table2', ["table" => $tables[23], "tableWidth" => 400, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <br>
      </div><br>