<?php
include "../../konfig/koneksi.php";

if(isset($_GET['act'])==''){
if(isset($_GET['edt'])==''){
if(isset($_GET['del'])==''){
?>

<div class="container mt-3">
<a href="tambah-buku"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Deskripsi</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $data = mysqli_query($conn,"SELECT * FROM buku");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class ="text-center"><?php echo $no;?></td>
                    <td class ="text-center"><?php echo $r['judul'];?></td>
                    <td class ="text-center"><?php echo $r['pencipta'];?></td>
                    <td><?php echo $r['deskripsi'];?></td>
                    <td class ="text-center"><?php echo $r['thn_terbit'];?></td>
                    <td class="text-center"> 
                        <div class="btn-group">
                            <a href="edit-buku?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="hapus-buku?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
        include "delete.php";}
    }
    else if($_GET['edt']=='edit'){            
    include "edit.php";}
}
else if($_GET['act']=='tambah'){
 include "tambah.php";}
?>