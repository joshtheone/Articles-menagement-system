<?php view("layout.header") ?>

<br>
<br>
<br>
<div class="row">

    <div class="col-xl-6 col-lg-7 col-12 mx-auto">
        <h4>SIGNUP</h4>
        <br>
        <br>
        <br>
        <div class="form-wrapper">
            <form action="signup" method="post" class="theme-form-one">
                <div class="row">
                    <div class="col-md-12"><input type="text" name="name" placeholder="Full name "></div>
                    <div class="col-md-12"><input type="email" name="email" placeholder="email "></div>
                    <div class="col-md-12"><input type="password" name="password" placeholder="password "></div>
                
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

<?php view("layout.footer") ?>