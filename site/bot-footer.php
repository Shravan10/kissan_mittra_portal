		<!-- Mainly scripts -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<!-- Custom and plugin javascript -->
		<script src="js/inspinia.js"></script>
		<script src="js/plugins/pace/pace.min.js"></script>
		<!-- iCheck -->
		<script src="js/plugins/iCheck/icheck.min.js"></script>
		<!-- Data picker -->
		<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
		<!-- Select2 -->
		<script src="js/plugins/select2/select2.full.min.js"></script>
		<!-- Switchery -->
		<script src="js/plugins/switchery/switchery.js"></script>
		<!-- Sweet alert -->
		<script src="js/plugins/sweetalert/sweetalert.min.js"></script>

		<script src="js/plugins/dataTables/datatables.min.js"></script>

		<!-- Input Mask-->
		<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

		<!-- Tags Input -->
		<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

		<!-- Typehead -->
		<script src="js/plugins/typehead/bootstrap3-typeahead.min.js"></script>
		<!-- Toastr script -->
		<script src="js/plugins/toastr/toastr.min.js"></script>
		<!-- FooTable -->
		<script src="js/plugins/footable/footable.all.min.js"></script>
		
		 <script>
			$(document).ready(function(){
				$('.dataTables-example').DataTable({
						pageLength: 50,
						responsive: true,
						dom: '<"html5buttons"B>lTfgitp',
						buttons: [
							{extend: 'copy'},
							{extend: 'csv'},
							{extend: 'excel'},
							{extend: 'pdf'},

							{extend: 'print',
							 customize: function (win){
								$(win.document.body).addClass('white-bg');
								$(win.document.body).css('font-size', '10px');

								$(win.document.body).find('table')
									.addClass('compact')
									.css('font-size', 'inherit');
								}
							}
						]
				});

				$('.footable').footable();
				
				$('.date').datepicker({
					todayBtn: "linked",
					keyboardNavigation: false,
					forceParse: false,
					calendarWeeks: true,
					autoclose: true,
					format : 'dd-mm-yyyy'
				});
				$('.month').datepicker({
					minViewMode: 1,
					keyboardNavigation: false,
					forceParse: false,
					forceParse: false,
					autoclose: true,
					todayHighlight: true,
					format : 'M-yyyy'
				});
				$('.i-checks').iCheck({
					checkboxClass: 'icheckbox_square-green',
					radioClass: 'iradio_square-green'
				});
				$(".select2").select2({
					placeholder: "-Select-",
					allowClear: true
				});

				$('.tagsinput').tagsinput({
					tagClass: 'label label-primary'
				});
			});
    </script>