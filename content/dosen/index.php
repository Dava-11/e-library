<?php
if(isset($_GET['actds'])==''){
if(isset($_GET['delds'])==''){
if(isset($_GET['edtds'])==''){
?>
<div class="container mt-3">
    <a href="tambah-dosen"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>Nama Dosen</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            // Ganti query untuk mengambil data dosen dan mata kuliah yang sesuai
            $data = mysqli_query($conn,"SELECT d.*, m.nama AS nama_matkul FROM dosen d INNER JOIN mata_kuliah m ON d.id_matkul = m.id");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class ="text-center"><?php echo $no;?></td>
                    <td><?php echo $r['nama'];?></td>
                    <td><?php echo $r['nama_matkul'];?></td>
                    <td class="text-center"> 
                        <div class="btn-group">
                        <a href="edit-dosen?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">edit</button></a>
                        <a href="hapus-dosen?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">hapus</button></a>
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
        }
        else if($_GET['edtds']=='edit'){
            include "edit.php";}
    }
    else if($_GET['delds']=='hapus'){
        include "hapus.php";}
}
else if($_GET['actds']=='tambah'){
    include "tambah.php";}
?>