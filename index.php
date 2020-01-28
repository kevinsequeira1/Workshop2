<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
    <?php
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    $ArrayObject = new ArrayObject($ceu);
    $ArrayObject->ksort();

    $n=0;
    
    foreach ($ArrayObject as $pais =>$capital){
        echo "La capital de <b> $pais </b> es <b>$capital</b><br />";
        $n++;
    }

    ?>
    </div>
    <br>
    <br>
    <div>
        <h3>Temperaturas</h3>
        <?php
            $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
            68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
            $temp_array = explode(',', $month_temp);
            $tot_temp = 0;
            $temp_array_length = count($temp_array);
            foreach($temp_array as $temp)
            {
            $tot_temp += $temp;
            }
            $avg_high_temp = $tot_temp/$temp_array_length;
            echo " Temperatura promedio es : ".$avg_high_temp."
            "; 
            sort($temp_array);
            echo " Las 5 temperaturas mas bajas :";
            for ($i=0; $i< 5; $i++)
            { 
            echo $temp_array[$i].", ";
            }
            echo "Las 5 temperaturas mas altas :";
            for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
            {
            echo $temp_array[$i].", ";
            }
        ?>

    </div>

</body>
</html>
