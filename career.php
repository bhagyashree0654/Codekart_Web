<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codekart | Career</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="./Assets/CSS/career.css">
  <link rel="stylesheet" href="./Assets/CSS/Style.css">

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
  </style>
</head>

<body>

  <?php
  include "./Components/Nav.php";
  ?>

  <div class="career-section-0">
    <h1 class="center-text">Careers</h1>
  </div>

  <div class="career-wrapper">
    <section class="career-header">
      <div class="row">
        <div class="col-12">
          <small class="small-text">We do things differntly,</small>
        </div>
        <div class="col-12">
          <h1><span class="join">Join</span> our </h1>
        </div>
        <div class="col-12">
          <h1>Team to <span class="explore">Explore</span> more.</h1>
        </div>
      </div>
    </section>

    <section class="career-main">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="opening-heading">Opening Positions</h1>
          </div>
          <div class="col-12">
            <div class="tab-wrap">

              <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
              <label for="tab1"><span>Developer</span></label>

              <input type="radio" id="tab2" name="tabGroup1" class="tab">
              <label for="tab2"><span> Marketing</span></label>

              <input type="radio" id="tab3" name="tabGroup1" class="tab">
              <label for="tab3"><span> Analytics</span></label>

              <input type="radio" id="tab4" name="tabGroup1" class="tab">
              <label for="tab4"><span>HR Executive</span> </label>

              <input type="radio" id="tab5" name="tabGroup1" class="tab">
              <label for="tab5"><span>Internship</span> </label>

              <div class="tab__content">
                <!-- accordian -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>

                      <a class="button-apply ">Apply Now</a>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- accordian -->
              </div>

              <div class="tab__content">
                <!-- accordian -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="span-position"> <b class="bold-opening"> React Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>

                      <a class="button-apply ">Apply Now</a>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- accordian -->
              </div>

              <div class="tab__content">
                <!-- accordian -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>

                      <a class="button-apply ">Apply Now</a>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- accordian -->
              </div>
              <div class="tab__content">
                <!-- accordian -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>

                      <a class="button-apply ">Apply Now</a>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- accordian -->
              </div>

              <div class="tab__content">
                <!-- accordian -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>

                      <a class="button-apply ">Apply Now</a>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                  <hr class="career-hr">
                  <div class="accordion-item">
                    <h2 class="accordion-header d-flex" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="span-position"> <b class="bold-opening"> Android Developer</b><br />3 to 5yr. Exp,
                          Full-Time </span>
                      </button>
                      <a class="button-apply">Apply Now</a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- accordian -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- Dynamic footer -->
  <?php
  include './Components/footer.php'
  ?>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </script>
</body>

</html>