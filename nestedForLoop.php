<?php
echo "<table border = '1 '>";
for ($i=1;$i<=15;$i++) {
    echo "<TR>";
    for ($j = 1; $j <= 20; $j++) {
        echo "<td>Row $i, column $j</TD>";
    }

    echo "</TR>";
}
echo "</TABLE>";
?>