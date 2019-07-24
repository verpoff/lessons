<form method="post">
    от <input type="text" name="from">
    до <input type="text" name="till">
    <select name="type">
        <option value="1">нечётные</option>
        <option value="2">чётные</option>
        <option value="all">все</option>
    </select>
    <input type="submit" value="вывести числа">
</form>

<?php

for ($i=$_POST['from'];$i<=$_POST['till'];$i++ )
{
    // нечётные
    if($_POST['type']==1)
    {
        if($i%2 != 0)
        {
            echo " ".$i;
        }
    }

    // чётные
    elseif($_POST['type']==2)
    {
        if($i%2 == 0)
        {
            echo " ".$i;
        }
    }

    // все
    elseif($_POST['type']=="all")
    {
            echo " ".$i;
    }
    // если ничего не выбрано
    else
    {
        echo " ".$i;
    }

}
