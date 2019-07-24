<form method="post">
    число строк <input type="text" name="tr">
    число столбцов <input type="text" name="td">
    <input type="submit" value="Нарисовать таблицу">
</form>
<?php
echo "<table>";
    for ($i=1;$i<=$_POST['tr'];$i++)
    {
        echo "<tr>";
       if($i==1)
       {
           for ($j=1;$j<=$_POST['td'];$j++)
           {
               echo "<td>$j</td>";
           }
       }
       else
       {
           for ($j=1;$j<=$_POST['td'];$j++)
           {
               echo "<td>".$i*$j."</td>";
           }
       }

        echo "</tr>";
    }

echo "</table>";
