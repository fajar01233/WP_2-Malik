<html>
<head>
    <title>Tampil Data Matakuliah</title>
    <link rel="stylesheet" type="text"href=<?php echo base_url()?>>
    <link rel="stylesheet" type="text/css "href="<?php echo base_url() ?> assets/css/stylebuku.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/pustaka-booking/assets/css/stylebuku.css">
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>

            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>

            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah');?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>