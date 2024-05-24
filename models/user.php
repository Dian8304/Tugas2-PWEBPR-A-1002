<?php

include_once 'config/connect-db.php';

class User{
    static function login($data=[]) {
        extract($data);
        global $conn;

        $result = $conn->query("SELECT * FROM user WHERE nama_user = '$nama_user'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['pass'];
            $verify = password_verify($pass, $hashedPassword);
            if ($verify) { return $result; }
            else { return false; }
        }
        else { return false; }
    }
    static function register($data = [])
    {
        global $conn;

        $nama_user = $data['nama_user'];
        $pass = $data['pass'];

        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user SET nama_user = ?, pass = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss',$nama_user, $hashedPassword);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}