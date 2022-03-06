<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $result = '';
        if(isset($_POST['calculate']))
        {
            // b1: lay thong tin
            $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
            $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
            // b2: validate thong tin va tinh toan
            if($a =='')
            {
                $result = "ban chua nhap so a";
            }
            else if($b == '')
            {
                $result = 'ban chua nhap so b';
            }
            else if($a==0)
            {
                $result = 'ban phai nhap so khac 0';
            }
            else{
                $result = -($b)/$a;
            }
        }
    ?>
    <h1>Giai phuong trinh bac nhat</h1>
    <form action="" method="post">
        <input type="text" style="width: 20px" name="a" value=""/> x
        +
        <input type="text" style="width: 20px" name="b" value=""/> = 0
        <br><br>
        <input type="submit" name="calculate" value="Tinh"/>
    </form>
    <?php echo $result;?>
</body>
</html>