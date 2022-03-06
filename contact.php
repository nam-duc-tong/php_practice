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
        $error = array();
        $data = array(); 
            // code php xu li validate
            if(!empty($_POST['contact_action']))
            {
                // lay du lieu de
                
                $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
                
                $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
                
                $data['content'] = isset($_POST['content']) ? $_POST['content'] : '';
                
                // kiem tra dinh dang du lieu
    
                require('./validate_test.php');
                if(empty($data['fullname']))
                {
                    $error['fullname'] = 'Ban chua nhap ten';
                }
                if(empty($data['email']))
                {
                    $error['email'] = 'Ban chua nhap email';
                }
                else if(!is_email($data['email']))
                {
                    $error['email'] = 'Email khong dung dinh dang';
                }
                if(empty($data['content']))
                {
                    $error['content'] = 'Ban chua nhap noi dung';
                }
                // luu du lieu
                if(!$error)
                {
                    echo 'du lieu co the luu tru';

                }
                else{
                    echo 'du lieu bi loi khong the luu tru';
                }
            }
    ?>
    <h1>Contact form</h1>
    <form action="contact.php" method="post">
        <table cellspacing="0" cellpadding="5">
            <tr>
                <td>Ten cua ban: </td>
                <td>
                    <input type="text" name="fullname" id="fullname" value="<?php echo isset($data['fullname']) ? $data['fullname'] : '';?>"/>
                    <?php echo isset($error['fullname']) ? $error['fullname']: '';?>
                </td>
            </tr>
            <tr>
                <td>Email cua ban: </td>
                <td>
                    <input type="email" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"/>
                    <?php echo isset($error['email']) ? $error['email'] : '';?>
                </td>
            </tr>
            <tr>
                <td>Noi dung lien he: </td>
                <td>
                    <textarea name="content" id="content" cols="30" rows="10"><?php echo isset($data['content']) ? $data['content'] : '';?></textarea>
                    <?php echo isset($error['content']) ? $error['content'] : '';?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="contact_action" value="Gui lien he"></td>
            </tr>
        </table>
    </form>
</body>
</html>