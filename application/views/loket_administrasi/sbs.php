<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Surat Bukti Setor Awal
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix" style="margin-bottom: 5px;">
                <a href="./sbs_in" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Surat</button></a>
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
                Data Surat Bukti Setor Awal
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nomor Berkas </th>
                        <th>Nomor DI.302</th>
                        <th>Nomor DI.305</th>
                        <th>Nomor DI.306</th>
                        <th>Tanggal SBS</th>
                        <th>Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($sbs as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['no_berkas'] ?></td>
                            <td><?= $row['nomor_di_302'] ?></td>
                            <td><?= $row['nomor_di_305'] ?></td>
                            <td><?= $row['nomor_di_306'] ?></td>
                            <td><?= date("d-m-Y", strtotime($row['tgl_sbs'])) ?></td>
                            <td>
                                <!-- <a class='btn btn-xs btn-info' title='Cetak Surat Bukti Setor' href='<?= base_url() ?>administrasi/sbs_print/<?= $row['id'] ?>'><i class='ace-icon fa fa-print bigger-120'></i></a> -->
                                <a class='btn btn-xs btn-info' title='Edit Data' href='<?= base_url() ?>administrasi/sbs_ed/<?= $row['id'] ?>'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' onclick="return confirm('Apakah anda yakin?')" href='./sbs_del/<?= $row['id'] ?>'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
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