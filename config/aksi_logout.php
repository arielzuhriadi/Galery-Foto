<?php
session_start();
session_destroy();

echo "<script>
alert('log out berhasil');
location.href='../admin/index.php';
</script>";


?>