<?php
$lmenu = "buku";
$sbLmenu = "buku";
$judul = "Data Buku Perpustakaan";
$rmenu = ["Home", "Buku"];
$rlink = ["index.php", "books.php"];
include("header.php");
include("koneksi.php");
?>

<div class="row m-1">
    <a href="addBooks.php">
        <button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
    </a>
</div>
<div class="card">

    <div class="card-header">Data Buku Perpustakaan</div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th style="width: 10px;"></th>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th style="width: 15px;">Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $db->query("select buku.id as id,buku.kode as kode, buku.judul as judul, 
                buku.pengarang as pengarang, buku.penerbit as penerbit, buku.jumlah as jumlah,
                kategori.kategori as kategori from buku inner join kategori where buku.kategori=kategori.id 
                order by buku.id DESC");
                $no = 0;
                foreach ($query as $q) {
                    $no++;

                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td class="text-center">
                            <a href="uptBooks.php?id=<?php echo $q['id'] * 123 * 123 ?>"<button class="btn btn-primary btn-flat btn-xs"><i class="fa fa-edit"></i></button>
                        </td>
                        <td><?php echo $q['kode'] ?> </td>
                        <td><?php echo $q['judul'] ?></td>
                        <td><?php echo $q['pengarang'] ?></td>
                        <td><?php echo $q['kategori'] ?></td>
                        <td><?php echo $q['penerbit'] ?></td>
                        <td><?php echo $q['jumlah'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("footer.php"); ?>