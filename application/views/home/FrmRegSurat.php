<div class="page-content">
    <div class="page-header">
        <h1>
            Data Surat
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Registrasi Surat
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="<?= base_url('home/regsurat') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">Kode Surat</label>
                    <div class="col-sm-9">
                        <input name="a" type="text" id="txtField" placeholder="Contoh: 01" class="form-control" maxlength="2" onkeyup='angka(this);' required /></input>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Nama Surat</label>
                    <div class="col-sm-9">
                        <input name="b" type="text" placeholder="Nama Surat" class="form-control" onkeyup="ucfirst(this);" required /></input>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Keterangan</label>
                    <div class="col-sm-9">
                        <textarea name="c" class="form-control"></textarea>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>
                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>