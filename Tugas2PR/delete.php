<?php
require_once 'akun.php';

if(isset($_GET['no_id'])) {
    $result = Contact::delete($no_id);
}

if( $result ) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>" . mysqli_error($conn);
        }