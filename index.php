<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Website</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png" sizes="32x32">
    <!-- Bootsratp CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- This is Bootsratp Nav bar -->
    <nav id="navbar">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a href="./index.php"><img class="me-3" src="./news.jpg" alt="" style="width:42px;height:42px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" onclick="getNews('all')">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul id="webList" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li onclick="sendCategory(this.id)" id="0"><a class="dropdown-item"
                                        href="#">National</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="1"><a class="dropdown-item"
                                        href="#">Business</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="2"><a class="dropdown-item" href="#">Sport</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="3"><a class="dropdown-item" href="#">World</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="4"><a class="dropdown-item"
                                        href="#">Politics</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="5"><a class="dropdown-item"
                                        href="#">Technology</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="6"><a class="dropdown-item" href="#">Startup</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="7"><a class="dropdown-item"
                                        href="#">Entertainment</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="8"><a class="dropdown-item"
                                        href="#">Miscellaneous</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="9"><a class="dropdown-item" href="#">Hatke</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="10"><a class="dropdown-item"
                                        href="#">Science</a>
                                </li>
                                <li onclick="sendCategory(this.id)" id="11"><a class="dropdown-item"
                                        href="#">Automobile</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="user me-5">Welcome  <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: grey;">Logout</a> </p>
    <?php endif ?>
            </div>
        </nav>
    </nav>
    <!-- This is basic header of website -->
    <div class="head container">
        <h3>Top News <span class="badge text-bg-secondary">by Komanda 3</span></h3>
        <span class="line"></span>
    </div>
    <!-- This is div where all the News are Fetched from API -->
    <div id="newsBox" class="container"></div>
    <div id="spinner" class="mySpin spinner-border text-warning"></div>
    <!-- This is Basic Dark Fotter -->
    <footer id="sticky-footer" class="flex-shrink-0 py-2 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy;2022 &nbsp; Komanda 3</small>
        </div>
    </footer>


    <!-- Bootsratp js -->
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>

</body>

</html>



