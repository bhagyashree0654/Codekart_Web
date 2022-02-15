<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codekart Protfolio / Contact Us</title>
  <link rel="stylesheet" href="./Assets/CSS/contact.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div class="main">
    <div class="col-12">
      <div class="contact">
        <h1 class="contact_heading mb-0">Contact Us</h1>
        <h5 class="contact_message mb-0">Any question or remarks? Just write a message to us....</h5>
        <h5 class="contact_sub_heading mb-0"><a href="./index.php" style="color:#c60021; text-decoration: none">Home</a> / <span style="cursor: pointer;">Contact Us</span></h5>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12 p-2">
          <div class="leftcard p-4">
            <h1 class="leftcard_heading mb-2">Contact Information</h1>
            <p class="leftcard_message mb-4">Fill up the form and our Team will get back to you within 24
              hours.
            </p>
            <p class="detail"><i class="fa fa-phone icon"></i> +91 8917216200</p>
            <p class="detail"><i class="fa fa-envelope icon"></i> info@thecodekart@gmail.com</p>
            <div class="details">
              <i class="fa fa-map-marker icon"> </i> &emsp13;
              <div><span style="color: #FF1F00;"> Address Line1:</span>
                Plot No: 504/2382/2701, First Floor, Phase-II, Kanan Vihar,
                Patia, Bhubaneswar, Odisha 751024</div>
            </div>
            <p class="Address mt-2"><span style="color: #FF1F00;">Address Line2:</span> Plot No: 305, MBR-
              Signity, JP Nagar, 8th Phase, Bengaluru, Karnataka, 560076</p>
            <img class="round" src="./Assets/Images/round.png">
            <p class="my-5" style="font-size: 25px; color: #ffffff;">Say <span style="color: #87C700;">Hello!</span></p>
            <p class="mx-0"><i class="fa fa-facebook sos"></i>
              <i class="fa fa-twitter sos"></i>
              <i class="fa fa-linkedin sos"></i>
              <i class="fa fa-link sos"></i>
            </p>
          </div>

        </div>
        <div class="col-lg-8 col-sm-12">
          <div class="form p-4">
            <form class="row g-3" method="post" action="./dbProcess/contactUs.php">
              <div class="col-md-6 col-sm-12">
                <label class="form-label">First Name</label>
                <input required type="text" name="fname" class="form-control" minlength="3" pattern="[A-Za-z]{3,30}">
              </div>
              <div class="col-md-6 col-sm-12">
                <label class="form-label">Last Name</label>
                <input required type="text" name="lname" class="form-control" minlength="3" pattern="[A-Za-z]{3,30}">
              </div>
              <div class="col-md-6 col-sm-12">
                <label class="form-label">Email</label>
                <input required type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              </div>
              <div class="col-md-6 col-sm-12">
                <label class="form-label">Phone</label>
                <input required type="number" name="phone" class="form-control" minlength="10" maxlength="10">
              </div>
              <div class="col-md-12 col-sm-12">
                <label class="form-label">I would like to;</label>
                <select name="intrest" id="inputState" class="form-select">
                  <option value="say_Hello" selected>Say Hello</option>
                  <option value="Buisness_discuss">Buisness Discuss</option>
                  <option value="job_related">Job related</option>
                  <option value="Enquiry">Enquiry</option>
                  <option value="other">other</option>
                </select>
              </div>
              <div class="col-md-12 col-sm-12">
                <!-- <label class="form-label mb-5">Details of your message</label> -->
                <!-- <input required type="text" class="form-control" name="message"> -->
                <textarea class="form-control" placeholder="Message" id="message" name="message" required minlength="15" rows="3"></textarea>
              </div>

              <div class="col-md-12 col-sm-12" style="text-align: end;">
                <button type="submit" name="contact-btn" class="btn btn-primary px-5">Sign in</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

</body>

</html>