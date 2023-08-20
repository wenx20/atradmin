<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Nota Dinas_" . $nodin->nomor_nodin . ".doc");

?>

<div class="col-xs-12" style="border-top: 2px solid; margin-top: 60px;">&nbsp;</div>
<div class="row">
    <div class="col-xs-12">
        <div style="text-align: center; font-weight: bold; font-size: 20px;">NOTA DINAS</div>
        <div style="text-align: center; font-size: 18px;">Nomor: <?= $nodin->nomor_nodin ?></div>

        <table border="0" width="100%" style="margin-top: 10px;" cellspacing="0">
            <tr>
                <td>Yth</td>
                <td width="1%">:</td>
                <td>Bendahara Pengeluaran</td>
            </tr>
            <tr>
                <td valign="top">Dari</td>
                <td valign="top">:</td>
                <td>Pejabat Pembuat Komitmen Kegiatan Pengukuran dan Pemetaan Kadastral</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>1 (satu) berkas</td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>:</td>
                <td>Segera</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td>:</td>
                <td>Pencairan Dana</td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom: 1px solid;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <p style="text-align: justify; text-indent: 0.5in; margin-top: 20px;">
                        Sehubungan dengan akan dilaksanakannya pekerjaan pengukuran dan pemetaan kadastral, bersama ini kami mohon untuk dicairkan dana
                        kegiatan pengukuran lapang dimaksud dengan menggunakan DIPA Kegiatan Pengukuran dan Pemetaan Kadastral Tahun Anggaran 2023.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Pengukuran Lapangan (056.04.CS.5546.BAH.003.052.A.521219)
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table border="1" cellpadding="2" cellspacing="0" width="98%">
                        <?php
                        $no = 1;
                        foreach ($nc as $nc) :
                            if ($nc['luas_permohonan'] > 1000) {
                                $pembagi = 10000;
                                $penambah = 134000000;
                            } elseif ($nc['luas_permohonan'] > 10 && $nc['luas_permohonan'] <= 1000) {
                                $pembagi = 4000;
                                $penambah = 14000000;
                            } else {
                                $pembagi = 500;
                                $penambah = 100000;
                            }

                            $biaya = (($nc['luas_permohonan'] / $pembagi) * $nc['hsbku']) + $penambah;

                        ?>
                            <tr>
                                <td width="5%" style="text-align: center;"><?= $no ?></td>
                                <td><?= $nc['nm_perusahaan'] ?></td>
                                <td>Rp <?= number_format($biaya, 0, ',', '.') ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Demikian untuk menjadi perhatian dan maklum
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="height: 30px;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td style="text-align: center;">
                    <div>Pejabat Pembuat Komitmen</div>
                    <div>Kegiatan Pengukuran dan Pemetaan Kadastral</div>
                    <div style="margin-top: 20px;">&nbsp;</div>
                    <div>
                        <?= $nodin->nama ?> <br />
                        NIP. <?= $nodin->nip ?>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</div>