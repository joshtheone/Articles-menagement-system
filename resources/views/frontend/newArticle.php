<?php view("layout.header") ?>

<br>
<br>
<br>
<div class="row">

    <div class="col-xl-6 col-lg-7 col-12 mx-auto">
        <h4>New Article</h4>
        <div class="form-wrapper">
            <form action="newArticle" method="post" class="theme-form-one" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12"><input type="text" name="title" placeholder="New article Title "></div>
                    <label for="">select Alticle cover Page</label>
                    <div class="col-md-12"><input type="file" name="image" placeholder="Image "></div>
                </div> <!-- /.row -->
                <button class="theme-button-one" type="submit">login</button>
            </form>
        </div> <!-- /.form-wrapper -->
        <br>
        <br>
        <br>
        <a href="signup" class="">Create new Account here!</a>
    </div> <!-- /.col- -->
</div>
<br>
<br>
<br>

<?php view("layout.footer");?>