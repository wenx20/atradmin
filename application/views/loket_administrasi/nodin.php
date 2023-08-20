<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Nota Dinas
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix" style="margin-bottom: 5px;">
                <a href="./nodin_in" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Nodin</button></a>
            </div>
            <?php if ($this->session->flashdata('sukses_input')) { ?>
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <?= $this->session->flashdata('sukses_input') ?>
                </div>
            <?php } ?>
            <div class="table-header">
                Data Nota Dinas
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nomor Nota Dinas </th>
                        <th>Penandatangan Nodin</th>
                        <th>Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($nodin as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['nomor_nodin'] ?></td>
                            <td><?= $row['nama'] ?> (<?= $row['nip'] ?>)</td>
                            <td>
                                <a class='btn btn-xs btn-info' title='Cetak Nota Dinas' href='<?= base_url() ?>administrasi/nodin_print/<?= $row['id'] ?>'><i class='ace-icon fa fa-print bigger-120'></i></a>
                                <a class='btn btn-xs btn-info' title='Edit Data' href='<?= base_url() ?>administrasi/nodin_ed/<?= $row['id'] ?>'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' onclick="return confirm('Apakah anda yakin?')" href='./nodin_del/<?= $row['id'] ?>'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>

                </tbody>
            </table>
            <!-- PAGE CONTENT BEGINS -->
        </div>
    </div>
</div>