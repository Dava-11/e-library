<?php
if(isset($_GET['actjw'])==''){
if(isset($_GET['edtjw'])==''){
if(isset($_GET['deljw'])==''){
?>
<div class="container mt-3">
    <a href="tambah-jadwal"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>Tanggal</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $data = mysqli_query($conn,"SELECT d.*, m.nama AS nama_matkul FROM jadwal d INNER JOIN mata_kuliah m ON d.id_matkul = m.id");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $r['tanggal'];?></td>
                    <td><?php echo $r['nama_matkul'];?></td>
                    <td class="text-center"> 
                        <div class="btn-group">
                        <a href="edit-jadwal?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">edit</button></a>
                        <a href="hapus-jadwal?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">hapus</button></a>
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
        else if($_GET['deljw']=='hapus'){
            include "hapus.php";}
    }
    else if($_GET['edtjw']=='edit'){
        include "edit.php";}
}
else if($_GET['actjw']=='tambah'){
    include "tambah.php";}
?>