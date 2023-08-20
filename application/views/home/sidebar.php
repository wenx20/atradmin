<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <span class="menu-text" style="padding-left:20px;">
            Welcome,
            <?= $_SESSION['user_nama'] ?>
        </span>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="menu-text">
            <i class="menu-icon fa fa-users"></i>
        </span>
    </div>
    <ul class="nav nav-list">
        <li class="active open">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Loket
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="active">
                    <a href="<?= base_url('home/loketberkas') ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Loket Pemberkasan
                    </a>

                    <b class="arrow"></b>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Loket Administrasi
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?= base_url() ?>administrasi/spsawal">
                                <i class="menu-icon fa fa-caret-right"></i>
                                SPS (Surat Perintah Setor) Awal
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?= base_url() ?>administrasi/sugaspar">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Surat Tugas & Pengantar
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?= base_url() ?>administrasi/nodin">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Nota Dinas
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?= base_url() ?>administrasi/sbs">
                                <i class="menu-icon fa fa-caret-right"></i>
                                SBS (Surat Bukti Setor) Awal
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?= base_url('administrasi/expose') ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Expose Rencana
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Checklist Berkas & Upload
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Loket Pengarsipan
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Hitung Ulang Biaya
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Undangan Expose Hasil
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>