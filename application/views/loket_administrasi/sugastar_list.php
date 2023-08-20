<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Surat Tugas dan Surat Pengantar
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix" style="margin-bottom: 5px;">
                <a href="./sugastar_in" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Surat</button></a>
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
                Data Surat
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan </th>
                        <th>No. Surat Tugas</th>
                        <th>No. Surat Pengantar</th>
                        <th>Tgl. Berangkat</th>
                        <th>Penandatangan Surat</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($surat as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['nm_perusahaan'] ?></td>
                            <td><?= $row['no_surat'] ?></td>
                            <td><?= $row['no_pengantar'] ?></td>
                            <td><?= $row['tgl_berangkat'] ?></td>
                            <td><?= $row['nama_ttd'] ?></td>
                            <td width="16%">
                                <select class="form-control sugaspar-action">
                                    <option value="0|#">-Action-</option>
                                    <option value="1|<?= base_url() ?>administrasi/sugastar_print_tugas/<?= $row['id'] ?>">Cetak Surat Tugas</option>
                                    <option value="2|<?= base_url() ?>administrasi/sugastar_print_pengantar/<?= $row['id'] ?>">Cetak Surat Pengantar</option>
                                    <option value="3|<?= base_url() ?>administrasi/sugastar_print_tndterima/<?= $row['id'] ?>">Cetak Tanda Terima</option>
                                    <option value="4|<?= base_url() ?>administrasi/sugastar_ed/<?= $row['id'] ?>">Edit Data</option>
                                    <option value="5|./sugastar_del/<?= $row['id'] ?>">Hapus Data</option>
                                </select>
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