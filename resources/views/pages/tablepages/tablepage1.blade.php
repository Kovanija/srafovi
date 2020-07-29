
<div style="overflow-x:auto;" class="flex-container">

    <div style="width: 900px">
    <div class="tabela1">
        <div class="flex-container">
            <p style="margin-left:-100px">cena za 100 kom</p>
            <img src="/img/image021.png" alt="">
            <img src="/img/image023.png" alt="">
            <img src="/img/image025.png" alt="">
            <img src="/img/image027.png" alt="">
            <img src="/img/image013.png" alt="">
            <img src="/img/image014.png" alt="">
            <img src="/img/image012.png" alt="">
            <img src="/img/image016.png" alt="">
            <img src="/img/image017.png" alt="">
            <img src="/img/image019.png" alt="">
            <img src="/img/image029.png" alt="">
        </div>
    </div>
        @include('components/table1', ["table" => $tables[1], "tableWidth" => 900, "col1" => "Dim.", "col1Width" => 50])
    </div>
</div><br>

<div style="overflow-x:auto;" class="flex-container">
   <div>
   <p>NAVOJNE ŠIPKE - 1kom</p>
   <div style="width: 600px" class="flex-container">
  
        @include('components/table3', ["table" => $tables[2], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50]) 
        <img src="/img/image041.png" alt="" style="height:300px;align-self:center">

    </div>
   </div>

  
<div>
    <div class="flex-container tabela2">
        <p style="width:40px;height:10px;">cena za 100 kom</p>
        <img src="/img/image031.png" alt="">
        <img src="/img/image033.png" alt="">
        <img src="/img/image035.png" alt="">
        <img src="/img/image037.png" alt="">
        <img src="/img/image039.png" alt="">
    </div>
    
    <div style="width: 500px">
       
        @include('components/table1', ["table" => $tables[3], "tableWidth" => 500, "col1" => "Dim.", "col1Width" => 50])
    </div>
    </div>
 </div><br>

 <div class="flex-container" style="overflow-x:auto;">
    <div class="flex-container flex-column">
   
    <div>
    NASTAVAK NAVOJ ZA
    DRVO-MAŠINSKI NAVOJ (VD-SMK)
    <div class="flex-container">
    <div style="width: 200px">
            @include('components/table1', ["table" => $tables[4], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
        </div>
    <div>
        <img src="/img/image045.png" alt="">
    </div>
    </div>
    </div>
    
    <div>
    MATICA ZA NAVOJNU ŠIPKU SA NASTAVKOM ZA DRVO (MPS-VD
    <div class="flex-container">
    <div style="width: 200px">
            @include('components/table1', ["table" => $tables[5], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
    </div>
    <div>
    <img src="/img/image053.png" alt="">
    </div>
    </div>
    </div>
       
    </div>

    
    <div>
    ZATEZAČI - 1 kom
    <div class="flex-container">
    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[6], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
    </div>
    <div>
    <img src="/img/image047.png" alt="">
    </div>
    </div>
    </div>


    <div>
    ŽABICE - 1 kom
    <div class="flex-container">
    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[7], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])
    </div>
    <div style="align-self:center">
    <img src="/img/image051.png" alt="">
    </div>
    </div>
    </div>

    <div>
    METALNI TIPOVI - 1 kom
    <div class="flex-container">
    <div style="width: 200px">
        @include('components/table1', ["table" => $tables[8], "tableWidth" => 200, "col1" => "Dim.", "col2" => "Kol.", "col1Width" => 50])  
    </div>
    <div style="align-self:center">
    <img src="/img/image049.png" alt="">
    </div>
  </div>
  </div>
<br>