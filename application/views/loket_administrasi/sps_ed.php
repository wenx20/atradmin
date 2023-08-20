<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Administrasi
                <i class="ace-icon fa fa-angle-double-right"></i>
                Surat Perintah Setor (SPS) Awal
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <?php if ($this->session->flashdata('failed_input')) { ?>
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <?= $this->session->flashdata('failed_input') ?>
                </div>
            <?php } ?>

            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" id="pstb_in" role="form" action="<?= base_url('Administrasi/sps_ed_sv') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">No. Pengantar </label>
                    <div class="col-sm-3">
                        <input name="no_pengantar" type="text" id="form-field-1-1" value="<?= $sps['no_pengantar'] ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Tgl. Pengantar </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_pengantar" value="<?= $sps['tgl_pengantar'] ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nama Perusahaan</label>
                    <div class="col-sm-6">
                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih perusahaan" name="perusahaan">
                            <option value=""> </option>
                            <?php
                            foreach ($company->result_array() as $c) {
                                echo '<option value="' . $c['id'] . '" ' . ($sps['id_perusahaan'] == $c['id'] ? 'selected' : '') . '>' . $c['nm_perusahaan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Kode SIMPONI</label>
                    <div class="col-sm-2">
                        <input name="simponi" type="text" id="form-field-1-1" value="<?= $sps['simponi'] ?>" class="form-control" readonly />
                    </div>
                    <label class="col-md-1 text-right">Tanggal: </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_simponi" value="<?= $sps['tgl_simponi'] ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control" name="wkt_simponi" value="<?= $sps['wkt_simponi'] ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Penandatangan SPS</label>
                    <div class="col-sm-4">
                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih penandatangan" name="ttd">
                            <option value=""> </option>
                            <?php
                            foreach ($dp->result_array() as $row) {
                                echo '<option value="' . $row['id'] . '" ' . ($row['id'] == $sps['pegawai_ttd'] ? 'selected' : '') . '>' . $row['nama'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="hidden" value="<?= $sps['id'] ?>" name="spsID">
                        <button type="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>
                        <button class="btn btn-cancel">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>