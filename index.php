<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="images/Google-Drive.jpg" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="process.php" method="post" enctype="multipart/form-data">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3"><b>Automation Filing to Cloud Storage</b></p>
              <button type="button" class="btn btn-primary btn-floating mx-1">

              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">

              </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Insert Below</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="test" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a folder name" required />
              <label class="form-label" for="form3Example3">Folder Name</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="file" name="kiw" id="form3Example4" class="form-control form-control-lg" />
              <label class="form-label" for="form3Example4">Your File</label>
            </div>
            <div class="d-flex justify-content-between align-items-center">
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" name="submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Yow!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3">
        <center>Raka Putra Eshardiansyah. Copyright © 2020. All rights reserved.</center>
      </div>
      <!-- Copyright -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="bi bi-linkedin"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>