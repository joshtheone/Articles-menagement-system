<?php view("layout.header") ?>
<!--
			=====================================================
				Google Map
			=====================================================
			-->
<!-- Google Map -->
<?php
if (isset($_GET['success'])) {
?>
<br><br><br><br>
	<div class="row">
		<div class="col-8 mx-auto">
			<div class="alert alert-success">
				<strong>Successfull</strong>
				<p>
					<?php echo $_GET['success'] ?>
				</p>
			</div>
		</div>
	</div>
<?php
}
?>
<!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
<div class="contact-us-section section-spacing">
	<div class="container">
		<div class="theme-title-one">
			<h2>GET IN TOUCH</h2>
			<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
		</div> <!-- /.theme-title-one -->
		<div class="clearfix main-content no-gutters row">
			<div class="col-lg-5 col-12">
				<div class="img-box"></div>
			</div>
			<div class="col-lg-7 col-12">
				<div class="form-wrapper">
					<form action="sendMessage" method="post">
						<div class="row">
							<div class="col-sm-6 col-12"><input class="form-control my-3" type="text" placeholder="Name *" name="name"></div>
							<div class="col-sm-6 col-12"><input class="form-control my-3" type="text" placeholder="Phone *" name="phone"></div>
							<div class="col-sm-6 col-12"><input class="form-control my-3" type="email" placeholder="Email *" name="email"></div>
							<div class="col-sm-6 col-12"><input class="form-control my-3" type="text" placeholder="web *" name="web"></div>
							<div class="col-12"><textarea placeholder="Message" class="form-control my-3" name="message"></textarea></div>
						</div> <!-- /.row -->
						<button class="theme-button-one" type="submit">SEND MESSAGE</button>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.col- -->
		</div> <!-- /.main-content -->
	</div> <!-- /.container -->
</div> <!-- /.contact-us-section -->


<?php view("layout.footer") ?>