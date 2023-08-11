		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">BiPay</span>
						POSPBB Monitoring &copy; 2010-<?php echo date('Y'); ?>
					</span>

					&nbsp; &nbsp;
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="<?= base_url() ?>ace-master/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?= base_url() ?>ace-master/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
		</script>
		<script src="<?= base_url() ?>ace-master/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?= base_url() ?>ace-master/assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/ace.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/bootbox.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?= base_url() ?>ace-master/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/buttons.flash.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/buttons.html5.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/buttons.print.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/buttons.colVis.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/dataTables.select.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				var $sidebar = $('.sidebar').eq(0);
				if (!$sidebar.hasClass('h-sidebar')) return;

				$(document).on('settings.ace.top_menu', function(ev, event_name, fixed) {
					if (event_name !== 'sidebar_fixed') return;

					var sidebar = $sidebar.get(0);
					var $window = $(window);

					//return if sidebar is not fixed or in mobile view mode
					var sidebar_vars = $sidebar.ace_sidebar('vars');
					if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
						$sidebar.removeClass('lower-highlight');
						//restore original, default marginTop
						sidebar.style.marginTop = '';

						$window.off('scroll.ace.top_menu')
						return;
					}


					var done = false;
					$window.on('scroll.ace.top_menu', function(e) {

						var scroll = $window.scrollTop();
						scroll = parseInt(scroll / 4); //move the menu up 1px for every 4px of document scrolling
						if (scroll > 17) scroll = 17;


						if (scroll > 16) {
							if (!done) {
								$sidebar.addClass('lower-highlight');
								done = true;
							}
						} else {
							if (done) {
								$sidebar.removeClass('lower-highlight');
								done = false;
							}
						}

						sidebar.style['marginTop'] = (17 - scroll) + 'px';
					}).triggerHandler('scroll.ace.top_menu');

				}).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

				$(window).on('resize.ace.top_menu', function() {
					$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
				});


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
						bAutoWidth: false,
						"aoColumns": [{
								"bSortable": false
							},
							null, null, null, null, null,
							{
								"bSortable": false
							}
						],
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
							message: 'This print was produced using the Print button for DataTables'
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

			$("#bootbox-confirm").on(ace.click_event, function() {
				bootbox.confirm("<p align='justify'>Sistem Informasi Monitoring Tunggakan Pajak Bumi & Bangunan PBB-P2 Kota Baubau, merupakan Sistem Informasi yang dibangun dengan tujuan untuk mempermudah masyarakat wajib pajak secara umum di Kota Baubau dalam mendapatkan informasi tunggakan Pajak Bumi dan Bangunan PBB-P2. Dengan keterbukaan informasi ini diharap bisa meningkatkan kesadaran wajib pajak dalam hal Pembayaran Pajak Bumi dan Bangunan PBB-P2 di Kota Baubau</p>", function(result) {
					if (result) {
						//
					}
				});
			});
		</script>
		</body>

		</html>