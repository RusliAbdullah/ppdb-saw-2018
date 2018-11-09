

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
				    	$('#tgl_lahir').pickdate();
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