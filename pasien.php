<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);
?>
?>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Daftar Pasien</h1>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            $no = 1;
            <?php foreach($pasiens as $pasien): 
            ?>
            <tr>
                <td><?php echo $no ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>

<?php
include_once('bottom.php');
?>