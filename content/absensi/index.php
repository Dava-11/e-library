<?php
if(isset($_GET['actabs'])==''){
if(isset($_GET['delabs'])==''){
if(isset($_GET['edtabs'])==''){
?>

<div class="container mt-3">
    <a href="tambah-absensi"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
                <tr>
                    <th width="50px">No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Tanggal Absensi</th>
                    <th>Waktu Absensi</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                // Ganti query untuk mengambil data mahasiswa dan mata kuliah yang sesuai
                $data = mysqli_query($conn,"SELECT absensi.id, mahasiswa.nama AS nama_mahasiswa, mata_kuliah.nama AS nama_matkul, 
                                            DATE(absensi.waktu) AS tanggal_absensi, TIME(absensi.waktu) AS waktu_absensi
                                            FROM absensi
                                            INNER JOIN mahasiswa ON absensi.id_mhs = mahasiswa.id
                                            INNER JOIN jadwal ON absensi.id_jadwal = jadwal.id
                                            INNER JOIN mata_kuliah ON jadwal.id_matkul = mata_kuliah.id");
                while($r=mysqli_fetch_array($data)){
                    ?>
                        <tr>
                        <td class ="text-center"><?php echo $no;?></td>
                        <td><?php echo $r['nama_mahasiswa'];?></td>
                        <td class="text-center"><?php echo $r['nama_matkul'];?></td>
                        <td class="text-center"><?php echo $r['tanggal_absensi'];?></td>
                        <td class="text-center"><?php echo $r['waktu_absensi'];?></td>

                        <td class="text-center"> 
                            <div class="btn-group">
                            <a href="edit-absensi?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">edit</button></a>
                            <a href="hapus-absensi?id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">hapus</button></a>
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
        else if($_GET['edtabs']=='edit'){
            include "edit.php";}
    }
    else if($_GET['delabs']=='hapus'){
        include "hapus.php";}
}
else if($_GET['actabs']=='tambah'){
    include "tambah.php";}
?>