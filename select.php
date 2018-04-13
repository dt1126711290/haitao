<link rel="stylesheet" href="bootstrap.min.css">
<?php
require_once "conn.php";

$pp = @$_GET['pp'];
$pm = @$_GET['pm'];
$sj = @$_GET['sj'];
$zh = @$_GET['zh'];
$ddh = @$_GET['ddh'];
$dj = @$_GET['dj'];
$sl = @$_GET['sl'];
$zj = @$_GET['zj'];
$gjdh = @$_GET['gjdh'];
$zy = @$_GET['zy'];
$zydh = @$_GET['zydh'];
$yf = @$_GET['yf'];
$gndh = @$_GET['gndh'];


$sql = "SELECT * FROM buy where 
品牌 like '%{$pp}%' and 
品名 like '%{$pm}%' and 
商家 Like '%{$sj}%' and 
帐号 Like '%{$zh}%' and 
订单号 Like '%{$ddh}%' and 
单价 Like '%{$dj}%' and 
数量 Like '%{$sl}%' and 
总价 Like '%{$zj}%' and 
国际单号 Like '%{$gjdh}%' and 
转运 Like '%{$zy}%' and 
转运单号 Like '%{$zydh}%' and 
运费 Like '%{$yf}%' and 
国内单号 Like '%{$gndh}%'
";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    echo '<tr>';

    echo "<input type='hidden' name='id' value='{$row['id']}' class='id' id='id'>
          <td class='pp2'><input type='text' value='{$row['品牌']}' class='input form-control pp' name='pp' id='pp'></td>
          <td class='pm2'><input type='text' value='{$row['品名']}' class='input form-control' name='pm' id='pm'></td>
          <td class='sj2'><input type='text' value='{$row['商家']}' class='input form-control' name='sj' id='sj'></td>
          <td class='zh2'><input type='text' value='{$row['帐号']}' class='input form-control' name='zh' id='zh'></td>
          <td class='ddh2'><input type='text' value='{$row['订单号']}' class='input form-control' name='ddh' id='ddh'></td>
          <td class='dj2'><input type='text' value='{$row['单价']}' class='input form-control' name='dj' id='dj'></td>
          <td class='sl2'><input type='text' value='{$row['数量']}' class='input form-control' name='sl' id='sl'></td>
          <td class='zj2'><input type='text' value='{$row['总价']}' class='input form-control' name='zj' id='zj'></td>
          <td class='gjdh2'><input type='text' value='{$row['国际单号']}' class='input form-control' name='gjdh' id='gjdh'></td>
          <td class='zy2'><input type='text' value='{$row['转运']}' class='input form-control' name='zy' id='zy'></td>
          <td class='zydh2'><input type='text' value='{$row['转运单号']}' class='input form-control' name='zydh' id='zydh'></td>
          <td class='yf2'><input type='text' value='{$row['运费']}' class='input form-control' name='yf' id='yf'></td>
          <td class='gndh2'><input type='text' value='{$row['国内单号']}' class='input form-control' name='gndh' id='gndh'></td>
          <td><a href='update.php?id={$row['id']}' class='btn btn-primary update'>修改</a>
              <a type='submit' class='btn btn-danger' name='ID' value='{$row['id']}'>删除</a></td>";

    echo '</tr>';
}
$conn->close();

?>