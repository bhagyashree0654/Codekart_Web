<style>
    .navbar .navbar-nav .nav-link {
        color: #000000;
        font-size: 1.1em;
    }

    .navbar .navbar-nav .nav-link:hover {
        color: #808080;
    }

    .navbar-logo-centered .navbar-nav .nav-link {
        padding: .5em 1em;
    }

    .brand-logo>img {
        width: 150px;
        margin-inline: 100px;
    }

    .navbar-brand>img {
        width: 120px;
        margin-left: 15px;
    }

    .navbar-menus>.nav-item {
        padding-inline: 20px;
        padding-top: 10px;
        /* font-weight: 600; */
        position: relative;
        display: inline-block;
        transition: 0.5s;
    }

    .navbar-menus>.nav-item>.nav-link:hover {
        color: #C60021;
    }

    .navbar-menus>.nav-item>.nav-link:hover::before {
        content: "...";
        position: absolute;
        bottom: 5px;
        color: #C60021;
        font-size: 40px;
        left: calc(50% - 15px);
    }


    .navbar-light .navbar-toggler {
        margin-right: 15px;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none;
        box-shadow: none;
    }

    @media screen and (max-width: 1000px) {
        .navbar-menus>.nav-item {
            padding-inline: 20px;
            padding-top: 0px;
        }

        .navbar-menus>.nav-item>.nav-link:hover::before {
            content: "";
            position: absolute;
            bottom: 0;
            color: #C60021;
            font-size: 40px;
            left: calc(50% - 15px);
        }
    }



    /* animated toggle */
    .menu {
        background-color: transparent;
        border: none;
        cursor: pointer;
        display: flex;
        padding: 0;
        width: 50px;
        height: 50px;
        transform: translateY(-25px);
    }

    .line {
        fill: none;
        stroke: black;
        stroke-width: 6;
        transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
            stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .line1 {
        stroke-dasharray: 60 207;
        stroke-width: 6;
    }

    .line2 {
        stroke-dasharray: 60 60;
        stroke-width: 6;
    }

    .line3 {
        stroke-dasharray: 60 207;
        stroke-width: 6;
    }

    .opened .line1 {
        stroke-dasharray: 90 207;
        stroke-dashoffset: -134;
        stroke-width: 6;
    }

    .opened .line2 {
        stroke-dasharray: 1 60;
        stroke-dashoffset: -30;
        stroke-width: 6;
    }

    .opened .line3 {
        stroke-dasharray: 90 207;
        stroke-dashoffset: -134;
        stroke-width: 6;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow-lg">
    <a class="navbar-brand d-lg-none" href="#"><img src="./Assets/Images/CODEKART.png"></a>
    <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarToggler7" aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">

        <svg width="100" height="100" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>
    <div class="collapse navbar-collapse" id="myNavbarToggler7">
        <ul class="navbar-nav mx-auto navbar-menus">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./About.php">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./products.php">PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./service.php">SERVICES</a>
            </li>
            <a class="d-none d-lg-block brand-logo" href="#"><img src="./Assets/Images/CODEKART.png"></a>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./team.php">TEAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./blog.php">BLOGS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./career.php">CAREER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./contact.php">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>