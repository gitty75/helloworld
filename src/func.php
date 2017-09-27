<?php

function prettyPrint($data, $dump=true) {
    echo '<pre>';
    if ($dump) {
       var_dump($data); 
    }
    else {
        print_r($data);
    }
    echo '</pre>';
}


function renderTable($arrRows){

echo '<table class="pure-table pure-table-bordered">';

/* automatische Auslesen der Tabellenköpfe 
(brauche ich nicht, da mir mit FETCH_ASSOC die Spaltennamen als Keys des zurückgegebenen Arrays zu Verfügung stehen)
        for($i = 0; $i < mysqli_num_fields($res); $i++) {
            $field_info = mysqli_fetch_field($res);
            echo "<th>{$field_info->name}</th>";
*/

echo "<thead>";
foreach($arrRows As $line){
   
    echo '<tr>';
        foreach($line As $fieldname => $column){
            echo '<th>', $fieldname, '</th>';
        }
    echo '<th>edit</th>';
    echo '</tr>';
    break;
    }
//Edit-spalte    
echo '</thead>';
         

//print_r($columns);
foreach($arrRows As $line){
    echo '<tr>';
        foreach($line As $column){
            echo '<td>', $column, '</td>';
        }
    //Edit-Spalte
    $link = 'todo-update.php?tid=' . $line['user_id'];
    echo "<td><a href=\"$link\">edit</a></td>";
    echo '</tr>';
}

echo '</table>';

}

?>