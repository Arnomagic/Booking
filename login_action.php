<?php

require_once 'config.php';

session_start();

if (isset($_POST['btn_login'])) {
    $user_email = $_POST['txt_email'];
    $user_password = $_POST['txt_password'];
    $user_leve = $_POST['text_leve'];

    if (empty($user_email)) {
        $errorMsg[] = "Please enter email";
    } else if (empty($user_password)) {
        $errorMsg[] = "Please enter password";
    } else if (empty($user_leve)) {
        $errorMsg[] = "Please select role";
    } else if ($user_email AND $user_password AND $user_leve) {
        try {
            $select_stmt = $db->prepare("SELECT user_email, user_password, user_leve FROM tb_user WHERE email = :uemail AND password = :upassword AND leve = :uleve");
            $select_stmt->bindParam(":uemail", $user_email);
            $select_stmt->bindParam(":upassword", $user_password);
            $select_stmt->bindParam(":uleve", $user_leve);
            $select_stmt->execute();

            while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)){
                $dbemail = $row['user_email'];
                $dbpassword = $row['user_password'];
                $dbleve = $row['user_leve'];
            }
            if ($user_email != null AND $user_password != null AND $user_leve != null){
                if ($select_stmt->rowCount() > 0 ){
                    if ($user_email == $dbemail AND $user_password == $dbpassword AND $user_leve == $dbleve) {
                        switch($user_leve) {
                            case 'admin' :
                                $_SESSION['admin_login'] = $user_email;
                                $_SESSION['success'] = "Admin.. Successfully Login..";
                                header("location: admin/admin_home.php");
                            break;
                            case 'member' :
                                $_SESSION['member'] = $user_email;
                                $_SESSION['success'] = "member.. Successfully Login..";
                                header("location: member/member_home.php");
                            break;
                            case 'user' :
                                $_SESSION['user_login'] = $user_email;
                                $_SESSION['success'] = "user.. Successfully Login..";
                                header("location: user/user_home.php");
                            break;
                            default:
                            $_SESSION['error']  ="Wrong email or password or role";
                            header("location: login.php");
                        }
                    }
                } else {
                    $_SESSION['error']  ="Wrong email or password or role";
                    header("location: index.php");
                }
            }
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }
}
?>