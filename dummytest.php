<style>
    /* navbar css=========================== */
    .navbar {
        background-color: #fff;
        height: 85px;
        z-index: 20;
        position: fixed;
        color: #000;
        top: 0;
        width: 100vw;
        box-shadow: 0 2px 10px #00000035;
    }

    .navbar .main {
        width: 90vw;
        margin: 0 auto;
        padding: 0;
    }

    /* .main>ul {
        justify-content: space-around;
        align-items: center;
        display: flex;
    } */

    /* 
    .main ul li {
        float: none;
        display: inline-block;
    } */

    /* .main ul li:nth-child(1) {
        float: left;
    }

    .main ul li:nth-child(2) {
        float: left;
    }

    .main ul li:nth-child(3) {
        float: left;
    }

    .main ul li:nth-child(4) {
        float: left;
    } */

    .main ul li a {
        /* display: block; */
        text-decoration: none;
        color: #000;
        /* padding: 20px 40px; */
        font-weight: 600;
    }

    /* .navbar .brand-logo {
        position: absolute;
        left: 47%;
        top: 1%;
    } */

    .navbar .brand-logo {
        width: 20%;
    }

    .right-nav-menu {
        float: right;
    }
</style>

<!-- <div class="navbar">
    <div class="brand-logo">
        <a href=""><img src="./Assets/Images/CODEKART.png" alt=""></a>
    </div>
    <nav class="main">
        <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./About.php">ABOUT</a></li>
            <li><a href="./service.php">SERVICES</a></li>
            <li><a href="./products.php">PRODUDCTS</a></li>
            <li><a href="./index.php"><img class="brand-logo" src="./Assets/Images/CODEKART.png" alt=""></a></li>
            <li><a href="./team.php">TEAM</a></li>
            <li><a href="./blog.php">BLOGS</a></li>
            <li><a href="./career.php">CAREER</a></li>
            <li><a href="#?">LOGIN</a></li>
        </ul>
    </nav>
</div> -->


<div class="navbar-boot">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- left-nav-menus -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

            </div>
            <!-- left-nav-menus -->
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- right-nav-menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

            </div>
            <!-- right-nav-menu -->
        </div>
    </nav>
    <!-- navbar -->
</div>