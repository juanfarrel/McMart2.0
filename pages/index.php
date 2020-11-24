<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- styles -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700"
          rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>McMart Apps</title>
</head>

<body>
<script>
    $(document).ready(function () {
        $("#load_ItemList").click(function () {
            $("#onload").load("ListItems.php #ItemOrder");
        });
        $("#load_ListBooks").click(function () {
            $("#onload").load("ListBooks.php ");
        });
        $("#load_Cart").click(function () {
            $("#onload").load("Orders.php ");
        });
        $("#load_BooksCRUD").click(function () {
            $("#onload").load("BooksCrud.php ");
        });
    });

</script>

<!-- Side navigation -->
<div class="sidenav">
    <a href="index.php">MC Mart</a>
</div>

<!-- Page content -->
<div class="main">
    <nav class="navbar navbar-expand-md navbar-light bg-light">

<!--        <div class="dropdown">-->
<!--            <button class="dropbtn"><i class='fas fa-bars'></i></button>-->
<!--            <div class="dropdown-content">-->
<!--                <a href="#">Link 1</a>-->
<!--                <a href="#">Link 2</a>-->
<!--                <a href="#">Link 3</a>-->
<!--                <a href="#">Link 4</a>-->
<!--                <a href="#">Link 5</a>-->
<!--            </div>-->
<!--        </div>-->

        <div class="navbar-nav ml-auto">
            <a href="../logout.php" class="nav-item nav-link" onclick=""><i class='fas fa-door-closed'></i></a>
        </div>

    </nav>
    <div class="Header">
        <h1>MC Mart Pre-order and View</h1>
    </div>

    <div>
        <div class="row ">
            <div class="menu-nav col-md-2 ">
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <button type="button" class="btn" id="load_ItemList">Items</button>
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="btn" onclick="" id="load_ListBooks">Books</button>
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="btn" onclick="" id="load_Cart">In-Cart</button>
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="btn" onclick="" id="load_BooksCRUD">Worker's Option</button>
                        </li>
                    </ul>


                </div>

            </div>
            <div class="functionTab col-md-9">
                <div id="onload">

                </div>

            </div>

        </div>
    </div>

</div>
</body>


</html>