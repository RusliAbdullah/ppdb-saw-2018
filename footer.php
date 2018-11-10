

		<footer class="footer">
			<div class="container text-center">
				<p class="text-muted " style="margin-bottom: 0px;bottom:0px;display:box;position: static">Copyright &copy; 2018</p>
			</div>
		</footer>
			<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
			<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
   			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
   			<script src="assets/js/popper.min.js"></script>
    		<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    		<script src="assets/js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
   			 <script src="assets/js/material.min.js"></script>

			<!-- Bootstrap CSS -->
			<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="all"> -->
			<link href="assets/css/print.css" rel="stylesheet" media="print">
			<!-- jQuery -->
			<!-- <script src="assets/js/jquery.min.js"></script> -->
			<!-- Bootstrap JavaScript -->
			<!-- <script src="assets/js/bootstrap.min.js"></script> -->
			
			<script type="text/javascript">
				    $(document).ready(function() {	
				    	// $('#tgl_lahir').pickdate();
				    $('#tgl_lahir').pickdate({
					  // cancel           : 'Clear',
					  // closeOnCancel    : false,
					  // closeOnSelect    : true,
					  // container        : 'body',
					  // containerHidden  : 'body',
					  // firstDay         : 1,
					  format           : 'dd/mm/yyyy',
					  formatSubmit     : 'yyyy-mm-dd',
					  // hiddenPrefix     : 'prefix_',
					  // hiddenSuffix     : '_suffix',
					  // labelMonthNext   : 'Go to the next month',
					  // labelMonthPrev   : 'Go to the previous month',
					  // labelMonthSelect : 'Choose a month from the dropdown menu',
					  // labelYearSelect  : 'Choose a year from the dropdown menu',
					  // ok               : 'Close',
					  // onClose          : function () {
					  //   console.log('Datepicker closes')
					  // },
					  // onOpen           : function () {
					  //   console.log('Datepicker opens')
					  // },
					  selectMonths     : true,
					  selectYears      : 15,
					  today            : 'Today'
					});
				    $('button.print').click(function() {
					    window.print();
					    	return false;
					    });
				    });
			</script>
			<style type="text/css">
			.footer {
			    /*position: absolute;*/
			    bottom: 0px;
			    margin-bottom: 0px;
			    width: 100%;
			    height: 60px;
			    line-height: 60px;
			    background-color: #f5f5f5;
			}
			.footer > .container {

			    padding-right: 15px;
			    padding-left: 15px;

			}
			body{
			    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
			}
			
			@media print
				{    
				    .no-print, .no-print *
				    {
				        display: none !important;
				    }
				}
			</style>
		</body>
	</html>	