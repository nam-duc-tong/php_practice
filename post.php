<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        Username: 
        <input type="text" name="username" value=""/><br><br>
        Password:
        <input type="password" name="password" value=""/><br><br>
        <input type="submit" name="btn" value="Đăng Nhập">
    </form>
    <?php
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
       if(isset($_POST['btn']))
       {
           $username = isset($_POST['username']) ? $_POST['username'] : '';
           $password = isset($_POST['password']) ? $_POST['password'] : '';

           if(!$password||!$username)
           {
               echo 'ban chua nhap du thong tin. vui long nhin lai';
           }
           else if($password!='123456'||$username!='tongducnam')
           {
               echo 'thong tin ban nhap khong chinh xac';
           }
           else
           {
               echo 'Dang nhap thanh cong';
           }
        }
    ?>
</body>
</html>