<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/index.css">
  <!-- <link rel="stylesheet" href="../css/Enquiry.css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
</head>

<body>
  <!-- include navbar -->
  <?php include '../clint/navbar.php' ?>
  <!-- page1 -->
  <div id="main">
    <div class="pg1">
      <div style="display: flex; flex-direction: column; align-items: center;">
        <h2><span>WELCOME</span> <br>BALAJI NAMKEEN</h2>
        <div class="s_img" style="display: flex; gap: 18px; margin-top: 18px;">
          <img src="../assest/bal.jpeg" alt="Small Image 1"
            style="width:80px; height:80px; border-radius:14px; box-shadow:0 2px 8px rgba(0,0,0,0.08); object-fit:cover;">

          <img src="../assest/about.jpg" alt="Small Image 2"
            style="width:80px; height:80px; border-radius:14px; box-shadow:0 2px 8px rgba(0,0,0,0.08); object-fit:cover;">
        </div>
      </div>
    </div>

    <!-- slider images bootstrap -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../bLaji/Group_1000002420.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../bLaji/Homepage_Banner_1.5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../bLaji/Category-Shop_All-Default_0485a1e5-1bed-4dd6-912e-eb2450d310ca.jpg" class="d-block w-100"
            alt="...">
        </div>
      </div>
    </div>

    <!-- about page -->
    <div class="about">
      <h1>About</h1>
      <p><span>Balaji Wafers</span> is an Indian snack food company, primarily known for its potato wafers and other
        savory snacks like namkeen. Founded in the 1970s by the Virani brothers, it has grown to become a major player
        in
        the Indian snack market, particularly in Gujarat. Balaji Wafers is recognized for its wide range of products,
        strong distribution network, and focus on accessible and affordable snacks.</p>
    </div>

    <!-- line scrolling -->
    <div id="moving-text">
      <div class="con">
        <h1>WAFER</h1>
        <div id="gola"></div>
        <h1>NAMKEEN</h1>
        <div id="gola"></div>
        <h1>WESTERN SNACKS</h1>
        <div id="gola"></div>
      </div>
      <div class="con">
        <h1>WAFER</h1>
        <div id="gola"></div>
        <h1>NAMKEEN</h1>
        <div id="gola"></div>
        <h1>WESTERN SNACKS</h1>
        <div id="gola"></div>
      </div>
      <div class="con">
        <h1>WAFER</h1>
        <div id="gola"></div>
        <h1>NAMKEEN</h1>
        <div id="gola"></div>
        <h1>WESTERN SNACKS</h1>
        <div id="gola"></div>
      </div>
    </div>

    <!-- Enquiry Form  -->
    <div class="enquiry-section">
      <h2 class="text-center mb-4">Enquiry Form</h2>
      <div class="container">
        <form action="enquiry_submit.php" method="POST" class="row g-3  p-4 rounded shadow" id="Enquiry">
          <div class="col-md-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required />
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required />
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required />
          </div>

          <div class="col-md-6">
            <label for="product" class="form-label">Product of Interest</label>
            <select class="form-select" id="product" name="product">
              <option selected>Select Product</option>
              <option value="Chana Jor Garam">Chana Jor Garam</option>
              <option value="Wafers">Wafers</option>
              <option value="Namkeen Mix">Namkeen Mix</option>
            </select>
          </div>
          <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-warning px-5" id="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- include footer -->
  <?php include '../clint/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
  <!-- script link  -->
  <script src="../js/script.js"></script>
  <!-- bootstrap link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <!-- gsap link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="../js/gsap.js"></script>
</body>

</html>