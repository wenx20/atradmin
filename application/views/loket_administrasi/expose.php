<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Undangan Expose Rencana
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix" style="margin-bottom: 5px;">
                <a href="./expose_in" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Undangan</button></a>
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
                Daftar Undangan Expose
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nomor Undangan </th>
                        <th>Tujuan</th>
                        <th>Hari & Tanggal Undangan</th>
                        <th>Waktu Undangan</th>
                        <th>ID Zoom</th>
                        <th>Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($undangan as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['no_undangan'] ?></td>
                            <td><?= $row['nm_perusahaan'] ?></td>
                            <td align="center"><?= $row['tgl_undangan'] ?></td>
                            <td style="text-align: center;"><?= $row['wkt_undangan'] ?></td>
                            <td><?= $row['id_zoom'] ?></td>
                            <td>
                                <a class='btn btn-xs btn-info' title='Cetak Nota Dinas' href='<?= base_url() ?>administrasi/expose_print/<?= $row['id'] ?>'><i class='ace-icon fa fa-print bigger-120'></i></a>
                                <a class='btn btn-xs btn-info' title='Edit Data' href='<?= base_url() ?>administrasi/expose_ed/<?= $row['id'] ?>'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' onclick="return confirm('Apakah anda yakin?')" href='./expose_del/<?= $row['id'] ?>'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
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