<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function validateform(){
            // b1: lay gia tri cua username va password
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            // b2: Kiem tra du lieu hop le hay khong
            if(username == '')
            {
                alert('ban chua nhap ten dang nhap');
            }
            else if(password == '')
            {
                alert('Ban chua nhap mat khau');
            }
            else{
                alert('du lieu hop le, ta co the chap nhan submit form');
                return true;
            }
            return false;
        }
    </script>
</head>
<body>
    <form action="" method="post" onsubmit="return validateform();">
        username: 
            <input type="text" name="username" id="username" value=""/><br><br>
        password:
            <input type="password" name="password" id="password" value=""/><br><br>
            <input type="submit" value="dang nhap">

    </form>
    <?php
       
    ?>
</body>
</html>