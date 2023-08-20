<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Administrasi
                <i class="ace-icon fa fa-angle-double-right"></i>
                Surat Tugas dan Pengantar
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <?php if ($this->session->flashdata('sukses_input')) { ?>
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <?= $this->session->flashdata('sukses_input') ?>
                </div>
            <?php } ?>

            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" id="pstb_in" role="form" action="<?= base_url('Administrasi/sugastar_sv') ?>" method="post">
                <div class="form-group">
                    <label class="col-md-2">Nama Perusahaan</label>
                    <div class="col-sm-4">
                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih perusahaan" name="perusahaan">
                            <option value=""> </option>
                            <?php
                            foreach ($company->result_array() as $c) {
                                echo '<option value="' . $c['id'] . '">' . $c['nm_perusahaan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">No. Surat Tugas </label>
                    <div class="col-sm-3">
                        <input name="no_surtug" type="text" id="form-field-1-1" class="form-control" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal Surat </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_surtug" value="<?= date('d-m-Y') ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Penandatangan Surat</label>
                    <div class="col-sm-4">
                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih penandatangan" name="ttd_surtug">
                            <option value=""> </option>
                            <?php
                            foreach ($dp->result_array() as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">No. Surat Pengantar </label>
                    <div class="col-sm-3">
                        <input name="no_pengantar" type="text" id="form-field-1-1" class="form-control" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal Pengantar </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_pengantar" value="<?= date('d-m-Y') ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Tahun Anggaran</label>
                    <div class="col-sm-1">
                        <input name="tahun_anggaran" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nomor DIPA</label>
                    <div class="col-sm-3">
                        <input name="no_dipa" type="text" class="form-control" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal DIPA </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_dipa" value="<?= date('d-m-Y') ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Tanggal Keberangkatan </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_berangkat" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Pusat</label>
                    <div class="col-sm-2">
                        <input name="petugas_pusat" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Kanwil</label>
                    <div class="col-sm-2">
                        <input name="petugas_kanwil" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Kantah</label>
                    <div class="col-sm-2">
                        <input name="petugas_kantah" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Ibukota Provinsi</label>
                    <div class="col-sm-4">
                        <input name="ibukota_prop" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Ibukota Kabupaten</label>
                    <div class="col-sm-4">
                        <input name="ibukota_kab" type="text" class="form-control" />
                    </div>
                </div>
                <div class="control-group after-add-more">
                    <div class="form-group">
                        <label class="col-md-2">Pegawai yg Ditugaskan</label>
                        <div class="col-sm-4">
                            <select class=" form-control" id="form-field-select-3" data-placeholder="Pilih pegawai" name="pegawai_tgs[]">
                                <option value=""> </option>
                                <?php
                                foreach ($dp->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-md-1 text-right">Jabatan </label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <select class="form-control" data-placeholder="Pilih jabatan" name="jabatan[]">
                                    <option value=""> </option>
                                    <?php
                                    foreach ($jabatanlapangan as $jl) {
                                        echo '<option value="' . $jl['id'] . '">' . $jl['nama_jabatan'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-success add-more btn-xs" type="button">
                                <i class="ace-icon fa fa-plus icon-only bigger-110"></i>
                            </button>
                        </div>
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
                            <select class="form-control" id="datpeg" data-placeholder="Pilih pegawai" name="pegawai_tgs[]">
                                <option value=""> </option>
                                <?php
                                foreach ($dp->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-md-1 text-right">&nbsp;</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <select class="form-control" data-placeholder="Pilih jabatan" name="jabatan[]">
                                    <option value=""> </option>
                                    <?php
                                    foreach ($jabatanlapangan as $jl) {
                                        echo '<option value="' . $jl['id'] . '">' . $jl['nama_jabatan'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
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