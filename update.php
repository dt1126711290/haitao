<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-2.2.1.min.js"></script>
    <script>

    </script>
</head>
<body>
    <?php
        require_once "conn.php";
        $sql="select * from buy where id={$_GET['id']}";
        $rs=$conn->query($sql);
        echo '<form method="post" action="exec.php?a=update&id='.$_GET['id'].'">';

        while($row=$rs->fetch_assoc()){
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">ID</span>';
            echo "<input disabled='disabled' type='text' class='form-control' name='ID' value='{$row['id']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">品牌</span>';
            echo "<input type='text' class='form-control' name='品牌' value='{$row['品牌']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">品名</span>';
            echo "<input type='text' class='form-control' name='品名' value='{$row['品名']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">商家</span>';
            echo "<input type='text' class='form-control' name='商家' value='{$row['商家']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">帐号</span>';
            echo "<input type='text' class='form-control' name='帐号' value='{$row['帐号']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">订单号</span>';
            echo "<input type='text' class='form-control' name='订单号' value='{$row['订单号']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">单价</span>';
            echo "<input type='text' class='form-control' name='单价' value='{$row['单价']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">数量</span>';
            echo "<input type='text' class='form-control' name='数量' value='{$row['数量']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">总价</span>';
            echo "<input type='text' class='form-control' name='总价' value='{$row['总价']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">国际单号</span>';
            echo "<input type='text' class='form-control' name='国际单号' value='{$row['国际单号']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">转运</span>';
            echo "<input type='text' class='form-control' name='转运' value='{$row['转运']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">转运单号</span>';
            echo "<input type='text' class='form-control' name='转运单号' value='{$row['转运单号']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">运费</span>';
            echo "<input type='text' class='form-control' name='运费' value='{$row['运费']}''>";
            echo '</div>';
            echo '<div class="input-group">';
            echo '<span class="input-group-addon" style="width:90px">国内单号</span>';
            echo "<input type='text' class='form-control' name='国内单号' value='{$row['国内单号']}''>";
            echo '</div>';
            echo '<input style="width: 269px" type="submit" class="btn btn-primary" value="修改">';

        }
    ?>
</form>
</body>
</html>