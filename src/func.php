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


function renderTable($arrRows, bool $checkable=true){

echo '<table class="pure-table pure-table-bordered">';

/* automatische Auslesen der Tabellenköpfe 
(brauche ich nicht, da mir mit FETCH_ASSOC die Spaltennamen als Keys des zurückgegebenen Arrays zu Verfügung stehen)
        for($i = 0; $i < mysqli_num_fields($res); $i++) {
            $field_info = mysqli_fetch_field($res);
            echo "<th>{$field_info->name}</th>";
*/

//Tabellenüberschriften
echo '<thead>';
foreach($arrRows As $line){
    echo '<tr>';
    //wenn checkable is true, dann, soll jeder Zeile eine Checkbox vorangestellt werden...
    if($checkable===true){
        echo "<th>check</th>";
    }
    //jetzt wird aus den keys des übergebenen arrays (hier $fieldname) die Tabellenüberschrift erstellt...
        foreach($line As $fieldname => $column){
            echo '<th>', $fieldname, '</th>';
        }
    //Edit-spalte   
    echo '<th>edit</th>';
    echo '</tr>';
    break;
}
echo '</thead>';
         

//Tabellenzeilen
echo '<tbody>';
$j = 1;
foreach($arrRows As $line){
    echo '<tr>';
    //wenn checkable is true, dann, soll jeder Zeile eine Checkbox vorangestellt werden...
    if($checkable===true){
        echo "<td><input type=\"checkbox\" name=\"doneYesNo[]\" value=\"done$j\" /></td>";
    }
        foreach($line As $column){
            echo '<td>', $column, '</td>';
        }
    //Edit-Spalte
    if(array_key_exists('user_id', $line) === false ){
        $link = 'todo-update.php?tid=' . $j;
    }
    else{
        $link = 'todo-update.php?tid=' . $line['user_id'];
    }
    echo "<td><a href=\"$link\">edit</a></td>";
    echo '</tr>';
$j++;
}

echo '</tbody>';
echo '</table>';

}

?>