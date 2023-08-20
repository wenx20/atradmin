<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Surat tugas_" . $row->nm_perusahaan . ".doc");

?>

<div class="col-xs-12" style="border-top: 1px solid; margin-top: 60px;">&nbsp;</div>
<div class="row">
    <div class="col-xs-12">
        <div style="text-align: center; font-weight: bold; font-size: 20px;">SURAT TUGAS</div>
        <div style="text-align: center; font-size: 18px;">Nomor: <?= $row->no_surat ?></div>

        <table border="0" width="100%" style="margin-top: 10px;">
            <tr>
                <td valign="top" width="10%">Menimbang</td>
                <td valign="top" width="1%">:</td>
                <td valign="top">a.</td>
                <td>
                    Bahwa dalam rangka pelaksanaan pekerjaan pengukuran dan pemetaan bidang tanah atas nama <?= $row->nm_perusahaan ?> seluas &plusmn; <?= $row->luas_permohonan ?> Ha yang terletak di Kabupaten <?= $dati2 ?>, Provinsi <?= $propinsi ?>,
                    perlu menugaskan petugas pengukuran pada Direktorat Pengukuran dan Pemetaan Kadastral, Direktorat Jenderal Survei dan Pemetaan Pertanahan dan Ruang, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional.
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">b.</td>
                <td>
                    Bahwa berdasarkan pertimbangan sebagaimana dimaksud pada huruf a, perlu ditetapkan Surat Tugas
                </td>
            </tr>
            <tr>
                <td valign="top">Dasar</td>
                <td valign="top">:</td>
                <td valign="top">1.</td>
                <td>
                    Undang-undang Nomor 5 Tahun 1960 tentang Peraturan Dasar Pokok-pokok Agraria;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">2.</td>
                <td>
                    Peraturan Pemerintah Nomor 128 Tahun 2015 tentang Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang berlaku pada Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">3.</td>
                <td>
                    Peraturan Presiden Republik Indonesia Nomor 47 Tahun 2020 tentang Kementerian Agraria dan Tata Ruang;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">4.</td>
                <td>
                    Peraturan Presiden Republik Indonesia Nomor 48 Tahun 2020 tentang Badan Pertanahan Nasional;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">5.</td>
                <td>
                    Peraturan Presiden Republik Indonesia Nomor 12 Tahun 2021 tentang Perubahan atas Peraturan Presiden Nomor 16 Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">6.</td>
                <td>
                    Peraturan Menteri Agraria dan Tata Ruang/Kepala Badan Pertanahan Nasional Nomor 16 Tahun 2020 tentang Organisasi dan Tata Kerja Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">7.</td>
                <td>
                    Peraturan Menteri Keuangan Nomor 51/PMK.02/2012 tentang Indeks dalam rangka Penghitungan Penetapan Tarif Pelayanan PNBP pada Badan Pertanahan Nasional;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">8.</td>
                <td>
                    Keputusan Menteri Keuangan Nomor 237/KMK.02/2010 tentang Persetujuan penggunaan sebagian dana Penerimaan Negara Bukan Pajak pada Badan Pertanahan Nasional;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">9.</td>
                <td>
                    Keputusan Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang Nomor 59/SK-300.UK.01.01/V/2023 tanggal 15 Mei 2023 tentang Perubahan Keputusan Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang Nomor 17/SK-300.UK/I/2023 tentang Penyelenggaraan Kegiatan Pengukuran dan Pemetaan Kadastral pada Direktorat Pengukuran dan Pemetaan Kadastral Tahun Anggaran <?= $row->thn_anggaran ?>;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">10.</td>
                <td>
                    Surat Pengesahan Daftar Isian Pelaksanaan Anggaran Direktorat Jenderal Survei dan Pemetaan Pertanahan dan Ruang Tahun Anggaran <?= $row->thn_anggaran ?> Nomor : <?= $row->nomor_dipa ?> tanggal <?= $row->tgl_dipa ?>.
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top"></td>
                <td>
                    Memberi Tugas Kepada:
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <table border="1" align="center" width="98%" cellspacing="0" cellpadding="2">
                        <tr style="text-align: center;">
                            <td width="3%">No.</td>
                            <td>NAMA</td>
                            <td>PANGKAT/ GOL</td>
                            <td>URAIAN TUGAS</td>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($petugaslapangan as $p) :
                        ?>
                            <tr>
                                <td style="text-align: center;"><?= $no ?></td>
                                <td><?= $p['nama'] ?></td>
                                <td style="text-align: center;"><?= $p['golongan'] ?></td>
                                <td><?= $p['nama_jabatan'] ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign="top">Untuk</td>
                <td valign="top">:</td>
                <td valign="top">1.</td>
                <td>
                    Melaksanakan pekerjaan pengukuran dan pemetaan bidang tanah atas nama <?= $row->nm_perusahaan ?> seluas ± <?= $row->luas_permohonan ?> Ha yang terletak di Kabupaten <?= $dati2 ?>, Provinsi <?= $propinsi ?>;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">2.</td>
                <td>
                    Tempat tujuan ke Kantor Wilayah Badan Pertanahan Nasional Provinsi <?= $propinsi ?> dan Kantor Pertanahan Kabupaten <?= $dati2 ?> mulai <?= $row->tgl_berangkat ?> sampai dengan selesai;
                </td>
            </tr>
            <tr>
                <td valign="top"></td>
                <td valign="top"></td>
                <td valign="top">3.</td>
                <td>
                    Demikian untuk dilaksanakan sebagaimana mestinya dan paling lama 1 (satu) minggu setelah dilaksanakan tugas harus membuat laporan tertulis.
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
        <div style="margin-top: 20px;">&nbsp;</div>
        <table border="0" cellspacing="0" cellpadding="2">
            <tr>
                <td>Tembusan:</td>
            </tr>
            <tr>
                <td>
                    - Direktur Jenderal Survei dan Pemetaan Pertanahan dan Ruang.
                </td>
            </tr>
        </table>
    </div>
</div>