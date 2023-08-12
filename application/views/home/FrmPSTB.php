<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Pemberkasan
                <i class="ace-icon fa fa-angle-double-right"></i>
                Input Permohonan
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" id="pstb_in" role="form" action="<?= base_url('home/pstb_sv') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-2">No. Permohonan</label>
                    <div class="col-sm-3">
                        <input name="no_permohonan" type="text" id="form-field-1-1" placeholder="Generate by system" class="form-control" readonly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nama Perusahaan</label>
                    <div class="col-sm-9">
                        <input name="nm_perusahaan" type="text" id="form-field-1-1" placeholder="Nama Perusahaan" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Luas Permohonan</label>
                    <div class="col-sm-2">
                        <input name="luas_permohonan" type="text" id="form-field-1-1" placeholder="Luas Permohonan" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Provinsi</label>
                    <div class="col-sm-3">
                        <select name="provinsi" type="text" id="provinsi" class="form-control">
                            <option value="0">- Provinsi -</option>
                            <?php
                            foreach ($provinsi as $row) {
                                echo '<option value="' . $row['KD_PROVINSI'] . '">' . $row['NM_PROVINSI'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Dati2</label>
                    <div class="col-sm-3">
                        <select name="dati2" type="text" id="dati2" class="form-control">
                            <option value="">- Dati2 -</option>
                        </select>
                    </div>
                </div>

                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="detail-col" style="width: 30%;">Nama Kelengkapan Warkah </th>
                            <th class="detail-col" style="width: 10%;">Ada/ Tdk Ada</th>
                            <th class="detail-col" style="width: 10%;">Soft Copy*</th>
                            <th class="detail-col" style="width: 25%;">Upload File</th>
                            <th class="detail-col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kelengkapan_warkah as $berkas) :
                        ?>
                            <tr>
                                <td>
                                    <input type="hidden" value="<?= $berkas['id'] ?>" name="berkasID[]">
                                    <?= $berkas['nm_warkah'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <label>
                                        <input class="ace ace-switch ace-switch-6" onclick="stsberkas(<?= $berkas['id'] ?>)" type="checkbox" />
                                        <span class="lbl"></span>
                                        <input type="hidden" size="2" name="stsberkas[]" id="stsberkas<?= $berkas['id'] ?>" value="0" readonly>
                                    </label>
                                </td>
                                <td align="center">
                                    <?php if ($berkas['scfile'] == 1) { ?>
                                        <input type="checkbox" class="ace input-lg sftcopy" data-id="<?= $berkas['id'] ?>" />
                                        <span class="lbl bigger-120"></span>
                                        <input type="hidden" size="2" name="sftcopy[]" id="scval<?= $berkas['id'] ?>" value="0" readonly>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($berkas['scfile'] == 1) { ?>
                                        <input type="file" id="id-input-file-2" name="scFile<?= $berkas['id'] ?>" />
                                        <span class="help-inline" style="color: #696969;">
                                            File maks. 1mb (png, jpg, pdf)
                                        </span>

                                    <?php } ?>
                                </td>

                                <td><textarea class="form-control" id="form-field-8" placeholder="Keterangan" name="keterangan[]"></textarea></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="hidden" size="2" value="<?= $jns_permohonan ?>" name="jns_permohonan">
                        <button type="submit" class="btn btn-info" onClick="return confirmSubmit()">
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