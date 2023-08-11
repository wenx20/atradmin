<div class="page-content">
    <div class="page-header">
        <h1>
            Data Pemberkasan
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                +Add
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix">
                <a href="#modal-form" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Permohonan</button></a>
                <!-- <a href="<?= base_url('home/regpermohonan') ?>"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Permohonan</button></a> -->
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                Data Berkas Permohonan
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl. Input</th>
                        <th>Nama Perusahaan </th>
                        <th>Kelengkapan Warkah</th>
                        <th>Status Permohonan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dp->result_array() as $row) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['created_date'] ?></td>
                            <td><?= $row['nm_perusahaan'] ?></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a class='btn btn-xs btn-info' title='Edit Data' href=''><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' href=''><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
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

<!-- Modal Form -->
<div id="modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Pilih Permohonan</h4>
            </div>

            <div class="modal-body">
                <div class="row" align="center">

                    <a href="<?= base_url('home/pstbaru') ?>" class="btn btn-primary">
                        <i class="ace-icon fa fa-edit bigger-230"></i>
                        Permohonan Baru
                    </a>
                    <a href="<?= base_url('home/pstperpanjangan') ?>" class="btn btn-danger">
                        <i class="ace-icon fa fa-refresh bigger-230"></i>
                        Permohonan Perpanjangan
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>