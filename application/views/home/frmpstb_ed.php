<div class="page-content">
    <div class="page-header">
        <h1>
            Loket
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Loket Pemberkasan
                <i class="ace-icon fa fa-angle-double-right"></i>
                Edit Data
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="<?= base_url('home/pstb_ed_sv') ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Apakah anda yakin ?');">
                <div class="form-group">
                    <label class="col-md-2">No. Permohonan</label>
                    <div class="col-sm-3">
                        <input name="no_permohonan" type="text" id="form-field-1-1" value="<?= $permohonan['no_permohonan'] ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Nama Perusahaan</label>
                    <div class="col-sm-9">
                        <input type="hidden" size="2" value="<?= $permohonan['id'] ?>" name="permohonanID">
                        <input name="nm_perusahaan" type="text" id="form-field-1-1" class="form-control" value="<?= $permohonan['nm_perusahaan'] ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Luas Permohonan</label>
                    <div class="col-sm-2">
                        <input name="luas_permohonan" type="text" id="form-field-1-1" value="<?= $permohonan['luas_permohonan'] ?>" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Provinsi</label>
                    <div class="col-sm-3">
                        <select name="provinsi" type="text" id="provinsi" class="form-control">
                            <option value="0">- Provinsi -</option>
                            <?php
                            foreach ($provinsi as $row) {
                                echo '<option value="' . $row['KD_PROVINSI'] . '" ' . ($row['KD_PROVINSI'] == $permohonan['propinsi'] ? 'selected' : '') . '>' . $row['NM_PROVINSI'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Dati2</label>
                    <div class="col-sm-3">
                        <select name="dati2" type="text" id="dati2" class="form-control">
                            <?php
                            foreach ($dati2 as $d) :
                                echo '<option value="' . $d->KD_DATI2 . '" ' . ($d->KD_DATI2 == $row['dati2'] ? 'selected' : '') . '>' . $d->NM_DATI2 . '</option>';
                            endforeach;
                            ?>

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
                        foreach ($warkah as $w) :
                        ?>
                            <tr>
                                <td>
                                    <input type="hidden" value="<?= $w['id'] ?>" size="2" name="wrkID[]">
                                    <?= $w['nm_berkas'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <label>
                                        <input class="ace ace-switch ace-switch-6" onclick="stsberkas(<?= $w['ref_permohonan_berkas'] ?>)" type="checkbox" <?= ($w['sts_ada'] == 1 ? 'checked' : '') ?> />
                                        <span class="lbl"></span>
                                        <input type="hidden" size="2" name="stsberkas[]" id="stsberkas<?= $w['ref_permohonan_berkas'] ?>" value="<?= $w['sts_ada'] ?>" readonly>
                                    </label>
                                </td>
                                <td align="center">
                                    <?php if ($w['sts_scfile'] == 1) { ?>
                                        <input type="checkbox" class="ace input-lg sftcopy" data-id="<?= $w['ref_permohonan_berkas'] ?>" <?= ($w['sts_sftcopy'] == 1 ? 'checked' : '') ?> />
                                        <span class="lbl bigger-120"></span>
                                        <input type="hidden" size="2" name="sftcopy[]" id="scval<?= $w['ref_permohonan_berkas'] ?>" value="<?= $w['sts_sftcopy'] ?>" readonly>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php
                                    if ($w['sts_scfile'] == 1) {
                                        if ($w['sts_sftcopy'] == 1) :
                                            echo "[<a href='" . base_url() . "uploads/" . $w['scfile'] . "' target='_blank'>Lihat File</a>]";
                                        endif;
                                    ?>

                                        <input type="file" id="id-input-file-2" name="scFile<?= $w['id'] ?>" />
                                        <input type="hidden" name="file_old[]" value="<?= $w['scfile'] ?>">
                                    <?php } ?>
                                </td>

                                <td><textarea class="form-control" id="form-field-8" placeholder="Keterangan" name="keterangan[]"><?= $w['keterangan'] ?></textarea></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>

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
        </div>
    </div>