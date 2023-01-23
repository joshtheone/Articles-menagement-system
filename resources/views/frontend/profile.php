<?php view("layout.header") ?>

<br>
<br>
<br>
<div class="row">

    <div class="col-xl-6 col-lg-7 col-12 mx-auto">
        <h3>welcome <?php echo $name; ?></h3>
        <p><?php echo $email; ?></p>
    </div> <!-- /.col- -->
</div>
<div class="row">
    <div class="col-8 mx-auto">
        <div class="row mt-3">
            <div class="col-4 mx-auto card si-shadow-frame" >
                <a href="newArticle" class="d-flex justify-content-center"style="height: 100px;">
                    <p class=" align-self-center">
                        Create new Article
                    </p>
                </a>
            </div>
            <div class="col-4 mx-auto card si-shadow-frame" >
                <a href="logout" class="d-flex justify-content-center"style="height: 100px;">
                    <p class=" align-self-center">
                        logout
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<?php view("layout.footer");?>