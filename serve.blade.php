<!doctype html>
<html lang="en">

<head>
    <style>
        /* google fonts link */

@import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}

.theme-text {
  color: #474af0;
}

.card-img-top {
  height: 200px;
  width: 100%;
}
.card {
  z-index: 1;
  overflow: hidden;
  transition: 0.5s;
}
.card:hover {
  color: white;
}
.card::before {
  content: "";
  position: absolute;
  left: -100%;
  top: 0%;
  background: #474af0;
  width: 100%;
  height: 100%;
  transition: 0.5s;
  z-index: -1;
}
.card:hover::before {
  left: 0%;
  color: white;
}
.container-fluid {
  background-image: url("blob-scene-haikei.svg");
  background-position: center;
  background-size: cover;
}
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Linking CSS File index.css -->

    <link rel="stylesheet" href="index.css">

    <title>Our Services</title>
</head>

<body>

    <div class="container-fluid">
        <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
        <hr class="mx-auto mb-5 w-25">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="https://raw.githubusercontent.com/swapnilcodes26/bootstrap-purple-cards/fe80d5ff60c25b84a2473d8265822f85fd1ce8b3/images/web.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Web Development</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="https://raw.githubusercontent.com/swapnilcodes26/bootstrap-purple-cards/fe80d5ff60c25b84a2473d8265822f85fd1ce8b3/images/app.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">App Development</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="https://raw.githubusercontent.com/swapnilcodes26/bootstrap-purple-cards/fe80d5ff60c25b84a2473d8265822f85fd1ce8b3/images/dm.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Digital Marketing</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="https://raw.githubusercontent.com/swapnilcodes26/bootstrap-purple-cards/fe80d5ff60c25b84a2473d8265822f85fd1ce8b3/images/seo.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Email Marketing</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>