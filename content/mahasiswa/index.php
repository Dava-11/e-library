<?php
if(isset($_GET['act'])==''){
if(isset($_GET['edt'])==''){
if(isset($_GET['del'])==''){
?>

<div class="container mt-3">
    <a href="tambah-mahasiswa"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $data = mysqli_query($conn,"SELECT * FROM mahasiswa");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class ="text-center"><?php echo $no;?></td>
                    <td class ="text-center"><?php echo $r['nim'];?></td>
                    <td><?php echo $r['nama'];?></td>
                    <td class="text-center"> 
                        <div class="btn-group">
                            <a href="edit-mahasiswa?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="hapus-mahasiswa?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
        }
        else if($_GET['del']=='hapus'){
        include "hapus.php";}
    }
    else if($_GET['edt']=='edit'){            
    include "edit.php";}
}
else if($_GET['act']=='tambah'){
 include "tambah.php";}
?>