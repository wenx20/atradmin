<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Surat pengantar_" . $row->nm_perusahaan . ".doc");

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
                <td><?= $row->no_pengantar ?></td>
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
                <td colspan="2">Pengukuran Bidang Tanah <?= $row->nm_perusahaan ?> seluas &plusmn; <?= $row->luas_permohonan ?> Ha di Kabupaten <?= $dati2 ?> dan Permohonan Bantuan Tenaga Petugas Ukur</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">
                    Yth. <br />
                    <table>
                        <tr>
                            <td width="1%">1.</td>
                            <td>Kepala Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $propinsi ?> di <?= $row->ibukota_prop ?></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Kepala Kantor Pertanahan Kabupaten Kabupaten <?= $dati2 ?> di <?= $row->ibukota_kab ?> </td>
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
                        Sehubungan dengan pelaksanaan pekerjaan pengukuran dan pemetaan bidang tanah atas nama <?= $row->nm_perusahaan ?> seluas &plusmn; <?= $row->luas_permohonan ?> Ha yang terletak di Kabupaten <?= $dati2 ?> Provinsi <?= $propinsi ?>,
                        bersama ini dikirimkan <?= $row->jml_petugaspusat ?> petugas lapangan untuk melaksanakan pekerjaan pengukuran dimaksud.
                        Adapun nama-nama petugas tersebut adalah sebagai berikut:
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <table width="98%" border="0">
                        <?php
                        $no = 1;
                        foreach ($petugaslapangan as $pl) :
                        ?>
                            <tr>
                                <td width="1%"><?= $no ?></td>
                                <td><?= $pl['nama'] ?></td>
                                <td><?= $pl['nama_jabatan'] ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p style="text-align: justify; text-indent: 0.5in;">
                        Bersama ini pula diminta bantuan <?= $row->jml_petugaskanwil ?> orang tenaga petugas pengukuran dari Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $propinsi ?> dan <?= $row->jml_petugaskantah ?> orang dari Kantor Pertanahan Kabupaten <?= $dati2 ?> yang memahami pengukuran dan pemetaan bidang tanah dengan metode pengamatan GNSS, dengan ketentuan tidak mengganggu kegiatan rutin dan kegiatan Pendaftaran Tanah Sistematik Lengkap (PTSL).
                    </p>
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td colspan="3">
                    Demikian disampaikan, atas kerja samanya diucapkan terima kasih.
                </td>
            </tr>
            <tr>
                <td colspan="4" height="30">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top"></td>
                <td style="text-align: center;">
                    Jakarta, <?= $row->tgl_surat ?> <br />
                    Direktur Pengukuran dan Pemetaan Kadastral, <br />

                    <div style="margin-top: 30px;">
                        <?= $row->nama_ttd ?> <br />
                        <?= $row->nip_ttd ?>
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
                <td>Bupati Kabupaten Kabupaten <?= $dati2 ?>;</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Camat .........................;</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Kepala Desa .........................;</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Pimpinan <?= $row->nm_perusahaan ?></td>
            </tr>
        </table>
    </div>
</div>