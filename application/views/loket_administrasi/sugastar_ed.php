<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Administrasi
                <i class="ace-icon fa fa-angle-double-right"></i>
                Edit Surat Tugas dan Pengantar
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
            <form class="form-horizontal" role="form" action="<?= base_url('Administrasi/sugastar_ed_sv') ?>" method="post" onsubmit="if(!confirm('Apakah anda yakin ?')){return false;}">
                <div class="form-group">
                    <label class="col-md-2">Nama Perusahaan</label>
                    <div class="col-sm-4">
                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Pilih perusahaan" name="perusahaan">
                            <option value=""> </option>
                            <?php
                            foreach ($company->result_array() as $c) {
                                echo '<option value="' . $c['id'] . '" ' . ($datax->id_perusahaan == $c['id'] ? 'selected' : '') . '>' . $c['nm_perusahaan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">No. Surat Tugas </label>
                    <div class="col-sm-3">
                        <input name="no_surtug" type="text" id="form-field-1-1" class="form-control" value="<?= $datax->no_surat ?>" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal Surat </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_surtug" value="<?= $datax->tgl_surat ?>" />
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
                                echo '<option value="' . $row['id'] . '" ' . ($datax->ttdsurat == $row['id'] ? 'selected' : '') . '>' . $row['nama'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">No. Surat Pengantar </label>
                    <div class="col-sm-3">
                        <input name="no_pengantar" type="text" id="form-field-1-1" class="form-control" value="<?= $datax->no_pengantar ?>" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal Pengantar </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_pengantar" value="<?= $datax->tgl_pengantar ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Tahun Anggaran</label>
                    <div class="col-sm-1">
                        <input name="tahun_anggaran" type="text" class="form-control" value="<?= $datax->thn_anggaran ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nomor DIPA</label>
                    <div class="col-sm-3">
                        <input name="no_dipa" type="text" class="form-control" value="<?= $datax->nomor_dipa ?>" />
                    </div>
                    <label class="col-md-2 text-right">Tanggal DIPA </label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_dipa" value="<?= $datax->tgl_dipa ?>" />
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
                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" name="tgl_berangkat" value="<?= $datax->tgl_berangkat ?>" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Pusat</label>
                    <div class="col-sm-1">
                        <input name="petugas_pusat" type="number" class="form-control text-right" value="<?= $datax->jml_petugaspusat ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Kanwil</label>
                    <div class="col-sm-1">
                        <input name="petugas_kanwil" type="number" class="form-control text-right" value="<?= $datax->jml_petugaskanwil ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Jumlah Petugas Kantah</label>
                    <div class="col-sm-1">
                        <input name="petugas_kantah" type="number" class="form-control text-right" value="<?= $datax->jml_petugaskantah ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Ibukota Provinsi</label>
                    <div class="col-sm-4">
                        <input name="ibukota_prop" type="text" class="form-control" value="<?= $datax->ibukota_prop ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Ibukota Kabupaten</label>
                    <div class="col-sm-4">
                        <input name="ibukota_kab" type="text" class="form-control" value="<?= $datax->ibukota_kab ?>" />
                    </div>
                </div>
                <div class="control-group after-add-more">
                    <div class="form-group">
                        <label class="col-md-2">Pegawai yg Ditugaskan</label>
                        <div class="col-sm-4">
                            Nama :
                        </div>
                        <label class="col-md-1 text-right">&nbsp; </label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                Jabatan :
                            </div>
                        </div>
                        <div class="col-sm-2">
                            &nbsp;
                        </div>
                    </div>

                    <?php
                    $no = 1;
                    foreach ($petugaslapangan as $pl) :

                    ?>
                        <div class="control-group<?= $no ?>">
                            <div class="form-group">
                                <label class="col-md-2"><input type="hidden" size="3" value="<?= $pl['id'] ?>" name="id_petugaslapangan[]"></label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="datpeg" data-placeholder="Pilih pegawai" name="pegawai_tgs[]">
                                        <option value=""> </option>
                                        <?php
                                        foreach ($dp->result_array() as $row) {
                                            echo '<option value="' . $row['id'] . '" ' . ($row['id'] == $pl['id_pegawai'] ? 'selected' : '') . '>' . $row['nama'] . '</option>';
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
                                                echo '<option value="' . $jl['id'] . '" ' . ($jl['id'] == $pl['jabatan_lapangan'] ? 'selected' : '') . '>' . $jl['nama_jabatan'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-danger btn-xs cg-remove" data-id="<?= $no ?>">
                                        <i class="ace-icon fa fa-remove bigger-110 icon-only"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
                        $no++;
                    endforeach;
                    ?>

                </div>
                <div class="form-group">
                    <label class="col-md-2">&nbsp;</label>
                    <div class="col-sm-4">
                        <button class="btn btn-success add-more btn-xs" type="button">
                            <i class="ace-icon fa fa-plus icon-only bigger-110"></i> Tambah Pegawai
                        </button>
                    </div>

                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="hidden" size="2" name="id_sugaspar" value="<?= $datax->id ?>">
                        <input type="submit" class="btn btn-info" value="&#10004; Submit">
                        <input type="button" class="btn btn-default" value="Cancel" onclick="history.back();">
                    </div>
                </div>
            </form>

            <div class="copy hide">
                <div class="control-group">
                    <div class="form-group">
                        <label class="col-md-2"><input type="hidden" size="3" value="0" name="id_petugaslapangan[]" readonly></label>
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