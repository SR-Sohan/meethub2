<?php
require __DIR__ . '/vendor/autoload.php';
$page = "Registration";
?>
<?php require __DIR__ . '/components/header.php'; ?>
</head>

<body>

    <div class="container">
        <form class="shadow-lg user-form" action="" method="post">
            <h1>Registration</h1>
            <hr>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="name" placeholder="name@example.com">
                <label for="name">Your Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="number" placeholder="name@example.com">
                <label for="number">Mobile Number</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <input class="btn btn-outline-danger mt-3" type="submit" value="Sing Up">
        </form>
    </div>

    <!-- footer component  -->
    <?php require __DIR__ . '/components/footer.php'; ?>