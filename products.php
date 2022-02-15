<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <title>Hello, world!</title>

    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #c60021;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Righteous";
        }

        .product-desc .product-head {
            margin-block: 1em;
        }

        .product-desc .product-cont {
            text-indent: 1em;
            text-align: justify;
            letter-spacing: 1px;
            word-spacing: 5px;
        }

        .product-desc .explore-prod a {
            margin-top: 2em;
            justify-content: right;
            display: flex;
        }

        .product-desc .explore-prod a {
            color: #C60021;
            text-decoration: none;
        }

        .product-img>img {
            width: 100%;
        }

        @media screen and (max-width: 990px) {

            .product-img>img {
                margin-top: 15px;
            }

            .product-body {
                margin-top: 32vh;
            }
        }

        .Product-bar {
            background: url(./Assets/Images/product-bar.png);
            color: white;
            width: 100%;
            position: fixed;
            top: 80px;
            left: 0;
            z-index: -1;
        }

        .Product-bar h2 {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: white;
            color: transparent;
            font-size: 60px;
            text-align: center;
            padding: 40px;
        }

        .product-body {
            margin-top: 30vh;
            background-color: #fff;
            padding-block: 1em;
        }
    </style>
</head>

<body>
    <?php
    include './Components/Nav.php';
    ?>
    <section>
        <div class="Product-bar">
            <h2>OUR PRODUCTS</h2>
        </div>
    </section>
    <main class="product-body">
        <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">NIRMALYA</h1>
                        <p class="product-cont">We are a
                            top-notch
                            solution provider
                            offering an
                            online web presence for your products or services. Our highly
                            skilled professionals bringing the right expertise and knowledge to create the platform that you
                            need to run
                            your business with flexibility and ability to scale as per your buisness changing need and it
                            also acts like
                            a
                            communicative medium between you and your customers.</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/Frame 90.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- section-2 -->
        <div class="" style="background-color: #DBFAE9;">
            <div class="container">
                <div class="row flex-md-row">
                    <div class=" col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/Frame 90 (1).png" alt="">
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">EMS - <span style="font-size: 25px;">Employee management system</span></h1>
                        <p class="product-cont">We are a
                            top-notch
                            solution provider
                            offering an
                            online web presence for your products or services. Our highly
                            skilled professionals bringing the right expertise and knowledge to create the platform that you
                            need to run
                            your business with flexibility and ability to scale as per your buisness changing need and it
                            also acts like
                            a
                            communicative medium between you and your customers.</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section 3 -->
        <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class=" col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">ATHARW</h1>
                        <p class="product-cont">We are a
                            top-notch
                            solution provider
                            offering an
                            online web presence for your products or services. Our highly
                            skilled professionals bringing the right expertise and knowledge to create the platform that you
                            need to run
                            your business with flexibility and ability to scale as per your buisness changing need and it
                            also acts like
                            a
                            communicative medium between you and your customers.</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/Frame 90.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- section-4 -->
        <div class="" style="background-color: #DBFAE9;">
            <div class="container">
                <div class="row flex-md-row">
                    <div class=" col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/Frame 90 (1).png" alt="">
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">C-CARE</h1>
                        <p class="product-cont">We are a
                            top-notch
                            solution provider
                            offering an
                            online web presence for your products or services. Our highly
                            skilled professionals bringing the right expertise and knowledge to create the platform that you
                            need to run
                            your business with flexibility and ability to scale as per your buisness changing need and it
                            also acts like
                            a
                            communicative medium between you and your customers.</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Dynamic footer -->
    <?php
    include './Components/footer.php'
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>