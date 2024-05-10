<?php

include_once 'config/connect-db.php';

class user{

    static function login($data = [])
    {
        $nama_user = $data['nama_user'];
        $pass = $data['pass'];
        global $conn;

        $result = $conn->query("SELECT * FROM user WHERE nama_user = '$nama_user'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    static function register($data = [])
    {
        $nama_user = $data['nama_user'];
        $pass = $data['pass'];
        global $conn;


        # Insert to credentials table
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $sql_cred = "INSERT INTO user SET nama_user = ?, pass = ?";
        $stmt_cred = $conn->prepare($sql_cred);
        $stmt_cred->bind_param('ss', $nama_user, $hashedPassword);
        $stmt_cred->execute();

        $result_cred = $stmt_cred->affected_rows > 0 ? true : false;



        echo '<script>console.log("' . $result_cred . '")</script>';
        return $result_cred;
    }
}