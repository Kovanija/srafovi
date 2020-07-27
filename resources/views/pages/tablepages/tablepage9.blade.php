<div style="overflow-x:auto;" class="flex-container">
    <div class="flex-container flex-column">
        <div style="width: 700px;">
            @include('components/table2', ["table" => $tables[64], "tableWidth" => 700, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <div style="width: 350px;">
            @include('components/table2', ["table" => $tables[66], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 50])
        </div>
    </div>
    <div class="flex-container flex-column">
        <div style="width: 350px;">
            @include('components/table2', ["table" => $tables[65], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <div style="width: 350px;">
            @include('components/table2', ["table" => $tables[67], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 50])
        </div>
        <div style="width: 350px;">
            @include('components/table2', ["table" => $tables[68], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 50])
        </div>
    </div>
  </div><br>

  <div style="overflow-x:auto;" class="flex-container">
    <div class="flex-container flex-column">
        <div style="width: 200px;">
            @include('components/table1', ["table" => $tables[69], "tableWidth" => 200, "col1" => "GIPS din 1 kom", "col2" => "ZA MET KONS.", "col1Width" => 75])
        </div>
        <div style="width: 250px;">
            @include('components/table1', ["table" => $tables[72], "tableWidth" => 200, "col1" => "GIPS din 1 kom", "col2" => "ZA MET KONS.", "col1Width" => 75])
        </div>
        <div style="width: 250px;">
            @include('components/table2', ["table" => $tables[74], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 75])
        </div>
        <div style="width: 250px;">
            @include('components/table1', ["table" => $tables[78], "tableWidth" => 250, "col1" => "", "col2" => "din / 1kom", "col1Width" => 115])
        </div>
    </div>
    <div class="flex-container flex-column">
        <div style="width: 350px;">
            @include('components/table1', ["table" => $tables[70], "tableWidth" => 350, "col1" => "GIPS din 1 kom", "col2" => "ZA DRVENU KONS.", "col1Width" => 100])
     
        </div>
        <div style="width: 350px;">
            @include('components/table1', ["table" => $tables[73], "tableWidth" => 350, "col1" => "GIPS din 1 kom", "col2" => "SAMORESCI", "col1Width" => 100])
           
        </div>
        <div style="width: 350px;">
            @include('components/table2', ["table" => $tables[75], "tableWidth" => 350, "col1" => "Dim.", "col1Width" => 100])
            
        </div>
    </div>
    <div class="flex-container flex-column">
        <div style="width: 250px;">
            @include('components/table1', ["table" => $tables[71], "tableWidth" => 250, "col1" => "GIPS din 1 kom", "col2" => "SAMORESCI", "col1Width" => 75])
     
        </div>
        <div style="width: 250px;">
                @include('components/table2', ["table" => $tables[76], "tableWidth" => 250, "col1" => "Dim.", "col1Width" => 75])
                
        </div>
        <div style="width: 450px;">
            @include('components/table1', ["table" => $tables[77], "tableWidth" => 450, "col1" => "", "col2" => "", "col1Width" => 200])
            
        </div>
    </div>
  </div><br>