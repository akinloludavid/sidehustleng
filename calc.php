
<form action="" method = "post">
    <input type="text" name = "n1" value = "" placeholder = "Enter First Number">
    
    <input type="text" name = "n2" value = "" placeholder = "Enter Second Number"><br><br>

    <input type="submit" name = "add" value = "+">
    <input type="submit" name = "minus" value = "-">
    <input type="submit" name = "divide" value = "/">
    <input type="submit" name = "times" value = "x">
</form>

<?php
    if (isset ($_POST['add']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $plus = $n1 + $n2;
        echo "Result is: ".$plus;
    }

    if (isset ($_POST['minus']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $subtract = $n1 - $n2;
        echo "Result is: ".$subtract;
    }

    if (isset ($_POST['divide']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $div = $n1/$n2;
        echo "Result is: ".$div;
    }

    if (isset ($_POST['times']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $multi = $n1 * $n2;
        echo "Result is: ".$multi;
    }
?>