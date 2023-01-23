<?php view("layout.header") ?>

<br>
<br>
<br>
<div class="row">

    <div class="col-xl-6 col-lg-7 col-12 mx-auto">
        <h2><?php echo $article['title'] ?></h2>
        <img src="<?php echo $article['image'] ?>" alt="">

        <div class="row">
            <?php
            foreach ($details as $detail) {
            ?>
                <div class="col-12">
                    <p>
                        <?php echo  $detail['description'] ?>
                    </p>
                </div>
            <?php
            }
            ?>
        </div>

        <?php if(AUTH){ ?>
        <div class="form-wrapper">
            <form action="newDetails" method="post" class="theme-form-one" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
                    <textarea name="details" id="" class="form-control" rows="12"></textarea>
                </div> <!-- /.row -->
                <button class="theme-button-one" type="submit">ADD</button>
            </form>
        </div> <!-- /.form-wrapper -->
        <?php } ?>
        <br>
        <br>
        <br>
    </div> <!-- /.col- -->
</div>
<br>
<br>
<br>

<?php view("layout.footer"); ?>