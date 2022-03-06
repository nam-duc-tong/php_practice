<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="get.php" method="get">
        <input type="text" name="q" value=""/>
        <input type="submit" name="btn" value="Search">
    </form> -->
    <?php
        // echo "<pre>";
        // var_dump($_GET);
        // echo "</pre>";
    ?>
    <form action="get.php" method="get">
        <input type="text" name="year" value=""/>
        <input type="submit" name="btn" value="Tim Tuoi"/>
    </form>
    <?php
        if(!empty($_GET['btn']))
        {
            // b1: lay thong tin
            $year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
            // b2: lay nam hien tai
            $current_year = date('Y');

            // dat dieu kien
            if($year<=0)
            {
                echo "năm sinh bạn nhập vào không hợp lệ";
            }
            else if($year>$current_year)
            {
                echo "năm bạn nhập lớn hơn năm hiện tại. Không hợp lệ";
            }
            else{
                echo "số tuổi của bạn năm nay là: ".($current_year-$year);
            }
        }
    ?>
</body>
</html>