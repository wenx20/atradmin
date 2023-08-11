<div class="page-content">
    <div class="page-header">
        <h1>
            Welcome
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Registrasi Lingkungan
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="<?= base_url('home/regling') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">Nama Lingkungan</label>
                    <div class="col-sm-9">
                        <textarea name="a" type="text" id="form-field-1-1" placeholder="Nama Lingkungan" class="form-control" onkeyup='kapital(this)' /></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">RT/RW</label>
                    <div class="col-sm-1">
                        <input name="b" type="text" id="form-field-1-1" placeholder="RT" class="form-control" maxlength="3" onkeyup='angka(this);checkField(this.form, this)' />
                    </div>
                    <div class="col-sm-1">
                        <input name="c" type="text" id="form-field-1-1" placeholder="RW" class="form-control" maxlength="3" onkeyup='angka(this);checkField(this.form, this)' />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Provinsi</label>
                    <div class="col-sm-9">
                        <select name="prov" type="text" id="provinsi" class="form-control">
                            <option>- Provinsi -</option>
                            <?php
                            foreach ($provinsi as $row) {
                                echo '<option value="' . $row->KD_PROVINSI . '">' . $row->NM_PROVINSI . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Dati2</label>
                    <div class="col-sm-9">
                        <select name="dati2" type="text" id="dati2" class="form-control">
                            <option value="">- Dati2 -</option>
                        </select>
                    </div>
                </div>

                <!-- 
                    <div class="form-group">
                    <label class="col-md-2">Kecamatan</label>
                    <div class="col-sm-9">
                        <select name="kec" id="kecamatan" class="form-control">
                            <option>- kecamatan -</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Kelurahan</label>
                    <div class="col-sm-9">
                        <select name="kel" type="text" id="kelurahan" class="form-control">
                            <option>- Kelurahan -</option>
                        </select>
                    </div>
                </div>
                        -->

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>