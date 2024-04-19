<?php
require_once 'data.php';
class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM akun";
        $result = $conn->query($sql);
        $arr = array();
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($no_id, $owner, $no_hp, $email){
        global $conn;
        $sql = "INSERT INTO akun (no_id, owner, no_hp, email) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $no_id, $owner, $no_hp, $email);
        $stmt->execute();
    }
    static function update(){}
    static function delete($no_id){
        global $conn;
        $no_id = $_GET['no_id'];
        $sql = "DELETE FROM akun WHERE no_id = $no_id";
        $hasil = mysqli_query($conn, $sql);
        return $hasil;
        }
    }
?>