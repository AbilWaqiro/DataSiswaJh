<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin-left: 15%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #778899;
            color: #fff;
        }

        tr {
            background-color: #ffff;
        }
    </style>
</head>
<body>
    <h2>ini data siswa</h2>
    <form action="" method="post">
    <button type= "submit" value="cetak"><a href= 'sesion5.php'>Kembali</a></button>
    <?php

    session_start();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo'</tr>';

        foreach($_SESSION['dataSiswa'] as $index => $value){
            echo '<tr>';
            echo '<td>'. $value['nama'] .'</td>';
            echo '<td>'. $value['nis'] .'</td>';
            echo '<td>'. $value['rayon'] .'</td>';
            // echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
            echo '</tr>';
    }
        echo '<table/>';

    ?>
</body>
</html>