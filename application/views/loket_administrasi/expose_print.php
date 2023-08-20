<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Undangan expose_" . $row->nm_perusahaan . ".doc");

?>

<div class="row">
    <div class="col-xs-12">
        <table border="0">
            <tr>
                <td colspan="4" style="height: 60px;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4" style="border-top: 1px solid;">&nbsp;</td>
            </tr>
            <tr>
                <td width="15%">Nomor </td>
                <td width="1%">:</td>
                <td><?= $row->no_undangan ?></td>
                <td width="30%">Jakarta, <?= date('d-m-Y') ?></td>
            </tr>
            <tr>
                <td valign="top">Perihal </td>
                <td>:</td>
                <td colspan="2">Undangan</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    Kepada Yth. <br />
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="1%" valign="top">1.</td>
                            <td>Kepala Bidang Survei dan Pemetaan Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $row->propinsi ?>;</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Kepala Kantor Pertanahan Kabupaten Kabupaten <?= $row->dati2 ?>; </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Kepala Seksi Survei dan Pemetaan Kantor Pertanahan Kabupaten <?= $row->dati2 ?>; </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Direktur <?= $row->nm_perusahaan ?>; </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Staff/Pegawai <?= $row->nm_perusahaan ?>, yang mengetahui Kondisi di lapangan. </td>
                        </tr>
                        <tr>
                            <td colspan="2">di </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tempat </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Sehubungan dengan telah dilaksanakannya Pengukuran Bidang Tanah <?= $row->nm_perusahaan ?> di Kabupaten <?= $row->dati2 ?>, Provinsi <?= $row->propinsi ?>, bersama ini diharapkan kehadiran Bapak/Ibu untuk dapat mengikuti ekspose hasil pengukuran bidang tanah pada:
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <table width="98%" border="0">
                        <tr>
                            <td width="20%">Hari, Tanggal</td>
                            <td width="1%">:</td>
                            <td><?= $row->tgl_undangan ?></td>
                        </tr>
                        <tr>
                            <td>Waktu </td>
                            <td>:</td>
                            <td>Pukul <?= $row->wkt_undangan ?> WIB</td>
                        </tr>
                        <tr>
                            <td>Tempat </td>
                            <td>:</td>
                            <td>Ruang Rapat Lantai 3 Direktorat Pengukuran dan Pemetaan Kadastral</td>
                        </tr>
                        <tr>
                            <td valign="top">Agenda </td>
                            <td valign="top">:</td>
                            <td>Ekspose Rencana Pengukuran Bidang Tanah atas nama <?= $row->nm_perusahaan ?> di Kabupaten <?= $row->dati2 ?>, Provinsi <?= $row->propinsi ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Sehubungan hal tersebut dimohon kehadiran dari Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $row->propinsi ?> dan Kantor Pertanahan Kabupaten <?= $row->dati2 ?> melalui video conference zoom dengan Meeting ID : <?= $row->id_zoom ?> dan password : <?= $row->pwd_zoom ?>.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Demikian disampaikan atas kehadiran dan kerjasamanya diucapkan terimakasih.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4" height="30">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    <table width="100%">
                        <tr>
                            <td width="25%"></td>
                            <td style="text-align: center;">
                                a.n. Direktur Pengukuran dan Pemetaan Kadastral <br />
                                Kepala Subdirektorat Pengukuran dan Pemetaan Bidang,

                                <div style="margin-top: 30px;">
                                    <?= $row->nama_ttd ?> <br />
                                    <?= $row->nip ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="2" height="50">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">Tembusan : </td>
            </tr>
            <tr>
                <td>Direktur Pengukuran dan Pemetaan Kadastral.</td>
            </tr>
        </table>
    </div>
</div>