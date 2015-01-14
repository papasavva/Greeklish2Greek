<?php
// let designer have full control of the layout
$this->load->view ( 'header' );
?>

<div class="container">
	<div class="row">


		<div class="col-sm-6 col-md-6">
			<div class="col-sm-1 col-md-1"></div>
			<div class="col-sm-10 col-md-10">
				<div class="row text-center">
					<h3>Write Greeklish here</h3>
					<textarea id="greeklish_text" class="form-control" rows="14"></textarea>
				</div>
			</div>
			<div class="col-sm-1 col-md-1"></div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="col-sm-1 col-md-1"></div>
			<div class="col-sm-10 col-md-10">
				<div class="row text-center">
					<h3>Write Greek here</h3>
					<textarea id="greek_text" class="form-control" rows="14"></textarea>
				</div>
			</div>
			<div class="col-sm-1 col-md-1"></div>
		</div>



	</div>
</div>

<?php
// let designer have full control of the layout
 $this->load->view ( 'footer' );
?>