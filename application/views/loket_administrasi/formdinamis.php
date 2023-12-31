<html lang="en">

<head>
    <script src="<?= base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
</head>

<body>
    <br>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Form Tambah Data Dinamis</div>
            <div class="panel-body">
                <!-- membuat form  -->
                <!-- gunakan tanda [] untuk menampung array  -->
                <form action="proses.php" method="POST">
                    <div class="control-group after-add-more">
                        <!--
                        <label>Nama</label>
                        <input type="text" name="nama[]" class="form-control">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jk[]" class="form-control">
                        <label>Alamat</label>
                        <input type="text" name="alamat[]" class="form-control">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan[]">
                            <option>Sistem Informasi</option>
                            <option>Informatika</option>
                            <option>Akuntansi</option>
                            <option>DKV</option>
                        </select>
                        -->
                        <div class="form-group">
                            <label class="col-md-2">Pegawai yg Ditugaskan</label>
                            <div class="col-sm-4">
                                <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih penandatangan" name="ttd">
                                    <option value=""> </option>
                                    <?php
                                    foreach ($dp->result_array() as $row) {
                                        echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <label class="col-md-1 text-right">Jabatan </label>
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <select class="chosen-select form-control" data-placeholder="Pilih jabatan" name="jabatan">
                                        <option value=""> </option>
                                        <?php
                                        foreach ($jabatanlapangan as $jl) {
                                            echo '<option value="' . $jl['id'] . '">' . $jl['nama_jabatan'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success add-more" type="button">
                            <i class="glyphicon glyphicon-plus"></i> Add
                        </button>
                        <hr>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>

                <!-- class hide membuat form disembunyikan  -->
                <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
                <div class="copy hide">
                    <div class="control-group">
                        <!--
                        <label>Nama</label>
                        <input type="text" name="nama[]" class="form-control">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jk[]" class="form-control">
                        <label>Alamat</label>
                        <input type="text" name="alamat[]" class="form-control">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option>Sistem Informasi</option>
                            <option>Informatika</option>
                            <option>Akuntansi</option>
                            <option>DKV</option>
                        </select>
                        -->
                        <label class="col-md-2">Pegawai yg Ditugaskan</label>
                        <div class="col-sm-4">
                            <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih penandatangan" name="ttd">
                                <option value=""> </option>
                                <?php
                                foreach ($dp->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-md-1 text-right">Jabatan </label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <select class="chosen-select form-control" data-placeholder="Pilih jabatan" name="jabatan">
                                    <option value=""> </option>
                                    <?php
                                    foreach ($jabatanlapangan as $jl) {
                                        echo '<option value="' . $jl['id'] . '">' . $jl['nama_jabatan'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- fungsi javascript untuk menampilkan form dinamis  -->
    <!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".add-more").click(function() {
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            // saat tombol remove dklik control group akan dihapus 

            $(document).on("click", ".remove", function() {
                $(this).parents(".control-group").remove();
            });

        });

        function rm_petjab() {
            $(this).parents(".control-group").remove();
        }
    </script>
</body>

</html>