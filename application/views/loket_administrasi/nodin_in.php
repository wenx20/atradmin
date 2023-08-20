<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Administrasi
                <i class="ace-icon fa fa-angle-double-right"></i>
                Nota Dinas
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
            <form class="form-horizontal" id="pstb_in" role="form" action="<?= base_url('Administrasi/nodin_sv') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">No. Nota Dinas </label>
                    <div class="col-sm-4">
                        <input name="no_nodin" type="text" id="form-field-1-1" class="form-control" />
                    </div>
                </div>
                <div class="control-group after-add-more">
                    <div class="form-group">
                        <label class="col-md-2">Nama Perusahaan </label>
                        <div class="col-sm-4">
                            <select class=" form-control" id="form-field-select-3" data-placeholder="Pilih perusahaan" name="perusahaan[]">
                                <option value=""> </option>
                                <?php
                                foreach ($company->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nm_perusahaan'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <button class="btn btn-success add-more btn-xs" type="button">
                                <i class="ace-icon fa fa-plus icon-only bigger-110"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Penandatangan Nota Dinas</label>
                    <div class="col-sm-4">
                        <select id="ttd" name="ttd_nodin" class="select2" data-placeholder="Pilih penandatangan ...">
                            <option value=""> </option>
                            <?php
                            foreach ($dp->result_array() as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
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

            <div class="copy hide">
                <div class="control-group">
                    <div class="form-group">
                        <label class="col-md-2">&nbsp;</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="datpeg" data-placeholder="Pilih perusahaan" name="perusahaan[]">
                                <option value=""> </option>
                                <?php
                                foreach ($company->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nm_perusahaan'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <button class="btn btn-danger btn-xs btn-remove">
                                <i class="ace-icon fa fa-remove bigger-110 icon-only"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>