<?php
if($_GET['module']=='anggota'){
    include "content/anggota/index.php";
}

else if($_GET['module']=='petugas'){
    include "content/petugas/index.php";
}

else if($_GET['module']=='peminjaman'){
    include "content/peminjaman/index.php";
}

else if($_GET['module']=='pengembalian'){
    include "content/pengembalian/index.php";
}

else if($_GET['module']=='buku'){
    include "content/buku/index.php";
}
?>