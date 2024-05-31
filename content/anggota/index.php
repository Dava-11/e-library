<?php
include "../../konfig/koneksi.php";
// Memeriksa parameter URL
$act = isset($_GET['act']) ? $_GET['act'] : '';
$edt = isset($_GET['edt']) ? $_GET['edt'] : '';
$del = isset($_GET['del']) ? $_GET['del'] : '';

if ($act == '') {
    if ($edt == '') {
        if ($del == '') {
?>
            <div class="container mt-3">
                <a href="tambah-member.php"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th width="50px">No</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM member");
                        while ($r = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $no; ?></td>
                                <td><?php echo $r['nama']; ?></td>
                                <td class="text-center"><?php echo $r['gender']; ?></td>
                                <td><?php echo $r['alamat']; ?></td>
                                <td class="text-center"><?php echo $r['status']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="edit-member.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                        <a href="hapus-member.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
<?php
        } else if ($del == 'hapus') {
            include "hapus.php";
        }
    } else if ($edt == 'edit') {
        include "edit.php";
    }
} else if ($act == 'tambah') {
    include "tambah.php";
}
?>