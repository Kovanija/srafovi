<div style="overflow-x:auto;" class="flex-container">

    <div style="600px">
        @include('components/table2', ["table" => $tables[24], "tableWidth" => 600, "col1" => "Dim.", "col1Width" => 50])
    </div>
    <br>
  
    <div style="220px; margin-top: 50px">
        @include('components/table1', ["table" => $tables[25], "tableWidth" => 220, "col1" => "Dimenzija", "col2" => "1 kom", "col1Width" => 75])
    </div>

    
  
  </div><br>

  <div style="overflow-x:auto;" class="flex-container">
    <div style="600px">
        @include('components/table2', ["table" => $tables[26], "tableWidth" => 600, "col1" => "Dim.", "col1Width" => 50])
    </div>
    <br>
  
    <div style="300px; margin-top: 50px">
        @include('components/table2', ["table" => $tables[27], "tableWidth" => 300, "col1" => "Dim.", "col1Width" => 50])
    </div>
  </div>

  <div style="overflow-x:auto;" class="container flex-container flex-column">
    <div style="width: 750px">
        @include('components/table2', ["table" => $tables[28], "tableWidth" => 750, "col1" => "Dim.", "col1Width" => 50])
    </div>
    <br>
  
    <div style="width: 600px">
        @include('components/table2', ["table" => $tables[29], "tableWidth" => 600, "col1" => "Dim.", "col1Width" => 50])
    </div>
  </div><br>
  