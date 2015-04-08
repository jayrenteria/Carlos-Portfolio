<?php get_header(); ?>

<div class="container-fluid" id="contact_section">
	<div class="row">
		<div class="col-md-12">
			<h2>Contact me</h2>
		</div>
	</div><!-- end row -->
</div><!-- end container-fluid -->

<div id="contact_form">
	<form class="form-horizontal" role="form" id="controller" action="<?php echo get_template_directory_uri();?>/index-controller.php" method="post">
		<div class="container-fluid">

			<div class="row">
				<div class="form-group mb0 mt40">
					<div class="col-sm-4">
						<input class="form-control" id="name" name="name" type="text" placeholder="Name">
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="email" name="email" type="text" placeholder="Email">
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="website" name="website" type="text" placeholder="Website">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group mt20">
						<textarea class="form-control" name="message" id="message" rows="10" placeholder="Message"></textarea>
					</div>
				</div>
			</div>

			<button type="submit" class="form-submit-btn btn btn-default">Send</button>

			<div class="row">
				<div class="form-group output mt20">
					<p id="outputArea"></p>
				</div>
			</div><!-- end row -->

		</div><!-- end container-fluid -->
	</form>
</div><!-- end contact_section -->

<?php get_footer(); ?>