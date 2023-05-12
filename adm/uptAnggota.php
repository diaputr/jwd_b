<?php
$lmenu = "anggota";
$sbLmenu = "anggota";
$judul = "Edit Data Anggota";
$rmenu = ["Home", "Anggota", "Edit Data Anggota"];
$rlink = ["index.php", "anggota.php", "uptAnggota.php"];
include("header.php");
include("koneksi.php");
if (isset($pesan)) {
?>

    <div class="card bg-gradient-danger col-md-8 mx-auto">
        <div class="card-header">
            <h3 class="card-title"><?php echo $pesan ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
    </div>
    <?php }
if (isset($_GET['id']) && $_GET['id'] != '') {
    $query = $db->query("select*from anggota where id='" . $_GET['id'] / 123 / 123 . "'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
    ?>

        <div class="card card-light col-md-10 p-0">
            <div class="card-header ">
                <h3 class="card-title">Update Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="uptAnggota_.php" method="POST" enctype="multipart/form-data">
                <div class="card-body ">

                    <div class="row">


                        <div class="col-md-8">
                            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Anggota</label>
                <div class="col-sm-9">
                    <input value="<?php echo $data['nama'] ?>" name="tnama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap ..." required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">

                    <textarea name="talamat" class="form-control" required><?php echo $data['alamat'] ?></textarea>
                </div>
            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm  btn-flat"><i class="fa fa-save"></i> Simpan Perubahan</button>
                   <!--  <a href="delBooks.php?id=<?php echo $data['id'] * 123 * 123 ?>" <button class="btn btn-danger btn-flat btn-sm"><i class="fa fa-trash"></i> Hapus Anggota</button> -->

                        <a href="anggota.php">
                            <button type="button" class="btn btn-default btn-sm btn-flat float-right">Batal</button>
                        </a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>

        <!-- /.card -->

<?php
    }
}
include("footer.php"); ?>