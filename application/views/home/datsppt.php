						<!-- PAGE CONTENT BEGINS -->
						<div class="center">
						    <div class="page-header">
						        <h1>
						            Input NOP
						            <small>
						                <i class="ace-icon fa fa-angle-double-right"></i>
						                Masukan Nomor Objek Pajak
						            </small>
						        </h1>
						    </div><!-- /.page-header -->
						    <form method="get" class="form-horizontal" role="form" action="<?= base_url(); ?>beranda/cariop">
						        <div class="form-group">
						            <input name="kdprop" style=width:100px; type="text" id="form-field-5" maxlength="2" placeholder="KD PROP" autofocus onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="kddt2" style=width:100px; type="text" id="form-field-5" maxlength="2" placeholder="KD DT2" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="kdkec" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD KEC" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="kdkel" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD KEL" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="kdbl" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD BLOK" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="nourut" style=width:100px; type="text" id="form-field-5" maxlength="4" placeholder="NO URUT" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						            <input name="kdop" style=width:100px; type="text" id="form-field-5" maxlength="1" placeholder="KD OP" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
						        </div>
						        <div class="clearfix form-actions">
						            <div class="col-md-offset-3 col-md-6">
						                <button class="btn btn-info" type="submit">
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

						<!-- Start Hasil -->
						<?php
                        foreach ($fsppt->result() as $r) {
                            $kdprop = $r->KD_PROPINSI;
                            $kddt2 = $r->KD_DATI2;
                            $kdkec = $r->KD_KECAMATAN;
                            $kdkel = $r->KD_KELURAHAN;
                            $kdbl = $r->KD_BLOK;
                            $nourut = $r->NO_URUT;
                            $kdop = $r->KD_JNS_OP;
                            $nmwp = $r->NM_WP_SPPT;
                            $jlwp = $r->JLN_WP_SPPT;
                            $blwp = $r->BLOK_KAV_NO_WP_SPPT;
                            $klwp = $r->KELURAHAN_WP_SPPT;
                            $kotawp = $r->KOTA_WP_SPPT;

                            $alamatwp = $jlwp . ' ' . $blwp;
                            $nop = $kdprop . '.' . $kddt2 . '.' . $kdkec . '.' . $kdkel . '.' . $kdbl . '-' . $nourut . '.' . $kdop;
                        }
                        if (empty($nop)) {
                            echo "<div class='alert alert-danger center'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='ace-icon fa fa-times'></i>
										</button>

										<strong>
											<i class='ace-icon fa fa-times'></i>
											NOP!
										</strong>
										Tidak ada dalam database SIMPBB.
										<br />
									</div>";
                        } else {
                        ?>
						    <div class="row">
						        <div class="col-sm-10 col-sm-offset-1">
						            <div class="widget-box transparent">
						                <div class="widget-header widget-header-large">
						                    <h3 class="widget-title grey lighter">
						                        <i class="ace-icon fa fa-leaf green"></i>
						                        <?php echo $nop; ?>
						                    </h3>

						                    <div class="widget-toolbar no-border invoice-info">
						                        <span class="invoice-info-label">Invoice:</span>
						                        <span class="red">#121212</span>

						                        <br />
						                        <span class="invoice-info-label">Date:</span>
						                        <span class="blue"><?php echo date('d/m/Y'); ?></span>
						                    </div>

						                    <div class="widget-toolbar hidden-480">
						                        <a href="<?= base_url() ?>Beranda/tunggakan_print/<?= $kdprop ?>/<?= $kddt2 ?>/<?= $kdkec ?>/<?= $kdkel ?>/<?= $kdbl ?>/<?= $nourut ?>/<?= $kdop ?>" target="_blank">
						                            <i class="ace-icon fa fa-file-pdf-o"></i>
						                        </a>
						                    </div>
						                </div>

						                <div class="widget-body">
						                    <div class="widget-main padding-24">
						                        <div class="row">
						                            <div class="col-sm-6">
						                                <div class="row">
						                                    <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
						                                        <b>Letak Objek Pajak</b>
						                                    </div>
						                                </div>

						                                <div>
						                                    <?php
                                                            foreach ($fdop->result() as $row) {
                                                                $kdprop = $row->KD_PROPINSI;
                                                                $kddt2 = $row->KD_DATI2;
                                                                $kdkec = $row->KD_KECAMATAN;
                                                                $kdkel = $row->KD_KELURAHAN;
                                                                $kdbl = $row->KD_BLOK;
                                                                $nourut = $row->NO_URUT;
                                                                $kdop = $row->KD_JNS_OP;

                                                                $jlop = $row->JALAN_OP;
                                                                $rwop = $row->RW_OP;
                                                                $rtop = $row->RT_OP;
                                                            } ?>

						                                    <?php
                                                            foreach ($fwil->result() as $rx) {
                                                                $kdprop = $rx->KD_PROPINSI;
                                                                $kddt2 = $rx->KD_DATI2;
                                                                $kdkec = $rx->KD_KECAMATAN;
                                                                $kdkel = $rx->KD_KELURAHAN;

                                                                $nmdati2 = $rx->NM_DATI2;
                                                                $nmkec = $rx->NM_KECAMATAN;
                                                                $nmkel = $rx->NM_KELURAHAN;
                                                            } ?>
						                                    <ul class="list-unstyled spaced">
						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right blue"></i><?php echo $jlop; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right blue"></i>RT/RW : <?php echo $rtop; ?>/<?php echo $rwop; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right blue"></i><?php echo $nmkel; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right blue"></i><?php echo $nmkec; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right blue"></i>
						                                            <?php echo $nmdati2; ?>
						                                        </li>
						                                    </ul>
						                                </div>
						                            </div><!-- /.col -->

						                            <div class="col-sm-6">
						                                <div class="row">
						                                    <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
						                                        <b>Nama & Alamat Wajib Pajak</b>
						                                    </div>
						                                </div>

						                                <div>
						                                    <ul class="list-unstyled  spaced">
						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right green"></i><?php echo $nmwp; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right green"></i><?php echo $alamatwp; ?>
						                                        </li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right green"></i><?php echo $klwp; ?>
						                                        </li>

						                                        <li class="divider"></li>

						                                        <li>
						                                            <i class="ace-icon fa fa-caret-right green"></i><?php echo $kotawp; ?>
						                                        </li>
						                                    </ul>
						                                </div>
						                            </div><!-- /.col -->
						                        </div><!-- /.row -->

						                        <div class="space"></div>
						                        <div class="clearfix">
						                            <div class="pull-right tableTools-container"></div>
						                        </div>
						                        <div class="table-header">
						                            Daftar Tunggakan SPPT
						                        </div>

						                        <!-- div.table-responsive -->

						                        <!-- div.dataTables_borderWrap -->
						                        <div>
						                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
						                                <thead>
						                                    <tr>
						                                        <th class="center">
						                                            <label class="pos-rel">
						                                                <input type="checkbox" class="ace" disabled />
						                                                <span class="lbl"></span>
						                                            </label>
						                                        </th>
						                                        <th width="24%">PBB POKOK</th>
						                                        <th width="24%">DENDA</th>
						                                        <th width="24%">POKOK + DENDA</th>
						                                        <th class="center" width="20%">TAHUN PAJAK</th>
						                                    </tr>
						                                </thead>

						                                <tbody>
						                                    <?php
                                                            $total = 0;
                                                            $totTunggakan = 0;
                                                            $today = strtotime(date('Y/m/d'));
                                                            foreach ($fsppt->result_array() as $row) :
                                                                $total = $total + $row['PBB_YG_HARUS_DIBAYAR_SPPT'];

                                                                $tgl_jatuh_tempo = strtotime($row['TGL_JATUH_TEMPO_SPPT']);
                                                                $awal = (date("Y", $tgl_jatuh_tempo) * 12) + date("n", $tgl_jatuh_tempo);
                                                                $akhir = (date("Y", $today) * 12) + date("n", $today);
                                                                $jml_bulan = $akhir - $awal;

                                                                if ($row['TAHUN'] == date('Y')) {
                                                                    $denda = 0;
                                                                    $totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
                                                                } else {
                                                                    if ($jml_bulan == 0) {
                                                                        $denda = 0;
                                                                        $totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
                                                                    } else if ($jml_bulan < 24) {
                                                                        $denda = $jml_bulan * (2 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
                                                                        $totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
                                                                    } else {
                                                                        $denda = (48 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
                                                                        $totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
                                                                    }
                                                                }

                                                                $totTunggakan = $totTunggakan + $totbayar;
                                                            ?>
						                                        <tr>
						                                            <td class="center"><input type="checkbox" name="cekBayar" value="<?= $totbayar ?>" onClick="cekBayar(this)"> </td>
						                                            <td class="text-right"><?= number_format($row['PBB_YG_HARUS_DIBAYAR_SPPT'], 0, ',', '.'); ?></td>
						                                            <td class="text-right"><?= number_format(ceil($denda), 0, ',', '.'); ?> </td>
						                                            <td class="text-right"><?= number_format(($row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda), 0, ',', '.'); ?></td>
						                                            <td class="center"><?= $row['THN_PAJAK_SPPT'] ?></td>
						                                        </tr>
						                                    <?php endforeach; ?>
						                                </tbody>
						                            </table>
						                        </div>

						                        <div class="hr hr8 hr-double hr-dotted"></div>

						                        <div class="row">
						                            <div class="col-sm-5 pull-right">
						                                <h4 class="pull-right">
						                                    Total Tunggakan :
						                                    <span class="red totbayar"><?= number_format(ceil($totTunggakan), 0, ',', '.'); ?></span>
						                                </h4>
						                            </div>
						                        </div>

						                        <div class="space-6"></div>
						                        <div class="well">
						                            Ingatlah Pajak, karena pajak untuk kita semua
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						<?php
                        }
                        ?>
						<!-- End Hasil -->
						<script>
						    function checkField(formObj, fldObj) {
						        for (i = 0; i < formObj.length; i++)
						            if (formObj[i] == fldObj)
						                if (fldObj.value.length == parseInt(fldObj.maxLength)) {
						                    if (i < formObj.length - 1)
						                        fldObj = formObj[++i];
						                    fldObj.focus();
						                }
						    }

						    function Angka(evt) {
						        var charCode = (evt.which) ? evt.which : event.keyCode
						        if (charCode > 31 && (charCode < 48 || charCode > 57))

						            return false;
						        return true;
						    }

						    $("input[type=checkbox]").on("change", function() {
						        var total = 0;

						        $("input:checkbox[name=cekBayar]:checked").each(function() {
						            total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
						        });
						        $(".totbayar").text(formatRupiah(total));
						    });

						    function formatRupiah(bilangan) {
						        var reverse = bilangan.toString().split('').reverse().join(''),
						            ribuan = reverse.match(/\d{1,3}/g);
						        ribuan = ribuan.join('.').split('').reverse().join('');
						        return ribuan;
						    }
						</script>