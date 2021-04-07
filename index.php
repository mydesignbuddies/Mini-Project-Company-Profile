<!-- PHP -->
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'homepage.php';
}
?>

<!DOCTYPE html>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- My CSS -->
<link rel="stylesheet" href="css/style.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Company Profile</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">We Create Work that is <span>Strategically</span><br> and
                <span>Focused</span> with <span>Beautiful</span> Designed
            </h1>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-link active" href="?page=homepage.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="?page=gallery.php">Gallery</a>
                <a class="nav-link" href="?page=guestbook.php">Guest Book</a>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="btn-search" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="row">
        <div class="leftcolumn">
            <?php
            include $page;
            ?>
        </div>
        <div class="rightcolumn">
            <div class="sidebar">
                <h2>About Me</h2>
                <div class=""><img style="width: 300px;" src="images/user.png" alt="user"></div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="sidebar">
                <h3>Popular Post</h3>
                <div class="fa fa-file"><a href=""> Anniversary Company for 21st</a></div><br>
                <div class=""></div><br>
                <div class=""></div>
                <div class="sidebarOne">
                    <h3>Follow Me</h3>
                    <p>Some text..</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row footer">
        <div class="col text-center">
            <p>&copy; 2021 All Rights Reserved by Devi Rukmana B</p>
        </div>
    </div>



     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>