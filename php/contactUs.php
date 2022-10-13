<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" href="css/contactus.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div style="background-color:lightgoldenrodyellow;">
<!-- Detail -->
    <section class="row contact">
        <div class="col-12 col-lg-6 col-md-6 offset-lg-3 offset-md-3">
            <p class="h1 pt-5 text-black text-center">Contact Us</p>
            <p class="h5 mt-2 text-warning text-center">
                We use our deep expertise in healthcare, data and analytics, and <br>
                innovative technology to help our clients and members drive sustainable health economics and more personalized care. Reach us here to know more.
            </p>
        </div>

<!-- Form -->
        <div class="col-lg-5 col-md-5 offset-lg-3 offset-md-3 mb-4 width: 50rem; text-align:center;font-family: SofiaPro,Roboto,Arial;margin: -60px auto 60px;
    margin-top: -60px;
    margin-right: auto;
    margin-bottom: 60px;
    margin-left: auto;">
            <!-- connect with sql  connect.php-->
            <form action="connect.php" method="POST" class="card p-5 mt-5">
                <legend style="text-align: center;">Business Inquiry</legend>
                <!-- fullname -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text"  name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Enter Full Name" />
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email-Id" />
                </div>
                <!-- phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" />
                </div>
                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" type="text" id="message" placeholder="Enter Enquiry Message of minimum 50 words" rows="4"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">I Agree to send message.</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <footer class="footer">
    <div class="col-6">
      <ul class="footer-nav">
        <li><a href="home.php" class="icon">Home</a></li>
        <li><a href="aboutUs.php" class="icon">About Us</a></li>
        <li><a href="office.php" class="icon">Office</a></li>
        <li><a href="contactUs.php" class="icon">Contact Us</a></li>
      </ul>
    </div>
    
  </footer>
</body>
</html>