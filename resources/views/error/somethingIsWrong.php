<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysite</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/animate/animate.css">
</head>

<body class="bg-warning">
    <div class="container ">
        <div class="row">
            <div class="w-100  d-flex justify-content-center align-content-center" style="height:500px;">
                <div class="card bg-white text-center h-auto w-50 align-self-center">
                    <div class="text-center align-self-center">
                        <h1 class="text-danger"><?php echo $data[0] ?></h1>
                        <p><?php echo $data[1] ?></p>
                        <a href="home" class="nav-link">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
