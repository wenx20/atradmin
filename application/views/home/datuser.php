<div class="page-content">
    <div class="page-header">
        <h1>
            Referensi Surat
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Registrasi Referensi Surat
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix">
                <a href="#modal-form" data-toggle="modal"><button class="btn btn-inverse"><i class="fa fa-plus"></i> Tambah Pegawai</button></a>
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                Data Pegawai
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>NIP</th>
                        <th>Level User</th>
                        <th>Status Blokir</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($du->result_array() as $row) {
                        echo "<tr><td>$no</td>
                    <td>$row[username]</td>
                    <td><p align='justify'>$row[nip]</p></td>
                    <td>$row[leveluser]</td>
                    <td>$row[blokir]</td>
                    <td>
                    <div class='hidden-sm hidden-xs btn-group'>
                        <a class='btn btn-xs btn-info' title='Edit Data' href='" . base_url() . "home/editjabatan/$row[id]'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                        <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' href='" . base_url() . "home/deljabatan/$row[id]'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>														
                    </div>
                    <div class='hidden-md hidden-lg'>
                    <div class='inline pos-rel'>
                        <button class='btn btn-minier btn-primary dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                            <i class='ace-icon fa fa-cog icon-only bigger-110'></i>
                        </button>

                        <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>
                            <li>
                                <a class='btn btn-xs btn-info' title='Edit Data' href='" . base_url() . "home/editjabatan/$row[id]'><i class='ace-icon fa fa-pencil bigger-120'></i></a>
                                <a class='btn btn-xs btn-danger btn-hapus' title='Delete Data' href='" . base_url() . "home/deljabatan/$row[id]'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    </td>
                    </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            <!-- PAGE CONTENT BEGINS -->
        </div>
    </div>
</div>

<!-- Modal Form -->
<div id="modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php include "FrmRegSurat.php"; ?>
        </div>
    </div>
</div>