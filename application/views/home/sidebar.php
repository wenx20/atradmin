<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background-color: #e1e1e1;">
        <div style="text-align: left; margin-left: 25px; margin-top: 5px; margin-bottom: 5px;">
            Welcome, <br />
            <?= $_SESSION['user_nama'] ?>
        </div>
    </div><!-- /.sidebar-shortcuts -->

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

                <li class="">
                    <a href="<?= base_url('home/loketadmin') ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Loket Administrasi
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?= base_url('home/loketarsip') ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Loket Pengarsipan
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>


    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>