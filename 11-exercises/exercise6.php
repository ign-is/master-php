<?php
/*
    Show the multiplication tables in HTML from 1 to 10.
*/

echo "<h1>Multiplication tables from 1 to 10</h1>";

$counter = 1;

echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        echo "<td>$i x $x = ".($i * $x)."</td>";
    }
    echo '</tr>';
}

echo '</table>';

// <table>
//     <tr>
//         <th>Company</th>
//         <th>Contact</th>
//         <th>Country</th>
//     </tr>
//     <tr>
//         <td>Alfreds Futterkiste</td>
//         <td>Maria Anders</td>
//         <td>Germany</td>
//     </tr>
//     <tr>
//         <td>Centro comercial Moctezuma</td>
//         <td>Francisco Chang</td>
//         <td>Mexico</td>
//     </tr>
// </table> 

?>