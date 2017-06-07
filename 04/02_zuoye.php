<?php
header("content-Type:text/html; charset=UTF-8");


if($_POST){
    $n1 = $_POST['n1'];
    //$n2 = $_POST['n2'];
    $trans = $_POST['trans'];
    if($trans == "1"){
        $n2 = decbin((int)$n1);
    }
    else if($trans == "2"){
        $n2 = decoct((int)$n1);
    }
    else if($trans == "3"){
        $n2 = dechex((int)$n1);
    }
    else if($trans == "4"){
        $n2 = bindec($n1);	//要求参数是字符串
    }
    else if($trans == "5"){
        $n2 = octdec($n1);	//要求参数是字符串
    }
    else if($trans == "6"){
        $n2 = hexdec($n1);	//要求参数是字符串
    }
}

?>


    <form action="" method="post">
        <input type="text" name="n1" value="<?php echo $n1; ?>" />
        <select name="trans" >
            <option value="1" >10to2</option>
            <option value="2" >10to8</option>
            <option value="3" >10to16</option>
            <option value="4" >2to10</option>
            <option value="5" >8to10</option>
            <option value="6" >16to10</option>
        </select>
        <input type="submit" name="submit1" value="转换" />
        <input type="text" name="n2" value="<?php echo $n2; ?>" />
    </form>

<?php

echo "<table border='1'>";

for($i = 32; $i <= 126; ++$i){

    echo "<tr >";
    echo "<td>{$i}:  </td>";
    echo "<td>", chr($i), "</td>";


    echo "</tr>";










}


















?>