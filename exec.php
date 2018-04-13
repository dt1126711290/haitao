<?php
require_once "conn.php";
function msg($url){
    echo "<script>alert('操作成功');window.location.href='http://localhost/haitao/{$url}'</script>";
}
$id=$_GET['id'];
if($_GET['a']=='update') {
    $sql = "update buy set 
品牌='{$_POST['品牌']}',
品名='{$_POST['品名']}',
商家='{$_POST['商家']}',
帐号='{$_POST['帐号']}',
订单号='{$_POST['订单号']}',
单价='{$_POST['单价']}',
数量='{$_POST['数量']}',
总价='{$_POST['总价']}',
国际单号='{$_POST['国际单号']}',
转运='{$_POST['转运']}',
转运单号='{$_POST['转运单号']}',
运费='{$_POST['运费']}',
国内单号='{$_POST['国内单号']}'
where id='{$id}'";
    $conn->query($sql);
    msg("index.php");
}