 <div class="footer">
     <div class="footer-inner">
         <div class="footer-content">
             <span class="bigger-120">
                 <span class="blue bolder">Ace</span>
                 Application &copy; 2013-<?php echo date('Y'); ?>
             </span>

             &nbsp; &nbsp;
             <span class="action-buttons">
                 <a href="#">
                     <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                 </a>

                 <a href="#">
                     <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                 </a>

                 <a href="#">
                     <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                 </a>
             </span>
         </div>
     </div>
 </div>

 <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
     <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
 </a>
 </div><!-- /.main-container -->

 <!-- basic scripts -->

 <!--[if !IE]> -->
 <script src="<?= base_url() ?>assets/js/jquery-2.1.4.min.js"></script>

 <!-- <![endif]-->

 <!--[if IE]>
<script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
 <script type="text/javascript">
     if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
 </script>
 <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

 <!-- page specific plugin scripts -->
 <!-- Dashboard -->
 <script src="<?= base_url() ?>assets/js/jquery-ui.custom.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.easypiechart.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.sparkline.index.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.flot.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.flot.pie.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.flot.resize.min.js"></script>
 <!-- Dashboard -->

 <!-- ace scripts -->
 <script src="<?= base_url() ?>assets/js/ace-elements.min.js"></script>
 <script src="<?= base_url() ?>assets/js/ace.min.js"></script>

 <!-- page specific plugin scripts -->
 <!-- page specific plugin scripts -->
 <script src="<?= base_url() ?>assets/js/jquery-ui.custom.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.gritter.min.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap-timepicker.min.js"></script>
 <script src="<?= base_url() ?>assets/js/chosen.jquery.min.js"></script>
 <script src="<?= base_url() ?>assets/js/select2.min.js"></script>

 <script src="<?= base_url() ?>assets/js/spinbox.min.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap-editable.min.js"></script>
 <script src="<?= base_url() ?>assets/js/ace-editable.min.js"></script>

 <!-- DataTable -->
 <script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
 <script src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
 <script src="<?= base_url() ?>assets/js/buttons.flash.min.js"></script>
 <script src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
 <script src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>
 <script src="<?= base_url() ?>assets/js/buttons.colVis.min.js"></script>
 <script src="<?= base_url() ?>assets/js/dataTables.select.min.js"></script>

 <script src="<?= base_url() ?>assets/js/dataTables.responsive.min.js"></script>

 <!-- DropDown -->
 <script type="text/javascript">
     $(document).ready(function() {
         $('#provinsi').change(function() {
             var provinsi_id = $('#provinsi').val();
             if (provinsi_id != '') {
                 $.ajax({
                     url: "<?php echo base_url(); ?>home/getdati2",
                     method: "POST",
                     data: {
                         provinsi_id: provinsi_id
                     },
                     success: function(data) {
                         $('#dati2').html(data);
                     }
                 });
             } else {
                 $('#dati2').html('<option value="">Select Dati2</option>');
             }
         });

         $('#dati2').change(function() {
             var dati2_id = $('#dati2').val();
             if (dati2_id != '') {
                 $.ajax({
                     url: "<?php echo base_url(); ?>home/getkec",
                     method: "POST",
                     data: {
                         dati2_id: dati2_id
                     },
                     success: function(data) {
                         $('#kecamatan').html(data);
                     }
                 });
             } else {
                 $('#kecamatan').html('<option value="">Select Kecamatan</option>');
             }
         });

         $('#kecamatan').change(function() {
             var kecamatan_id = $('#kecamatan').val();
             if (kecamatan_id != '') {
                 $.ajax({
                     url: "<?php echo base_url(); ?>home/getkel",
                     method: "POST",
                     data: {
                         kecamatan_id: kecamatan_id
                     },
                     success: function(data) {
                         $('#kelurahan').html(data);
                     }
                 });
             } else {
                 $('#kelurahan').html('<option value="">Select Kelurahan</option>');
             }
         });

         if (!ace.vars['touch']) {
             $('.chosen-select').chosen({
                 allow_single_deselect: true
             });
             //resize the chosen on window resize

             $(window)
                 .off('resize.chosen')
                 .on('resize.chosen', function() {
                     $('.chosen-select').each(function() {
                         var $this = $(this);
                         $this.next().css({
                             'width': $this.parent().width()
                         });
                     })
                 }).trigger('resize.chosen');
             //resize chosen on sidebar collapse/expand
             $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                 if (event_name != 'sidebar_collapsed') return;
                 $('.chosen-select').each(function() {
                     var $this = $(this);
                     $this.next().css({
                         'width': $this.parent().width()
                     });
                 })
             });
         }

         $('#timepicker1').timepicker({
             minuteStep: 1,
             showSeconds: true,
             showMeridian: false,
             disableFocus: true,
             icons: {
                 up: 'fa fa-chevron-up',
                 down: 'fa fa-chevron-down'
             }
         }).on('focus', function() {
             $('#timepicker1').timepicker('showWidget');
         }).next().on(ace.click_event, function() {
             $(this).prev().focus();
         });

         $(".add-more").click(function() {
             var html = $(".copy").html();
             $(".after-add-more").after(html);
         });

         // saat tombol remove dklik control group akan dihapus 
         $(document).on("click", ".btn-remove", function(e) {
             e.preventDefault();
             $(this).parents(".control-group").remove();
         });

         //select2
         $('.select2').css('width', '430px').select2({
             allowClear: true
         })
     });

     $('.cg-remove').on('click', function(e) {
         e.preventDefault();
         var id = $(this).data('id');
         $('.control-group' + id).remove();
     })


     function stsberkas(idberkas) {
         var no_berkas = $('#stsberkas' + idberkas).val();
         if (no_berkas == 0) {
             $('#stsberkas' + idberkas).val(1);
         } else {
             $('#stsberkas' + idberkas).val(0);
         }
     }

     $('.sftcopy').on('click', function() {
         var dataid = $(this).data('id');
         var scval = $('#scval' + dataid).val();

         if (scval == 0) {
             $('#scval' + dataid).val(1);
         } else {
             $('#scval' + dataid).val(0);
         }
     })

     $('.btn-cancel').on('click', function() {
         window.history.go(-1);
     })

     $("#pstb_in").submit(function() {
         if (confirm("Apakah anda yakin ?")) {
             return true;
         } else {
             return false;
         }
     });

     $('.sugaspar-action').change(function() {
         var optionVal = $(this).children("option:selected").val();
         const myVal = optionVal.split('|');
         if (myVal[0] == 0) {
             return false;
         } else if (myVal[0] == 5) {
             var del = confirm("Apakah anda yakin ?");
             if (del) {
                 window.location.href = myVal[1];
             } else {
                 return false;
             }
         } else {
             window.location.href = myVal[1];
         }
     });
 </script>

 <script type="text/javascript">
     //datepicker plugin
     //link
     $('.date-picker').datepicker({
             autoclose: true,
             todayHighlight: true
         })
         //show datepicker when clicking on the icon
         .next().on(ace.click_event, function() {
             $(this).prev().focus();
         });
 </script>

 <!-- inline scripts related to this page -->
 <script type="text/javascript">
     jQuery(function($) {
         //initiate dataTables plugin
         var myTable =
             $('#dynamic-table')
             //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
             .DataTable({
                 rowReorder: {
                     selector: 'td:nth-child(2)'
                 },
                 bAutoWidth: false,
                 responsive: true,
                 "aaSorting": [],
                 select: {
                     style: 'multi'
                 }
             });

         $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

         new $.fn.dataTable.Buttons(myTable, {
             buttons: [{
                     "extend": "colvis",
                     "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                     "className": "btn btn-white btn-primary btn-bold",
                     columns: ':not(:first):not(:last)'
                 },
                 {
                     "extend": "copy",
                     "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                     "className": "btn btn-white btn-primary btn-bold"
                 },
                 {
                     "extend": "csv",
                     "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                     "className": "btn btn-white btn-primary btn-bold"
                 },
                 {
                     "extend": "excel",
                     "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                     "className": "btn btn-white btn-primary btn-bold"
                 },
                 {
                     "extend": "pdf",
                     "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                     "className": "btn btn-white btn-primary btn-bold"
                 },
                 {
                     "extend": "print",
                     "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                     "className": "btn btn-white btn-primary btn-bold",
                     autoPrint: false,
                     message: "<?php echo "HELLO"; ?>"
                 }
             ]
         });
         myTable.buttons().container().appendTo($('.tableTools-container'));

         //style the message box
         var defaultCopyAction = myTable.button(1).action();
         myTable.button(1).action(function(e, dt, button, config) {
             defaultCopyAction(e, dt, button, config);
             $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
         });


         var defaultColvisAction = myTable.button(0).action();
         myTable.button(0).action(function(e, dt, button, config) {

             defaultColvisAction(e, dt, button, config);


             if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                 $('.dt-button-collection')
                     .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                     .find('a').attr('href', '#').wrap("<li />")
             }
             $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
         });

         ////

         setTimeout(function() {
             $($('.tableTools-container')).find('a.dt-button').each(function() {
                 var div = $(this).find(' > div').first();
                 if (div.length == 1) div.tooltip({
                     container: 'body',
                     title: div.parent().text()
                 });
                 else $(this).tooltip({
                     container: 'body',
                     title: $(this).text()
                 });
             });
         }, 500);

         myTable.on('select', function(e, dt, type, index) {
             if (type === 'row') {
                 $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
             }
         });
         myTable.on('deselect', function(e, dt, type, index) {
             if (type === 'row') {
                 $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
             }
         });

         /////////////////////////////////
         //table checkboxes
         $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

         //select/deselect all rows according to table header checkbox
         $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
             var th_checked = this.checked; //checkbox inside "TH" table header

             $('#dynamic-table').find('tbody > tr').each(function() {
                 var row = this;
                 if (th_checked) myTable.row(row).select();
                 else myTable.row(row).deselect();
             });
         });

         //select/deselect a row when the checkbox is checked/unchecked
         $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
             var row = $(this).closest('tr').get(0);
             if (this.checked) myTable.row(row).deselect();
             else myTable.row(row).select();
         });

         $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
             e.stopImmediatePropagation();
             e.stopPropagation();
             e.preventDefault();
         });

         //And for the first simple table, which doesn't have TableTools or dataTables
         //select/deselect all rows according to table header checkbox
         var active_class = 'active';
         $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
             var th_checked = this.checked; //checkbox inside "TH" table header

             $(this).closest('table').find('tbody > tr').each(function() {
                 var row = this;
                 if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                 else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
             });
         });

         //select/deselect a row when the checkbox is checked/unchecked
         $('#simple-table').on('click', 'td input[type=checkbox]', function() {
             var $row = $(this).closest('tr');
             if ($row.is('.detail-row ')) return;
             if (this.checked) $row.addClass(active_class);
             else $row.removeClass(active_class);
         });

         /********************************/
         //add tooltip for small view action buttons in dropdown menu
         $('[data-rel="tooltip"]').tooltip({
             placement: tooltip_placement
         });

         //tooltip placement on right or left
         function tooltip_placement(context, source) {
             var $source = $(source);
             var $parent = $source.closest('table')
             var off1 = $parent.offset();
             var w1 = $parent.width();

             var off2 = $source.offset();
             //var w2 = $source.width();

             if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
             return 'left';
         }

         /***************/
         $('.show-details-btn').on('click', function(e) {
             e.preventDefault();
             $(this).closest('tr').next().toggleClass('open');
             $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
         });
         /***************/

     })
 </script>
 <script type="text/javascript">
     $('#id-input-file-1 , #id-input-file-2').ace_file_input({
         no_file: 'No File ...',
         btn_choose: 'Choose',
         btn_change: 'Change',
         droppable: false,
         onchange: null,
         thumbnail: false //| true | large
         //whitelist:'gif|png|jpg|jpeg'
         //blacklist:'exe|php'
         //onchange:''
         //
     });
 </script>

 <script language="javascript" type="text/javascript">
     function checkField(formObj, fldObj) {
         for (i = 0; i < formObj.length; i++)
             if (formObj[i] == fldObj)
                 if (fldObj.value.length == parseInt(fldObj.maxLength)) {
                     if (i < formObj.length - 1)
                         fldObj = formObj[++i];
                     fldObj.focus();
                 }
     }
 </script>
 <!-- Kapital Font -->
 <script language="javascript" type="text/javascript">
     function kapital(obj) {
         obj.value = obj.value.toUpperCase();
     }
 </script>
 <!-- Just Number Only -->
 <script language="javascript" type="text/javascript">
     function angka(e) {
         if (!/^[0-9]+$/.test(e.value)) {
             e.value = e.value.substring(0, e.value.length - 1);
         }
     }
 </script>
 </body>

 </html>