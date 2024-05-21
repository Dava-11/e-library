<?php
if(isset($_GET['actmk'])==''){
if(isset($_GET['edtmk'])==''){
if(isset($_GET['delmk'])==''){
?>
<div class="container mt-3">
    <a href="tambah-matkul"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $data = mysqli_query($conn,"SELECT * FROM mata_kuliah");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class ="text-center"><?php echo $no;?></td>
                    <td class ="text-center"><?php echo $r['nama'];?></td>
                    <td class="text-center"> 
                        <div class="btn-group">
                        <a href="edit-matkul?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">edit</button></a>
                        <a href="hapus-matkul?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">hapus</button></a>
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
        else if($_GET['delmk']=='hapus'){
            include "hapus.php";}
    }
    else if($_GET['edtmk']=='edit'){
        include "edit.php";}
}
else if($_GET['actmk']=='tambah'){
    include "tambah.php";}
        
        
?>