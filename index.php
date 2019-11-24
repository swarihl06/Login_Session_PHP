<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card- bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Login Form PHP</h3>
                    </div>
                    <!-- Check Chua Nhap Vao Fill -->
                    <?php
                        if(@$_GET['Empty']==true){

                    ?>
                    <div class="alert-light text-danger text-center py-3">
                            <?php echo $_GET['Empty']?>
                    </div>
                    <?php
                        }
                    ?>
                    <!-- Check Sai Username and Password -->
                    <?php
                        if(@$_GET['InValid']==true){

                    ?>
                    <div class="alert-light text-danger text-center py-3">
                            <?php echo $_GET['InValid']?>
                    </div>
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="username" placeholder="User Name" class="form-control mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <button class="btn btn-success mt-3" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>