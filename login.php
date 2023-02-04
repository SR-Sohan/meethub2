<?php
require __DIR__ . '/vendor/autoload.php';
$page = "Login";
?>
<?php require __DIR__ . '/components/header.php';?>
</head>
<body>

<div class="container">
        <form class="shadow-lg" action="" method="post">
            <h1>Login</h1>
            <hr>
         
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
           
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <input class="btn btn-outline-danger mt-3" type="submit" value="Sing In">
        </form>
    </div>


<?php require __DIR__ . '/components/footer.php';?>
    
