<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Data SPS Awal
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix" style="margin-bottom: 5px;">
                <a href="./sps_in" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah SPS</button></a>
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
                Data Surat Pengantar Setor Awal
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Pengantar</th>
                        <th>Tgl. Pengantar</th>
                        <th>Nama Perusahaan </th>
                        <th>Simponi</th>
                        <th>Penandatangan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($sps->result_array() as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['no_pengantar'] ?></td>
                            <td><?= $row['tgl_pengantar'] ?></td>
                            <td><?= $row['nm_perusahaan'] ?></td>
                            <td><?= $row['simponi'] ?></td>
                            <td><?= $row['nama_ttd'] ?></td>
                            <td>
                                <a class='btn btn-xs btn-info' title='Cetak SPS' href='<?= base_url() ?>administrasi/sps_print/<?= $row['id'] ?>'><i class='ace-icon fa fa-print bigger-120'></i></a>
                                <a class='btn btn-xs btn-info' title='Edit Data' href='<?= base_url() ?>administrasi/sps_ed/<?= $row['id'] ?>'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' onclick="return confirm('Apakah anda yakin?')" href='./sps_del/<?= $row['id'] ?>'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
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