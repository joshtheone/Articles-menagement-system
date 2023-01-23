<?php

use App\Models\articleDetails;

 view("layout.header") ?>

<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
<div class="theme-inner-banner section-spacing">
	<div class="overlay">
		<div class="container">
			<h2>All articles</h2>
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.theme-inner-banner -->


<!-- 
			=============================================
				Our Blog
			============================================== 
			-->
<div class="blog-grid section-spacing">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-8 col-12 our-blog">
				<div class="post-wrapper row">

					<?php

					foreach ($article as $articles) {
					?>
						<div class="col-md-6 col-12">
							<div class="single-blog">
								<div class="image-box">
									<img src="<?php echo $articles['image'] ?>" alt="">
									<div class="overlay"><a href="#" class="date"><?php echo $articles['created_at'] ?></a></div>
								</div> <!-- /.image-box -->
								<div class="post-meta">
									<h5 class="title"><a href="blog-details.html"><?php echo $articles['title'] ?></a></h5>
									<p>
										<?php
											echo (new articleDetails)->where(['articleId'=>$articles['id']])->get()[0]['description'];
										?>
								</p>
									<a href="articleDetails?id=<?php echo $articles['id'] ?>" class="read-more">READ MORE</a>
								</div> <!-- /.post-meta -->
							</div> <!-- /.single-blog -->

						</div> <!-- /.col- -->
					<?php
					}
					?>


				</div> <!-- /.post-wrapper -->
				<div class="theme-pagination">
					<ul>
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- ===================== Blog Sidebar ==================== -->
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
				<div class="sidebar-container sidebar-search">
					<form action="#">
						<input type="text" placeholder="Search...">
						<button><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div> <!-- /.sidebar-search -->
				<div class="sidebar-container sidebar-categories">
					<h5 class="title">Categories</h5>
					<ul>
						<li><a href="#">Travel and Aviation</a></li>
						<li><a href="#">Business Services</a></li>
						<li><a href="#">Consumer Products</a></li>
						<li><a href="#">Financial Services</a></li>
						<li><a href="#">Software Research</a></li>
					</ul>
				</div> <!-- /.sidebar-categories -->
				<div class="sidebar-container sidebar-recent-post">
					<h5 class="title">Recent Posts</h5>
					<ul>
						<li class="clearfix">
							<img src="images/blog/6.jpg" alt="" class="float-left">
							<div class="post float-left">
								<a href="blog-details.html">World don't move to beat of just one drum.</a>
								<div class="date">5 minutes ago</div>
							</div>
						</li>
						<li class="clearfix">
							<img src="images/blog/7.jpg" alt="" class="float-left">
							<div class="post float-left">
								<a href="blog-details.html">Be right for you may not be right for some.</a>
								<div class="date">2 days ago</div>
							</div>
						</li>
						<li class="clearfix">
							<img src="images/blog/8.jpg" alt="" class="float-left">
							<div class="post float-left">
								<a href="blog-details.html">World don't move to beat of just one drum.</a>
								<div class="date">1 month ago</div>
							</div>
						</li>
					</ul>
				</div> <!-- /.sidebar-recent-post -->
				<div class="sidebar-container sidebar-archives">
					<h5 class="title">Archives</h5>
					<ul>
						<li><a href="#">January 2018</a></li>
						<li><a href="#">February 2018</a></li>
						<li><a href="#">March 2018</a></li>
					</ul>
				</div> <!-- /.sidebar-archives -->
				<div class="sidebar-tags">
					<h5 class="title">tags</h5>
					<ul class="clearfix">
						<li><a href="#">Business</a></li>
						<li><a href="#">Consulting</a></li>
						<li><a href="#">Sales</a></li>
						<li><a href="#">Startup</a></li>
						<li class="active"><a href="#">Marketing</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Financial</a></li>
						<li><a href="#">Research</a></li>
					</ul>
				</div> <!-- /.sidebar-tags -->
			</div> <!-- /.col- -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.blog-inner-page -->

<?php view("layout.footer") ?>