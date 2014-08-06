<link rel="stylesheet" href="https://s3-ap-southeast-1.amazonaws.com/beefbbq/static/css/su.min.css"/>

<article>
    <h1>8/6</h1>
    <table border="1" class="ui basic table">
<?

$dsn = "mysql:host=localhost;dbname=adms_test";
try {
    $db = new PDO($dsn, 'root');
    $rs = $db -> query("SELECT * FROM grade");
//    echo $rs;
    while($row = $rs -> fetch()){
        echo "<tr><td>id:".$row['id']."</td><td>name:".$row['name']."</td><td>chinese:".$row['chinese']."</td><td>english:".$row['english']."</td><td>mathematics:".$row['mathematics']."</td></tr>";
    }
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
    </table>
</article>

<table width="200px" border="1" class="ui basic table">
    <thead>
<?
$row = 0;
$column = 1;
$content;

if (($handle = fopen("score.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        $row++;
        echo "<tr>";
        for ($i = 0; $i < count($data); $i ++){
            echo "<td>" . $data[$i] . "</td>";
        }
        echo "</tr>";
        if ($row == 0){
            echo "</thead><tbody>";
        }
        $row++;
    }
//    echo $handle;
    fclose($handle);
}
?>
</tbody>
</table>

<table width="200px" border="1" class="ui basic table">
    <thead>
    <?
    $grade_plain = file_get_contents("score.csv");
    echo $grade_plain;
    echo explode(",",$grade_plain);
    echo "<tr>
        <th></th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
    </tr>
    </thead>
    <tbody>";
    for ($x = 8; $x <= 22; $x++){
        echo "    <tr>";
        echo "        <td>".$x.":00</td>";
        echo "        <td></td>";
        echo "        <td></td>";
        echo "        <td></td>";
        echo "        <td></td>";
        echo "        <td></td>";
        echo "    </tr>";
    }
    ?>
    </tbody>
</table>


<?php
$count = file_get_contents("count.txt") + 1;
file_put_contents("count.txt", $count);
echo $count;
?>


<?php
$count = file_get_contents("count.txt") + 1;
file_put_contents("count.txt", $count);
echo $count;
?>


Excel(csv)轉成HTML網頁表格
    讀檔 file_get_contents
    拆解字串 explode(",",$student)
    自動產生表格


<?php
/**
 * Created by PhpStorm.
 * User: lololol
 * Date: 5/Aug/14
 * Time: 14:27
 */
//echo "hello world";
//phpinfo();
echo "Welcome." . $_GET['name'];

$y = 0;
for ($x=1; $x<=9999; $x++) {
    $y = $y + $x;
}
echo "The number is: $y <br>";
?>
<div width="200px">
    <table width="200px" border="1" class="ui basic table">
        <thead>
            <tr>
                <th></th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
            </tr>
        </thead>
        <tbody>
        <?php
        for ($x = 8; $x <= 22; $x++){
echo "    <tr>";
echo "        <td>".$x.":00</td>";
echo "        <td></td>";
echo "        <td></td>";
echo "        <td></td>";
echo "        <td></td>";
echo "        <td></td>";
echo "    </tr>";
        }
?>
        </tbody>
    </table>


</div>