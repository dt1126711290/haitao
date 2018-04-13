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
    <script src="select.js"></script>
    <script>
        $(function () {
            showUser("", "", "", "", "", "", "", "", "", "", "", "", "");

            $('.pp2').eq(0).value = "!@#";
            $('body').on('input propertychange keydown', '.pp1,.pm1,.sj1,.zh1,.ddh1,.dj1,.sl1,.zj1,.gjdh1,.zy1,.zydh1,.yf1,.gndh1', function (e) {
                var pp1 = $('.pp1').val();
                var pm1 = $('.pm1').val();
                var sj1 = $('.sj1').val();
                var zh1 = $('.zh1').val();
                var ddh1 = $('.ddh1').val();
                var dj1 = $('.dj1').val();
                var sl1 = $('.sl1').val();
                var zj1 = $('.zj1').val();
                var gjdh1 = $('.gjdh1').val();
                var zy1 = $('.zy1').val();
                var zydh1 = $('.zydh1').val();
                var yf1 = $('.yf1').val();
                var gndh1 = $('.gndh1').val();
                showUser(pp1, pm1, sj1, zh1, ddh1, dj1, sl1, zj1, gjdh1, zy1, zydh1, yf1, gndh1);
            });

            $('.hidecol').on('click', this, function () {
                // console.log($('tr').length);
                var x = $(this).index('span');
                console.log(x);
                for (var i = 0; i < $('tr').length; i++) {
                    $('tr').eq(i).find('td').eq(x).hide();
                }
            });
        });
        function abc(id) {
            var x=id-1;
            $('#myID').val($(''))
        }
    </script>
    <style>
        .all {
            width: 100%;
            min-width: 1300px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
<div class="all">
        <table class="table table-hover">
            <thead>
            <td>
                <div class="input-group">
                    <input type="text" placeholder="品牌" class="input form-control pp1">
                    <span class="input-group-addon hidecol">X</span>
                </div>
                </input>
            </td>
            <td>
                <div class="input-group">
                    <input type="text" placeholder="品名" class="input form-control pm1">
                    <span class="input-group-addon hidecol">X</span>
                </div>
            </td>
            <td><input type="text" placeholder="商家" class="input form-control sj1"></td>
            <td><input type="text" placeholder="帐号" class="input form-control zh1"></td>
            <td><input type="text" placeholder="订单号" class="input form-control ddh1"></td>
            <td><input type="text" placeholder="单价" class="input form-control dj1"></td>
            <td><input type="text" placeholder="数量" class="input form-control sl1"></td>
            <td><input type="text" placeholder="总价" class="input form-control zj1"></td>
            <td><input type="text" placeholder="国际单号" class="input form-control gjdh1"></td>
            <td><input type="text" placeholder="转运" class="input form-control zy1"></td>
            <td><input type="text" placeholder="转运单号" class="input form-control zydh1"></td>
            <td><input type="text" placeholder="运费" class="input form-control yf1"></td>
            <td><input type="text" placeholder="国内单号" class="input form-control gndh1"></td>
            <td style="width: 130px">操作</td>
            </thead>

            <tbody id="txtHint">

            </tbody>

        </table>
    <form action="update2.php" method="post" id="updateData">
        <input type="hidden" name="myID" id="myID" value="">
        <input type="hidden" name="myPP" id="myPP" value="">
        <input type="hidden" name="myPM" id="myPM" value="">
        <input type="hidden" name="mySJ" id="mySJ" value="">
    </form>
</div>
</body>
</html>