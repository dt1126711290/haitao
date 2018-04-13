<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
    </style>
    <script src="jquery-2.2.1.min.js"></script>
    <script src="select.js"></script>
    <script>
        $('input').bind('input propertychange',fun)
    </script>
</head>
<body>
<table class="table table-hover" id="list">
    <thead>
    <td><input type="text" placeholder="品牌" class="input form-control pp2"></td>
    <td><input type="text" placeholder="品名" class="input form-control pm2"></td>
    <td><input type="text" placeholder="商家" class="input form-control sj2"></td>
    <td><input type="text" placeholder="帐号" class="input form-control zh2"></td>
    <td><input type="text" placeholder="订单号" class="input form-control ddh2"></td>
    <td><input type="text" placeholder="单价" class="input form-control dj2"></td>
    <td><input type="text" placeholder="数量" class="input form-control sl2"></td>
    <td><input type="text" placeholder="总价" class="input form-control zj2"></td>
    <td><input type="text" placeholder="国际单号" class="input form-control gjdh2"></td>
    <td><input type="text" placeholder="转运" class="input form-control zy2"></td>
    <td><input type="text" placeholder="转运单号" class="input form-control zydh2"></td>
    <td><input type="text" placeholder="运费" class="input form-control yf2"></td>
    <td><input type="text" placeholder="国内单号" class="input form-control gndh2"></td>
    <td style="width: 128px">操作</td>
    </thead>
    <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "haitao";
    $conn = new mysqli($servername, $username, $password, $dbname);
    @mysqli_set_charset($conn, "utf8");

    $sql = "select * from buy";
    $rs = $conn->query($sql);

    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {

        }
    }
    ?>
    </tr>
    </tbody>
</table>
</body>
</html>
