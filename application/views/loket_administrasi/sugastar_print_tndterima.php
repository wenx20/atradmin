<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Tanda terima_" . $row->nm_perusahaan . ".doc");

?>

<div class="row">
    <div class="col-xs-12">
        <table width="100%" style="text-align: center; color: #e1e1e1; " border="1" cellpadding="2" cellspacing="0">
            <tr>
                <td>
                    <div style="font-size: 12px;">
                        SUB DIREKTORAT PENGUKURAN DAN PEMETAAN BIDANG <br />
                        DIREKTORAT PENGUKURAN DAN PEMETAAN KADASTRAL <br />
                        KEMENTERIAN AGRARIA DAN TATA RUANG / <br />
                        BADAN PERTANAHAN NASIONAL
                    </div>
                    <div style="font-size: 10px;">Jl. Sisingamangaraja no.2, Jakarta Selatan <br />
                        Telp. 021-7393119 Fax. 021-7268143
                    </div>
                </td>
                <td style="vertical-align: top; font-size: 12px;" width="30%">
                    <div>
                        TANDA TERIMA <br />
                        SURAT PENGANTAR
                    </div>
                </td>
            </tr>
        </table>
        <div style="text-align: center; margin-top: 20px; font-size: 16px; font-weight: bold;">TANDA TERIMA SURAT PENGANTAR</div>
        <div style="text-align: center; font-size: 16px; font-weight: bold;">DARI DIREKTUR PENGUKURAN DAN PEMETAAN KADASTRAL</div>
        <div style="text-align: center; font-size: 10px;">Nomor Surat : <?= $row->no_pengantar ?> tanggal <?= $row->tgl_pengantar ?></div>
        <div style="text-align: center; font-size: 10px;">Perihal : Pengukuran Bidang Tanah <?= $row->nm_perusahaan ?> di Kabupaten <?= $dati2 ?> </div>
        <div style="height: 20px;">&nbsp;</div>
        <table border="1" cellpadding="2" cellspacing="0" width="100%">
            <tr style="font-weight: bold; text-align: center; font-size: 14px;">
                <td with="2%">NO</td>
                <td>TUJUAN SURAT</td>
                <td>NAMA PENERIMA</td>
                <td>CAP & TANDA TANGAN</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">1</td>
                <td>KANWIL BPN PROVINSI <?= $propinsi ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">2</td>
                <td>KANTOR PERTANAHAN KABUPATEN <?= $dati2 ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">3</td>
                <td>BUPATI <?= $dati2 ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">4</td>
                <td>PIMPINAN <?= $row->nm_perusahaan ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

<p>&nbsp;</p>

<pre><br clear=all style='page-break-after:always'></pre>

<div class="row">
    <div class="col-xs-12">
        <table width="100%" style="text-align: center; color: #e1e1e1; " border="1" cellpadding="2" cellspacing="0">
            <tr>
                <td>
                    <div style="font-size: 12px;">
                        SUB DIREKTORAT PENGUKURAN DAN PEMETAAN BIDANG <br />
                        DIREKTORAT PENGUKURAN DAN PEMETAAN KADASTRAL <br />
                        KEMENTERIAN AGRARIA DAN TATA RUANG / <br />
                        BADAN PERTANAHAN NASIONAL
                    </div>
                    <div style="font-size: 10px;">Jl. Sisingamangaraja no.2, Jakarta Selatan <br />
                        Telp. 021-7393119 Fax. 021-7268143
                    </div>
                </td>
                <td style="vertical-align: top; font-size: 12px;" width="30%">
                    <div>
                        TANDA TERIMA <br />
                        SURAT PENGANTAR
                    </div>
                </td>
            </tr>
        </table>
        <div style="text-align: center; margin-top: 20px; font-size: 16px; font-weight: bold;">TANDA TERIMA SURAT PENGANTAR</div>
        <div style="text-align: center; font-size: 16px; font-weight: bold;">DARI DIREKTUR PENGUKURAN DAN PEMETAAN KADASTRAL</div>
        <div style="text-align: center; font-size: 10px;">Nomor Surat : <?= $row->no_pengantar ?> tanggal <?= $row->tgl_pengantar ?></div>
        <div style="text-align: center; font-size: 10px;">Perihal : Pengukuran Bidang Tanah <?= $row->nm_perusahaan ?> di Kabupaten <?= $dati2 ?> </div>
        <div style="height: 20px;">&nbsp;</div>
        <table border="1" cellpadding="2" cellspacing="0" width="100%">
            <tr style="font-weight: bold; text-align: center; font-size: 14px;">
                <td with="2%">NO</td>
                <td>TUJUAN SURAT</td>
                <td>NAMA PENERIMA</td>
                <td>CAP & TANDA TANGAN</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">1</td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">2</td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">3</td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="height: 150px; text-align: center;">4</td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
</div>