<?php
require('functions.php');

$name = 'ubah Data Mahasiswa';
$id = $_GET['id'];
$student = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } 
}

require('views/ubah.view.php');
