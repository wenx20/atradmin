<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Administrasi
                <i class="ace-icon fa fa-angle-double-right"></i>
                Surat Bukti Setor (SBS) Awal
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <?php if ($this->session->flashdata('fail_input')) { ?>
                <div class="alert alert-block alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <?= $this->session->flashdata('fail_input') ?>
                </div>
            <?php } ?>

            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" id="pstb_in" role="form" action="<?= base_url('Administrasi/sbs_ed_sv') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">Nomor Berkas </label>
                    <div class="col-sm-4">
                        <input name="no_berkas" type="text" id="form-field-1-1" class="form-control" value="<?= $row->no_berkas ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nomor DI. 302</label>
                    <div class="col-sm-4">
                        <input name="di302" type="text" id="form-field-1-1" class="form-control" value="<?= $row->nomor_di_302 ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nomor DI. 305 </label>
                    <div class="col-sm-4">
                        <input name="di305" type="text" id="form-field-1-1" class="form-control" value="<?= $row->nomor_di_305 ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nomor DI. 306 </label>
                    <div class="col-sm-4">
                        <input name="di306" type="text" id="form-field-1-1" class="form-control" value="<?= $row->nomor_di_306 ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Tanggal SBS </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_sbs" value="<?= date("d-m-Y", strtotime($row->tgl_sbs)) ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="hidden" name="sbs_id" size="3" value="<?= $row->id ?>">
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