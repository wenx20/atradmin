<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=SPS_" . $sps->nm_perusahaan . ".doc");


if ($sps->luas_permohonan > 1000) {
    $pembagi = 10000;
    $penambah = 134000000;
} elseif ($sps->luas_permohonan > 10 && $sps->luas_permohonan <= 1000) {
    $pembagi = 4000;
    $penambah = 14000000;
} else {
    $pembagi = 500;
    $penambah = 100000;
}

$biaya = (($sps->luas_permohonan / $pembagi) * $hsbku) + $penambah;
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
                <td>Nomor </td>
                <td>:</td>
                <td><?= $sps->no_pengantar ?></td>
                <td>Jakarta, <?= date('d-m-Y') ?></td>
            </tr>
            <tr>
                <td>Lampiran </td>
                <td>:</td>
                <td colspan="2">1 (satu) berkas</td>
            </tr>
            <tr>
                <td valign="top">Perihal </td>
                <td>:</td>
                <td colspan="2">Biaya Pengukuran Bidang Tanah <?= $sps->nm_perusahaan ?> seluas &plusmn; <?= $sps->luas_permohonan ?> Ha di Kabupaten <?= $dati2 ?>, Provinsi <?= $propinsi ?></td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    Yth. <br />
                    Direktur <?= $sps->nm_perusahaan ?> <br />
                    di <br />
                    <div style="margin-left: 20px;"><?= $dati2 ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Sehubungan dengan surat permohonan dari Direktur <?= $sps->nm_perusahaan ?> Nomor Nomor <?= $sps->no_permohonan ?> tanggal <?= $sps->tgl_permohonan ?>
                        perihal Perihal Surat Permohonan, bersama ini disampaikan hal-hal sebagai berikut:
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <table>
                        <tr>
                            <td valign="top" width="2%">1. </td>
                            <td colspan="3">
                                Bahwa berdasarkan hasil telaah permohonan pengukuran Kadastral <?= $sps->nm_perusahaan ?> sebagaimana dimaksud, diketahui bahwa luas yang dimohonkan adalah &plusmn; <?= $sps->luas_permohonan ?> Ha. Sehingga sesuai Peraturan Pemerintah Republik Indonesia Nomor 128 Tahun 2015 tentang Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang berlaku pada Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional dan Peraturan Menteri Keuangan Nomor 51/PMK.02/2012, maka besar biaya permohonan untuk luas areal &plusmn; <?= $sps->luas_permohonan ?> Ha adalah:
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: top; width: 1%;">a.</td>
                            <td>Rumus dasar Peraturan Pemerintah Republik Indonesia Nomor 128 Tahun 2015 <br />
                                {(L/10.000 X HSBKu) + 134.000.000}, luasan > 1.000 Ha, dimana L adalah Luas dalam meter persegi.<br />
                                {(L/4.000 x HSBKu) + 14.000.000 }, luasan 10 -1.000 Ha, dimana L adalah Luas dalam meter persegi.<br />
                                {(L/500 x HSBKu) + 100.000}, luasan < 10 Ha, dimana L adalah Luas dalam meter persegi. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: top;">b.</td>
                            <td>HSBKu Provinsi <?= $propinsi ?> Rp. <?= number_format($hsbku, 0, ',', '.') ?>,- ( PMK No. 51/PMK.02/2012). </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: top;">c.</td>
                            <td>Total biaya pengukuran 1 (satu) bidang tanah adalah sebesar Rp. <?= number_format($biaya, 0, ',', '.') ?>,- ( ) berlaku selama Tahun Anggaran 2023. </td>
                        </tr>
                        <tr>
                            <td valign="top">2. </td>
                            <td colspan="3">
                                Tarif sebagaimana dimaksud angka 1 tidak termasuk biaya transportasi, akomodasi dan konsumsi sesuai pasal 21 Peraturan Pemerintah Republik Indonesia No. 128 Tahun 2015, biaya transportasi, akomodasi dan konsumsi dibebankan kepada <?= $sps->nm_perusahaan ?>.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">3. </td>
                            <td colspan="3">
                                Apabila hasil pengukuran di lapangan, ditemukan bahwa luas dan atau jumlah bidang arealnya bertambah, maka akan dikenakan tambahan biaya PNBP sesuai ketentuan yang berlaku.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">4. </td>
                            <td colspan="3">
                                Tarif sebagaimana dimaksud angka 1 tidak termasuk biaya pembuatan dan pemasangan tugu-tugu batas yang harus sudah selesai dipasang sebelum pengukuran bidang tanah dilaksanakan, dengan spesifikasi sebagaimana diatur dalam Pasal 22 Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 3 Tahun 1997.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">5. </td>
                            <td colspan="3">
                                Sesuai dengan Pasal 19 ayat (1) Peraturan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 3 Tahun 1997, Saudara wajib menunjukkan batas-batas bidang tanah yang diajukan.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">6. </td>
                            <td colspan="3">
                                Terhadap areal yang dimohon agar di konfirmasikan dengan Rencana Tata Ruang Wilayah (RTRW) dan Surat Keputusan Menteri Lingkungan Hidup dan Kehutanan No. SK.7594/MENLHK-PKTL/IPSDH/PLA.1/9/2022 tanggal 29 September 2022 tentang Peta Indikatif Penghentian Pemberian Perizinan Berusaha, Persetujuan Penggunaan Kawasan Hutan, atau Perubahan Peruntukan Kawasan Hutan Baru Pada Hutan Alam Primer Dan Lahan Gambut (PIPPIB) Tahun 2022 Periode II, sekaligus menyelesaikan izin pelepasan kawasan hutan apabila ternyata tumpang tindih dengan kawasan yang memerlukan izin pelepasan kawasan hutan dari Menteri yang bersangkutan.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">7. </td>
                            <td colspan="3">
                                Apabila dikemudian hari ternyata terdapat kawasan hutan sesuai butir 6, maka pemohon wajib menyelesaikan permasalahan tersebut sesuai dengan peraturan yang berlaku.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">8. </td>
                            <td colspan="3">
                                Tarif sebagaimana dimaksud angka 1, disetorkan dengan KODE PEMBAYARAN SIMPONI: <?= $sps->simponi ?> sebelum tanggal <?= $sps->tgl_simponi ?> pukul <?= $sps->wkt_simponi ?>. Tembusan bukti setor agar dikirim kepada kami.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">9. </td>
                            <td colspan="3">
                                Berdasarkan Peraturan Menteri Keuangan Republik Indonesia Nomor 190/PMK.05/2012 tentang Tata Cara Pembayaran Dalam Rangka Pelaksanaan Anggaran Pendapatan dan Belanja Negara dan Surat Direktorat Jenderal Perbendaharaan, Kementerian Keuangan Republik Indonesia tanggal 31 Mei 2013 Nomor S-3845/PB/2013 perihal Penjelasan Perhitungan Maksimum Pencairan Dana PNBP, pada saat ini berlaku ketentuan bahwa Belanja Negara oleh satker pengguna PNBP dalam satu Tahun Anggaran hanya dapat dibiayai dari PNBP Tahun Anggaran berjalan berdasarkan perhitungan Maksimum Pencairan (MP) dana.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">10. </td>
                            <td colspan="3">
                                Pekerjaan lapangan akan segera dimulai setelah bukti setor kami terima. Hasil pekerjaan yang diserahkan berupa Peta Bidang Tanah yang dimohon.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">11. </td>
                            <td colspan="3">
                                Apabila terdapat hambatan yang mengakibatkan tertundanya pelaksanaan pekerjaan, maka biaya yang telah dikeluarkan menjadi tanggungan <?= $sps->nm_perusahaan ?>.
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"></td>
                            <td colspan="3">
                                Demikian untuk menjadi perhatian dan maklum
                            </td>
                        </tr>
                    </table>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td colspan="2">
                    <div style="width: 80%; text-align: center;">
                        a.n. Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang <br />
                        Direktur Pengukuran dan Pemetaan Kadastral, <br />
                    </div>

                    <div style="width: 80%; text-align: center; margin-top: 30px;">
                        <?= $sps->nama_ttd ?> <br />
                        NIP. <?= $sps->nip ?>
                    </div>
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
                <td width="1%">1.</td>
                <td>Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang;</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Kepala Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $propinsi ?>;</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Kepala Kantor Pertanahan Kabupaten <?= $dati2 ?>.</td>
            </tr>
        </table>
    </div>
</div>

<br style="page-break-before: always">
<div class="row">
    <div class="col-xs-12">
        <div>Lampiran Surat</div>
        <div>Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang</div>

        <div style="margin-top: 20px;">
            <table border="1" cellspacing="0" cellpadding="3">
                <tr style="text-align: center;">
                    <td>NO.</td>
                    <td>LUAS BIDANG <br />(hektar)</td>
                    <td>RUMUS</td>
                    <td>JUMLAH BIAYA</td>
                </tr>
                <tr>
                    <td style="text-align: center;">1.</td>
                    <td style="text-align: right;"><?= $sps->luas_permohonan ?></td>
                    <td style="text-align: center;">{(<?= $sps->luas_permohonan ?>/<?= number_format($pembagi, 0, ',', '.') ?> x <?= number_format($hsbku, 0, ',', '.') ?>) + <?= number_format($penambah, 0, ',', '.') ?>}</td>
                    <td style="text-align: right;"><?= number_format($biaya, 0, ',', '.') ?></td>
                </tr>
            </table>
        </div>

    </div>
</div>