<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <?php include 'menu.php'; ?>


    <div id="demo" class="carousel slide" data-bs-ride="carousel">


        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>


        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/adam-kool-ndN00KmbJ1c-unsplash.jpg" alt="Los Angeles" class="d-block" height="700vh" style="width:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carly-osborn-LKRRLAKgeO4-unsplash.jpg" alt="Chicago" class="d-block" height="700vh" style="width:100%">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/david-marcu-78A265wPiO4-unsplash.jpg" alt="New York" class="d-block" height="700vh" style="width:100%">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <section class="my-5 ">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/lukasz-szmigiel-jFCViYFYcus-unsplash.jpg" class="img-fluid px-5" width="800px" height="250px" alt="Responsive Image">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Prateek Rai</h2>
                    <p class="py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos consequatur porro odit hic alias voluptatem beatae velit repellat aliquam, eos obcaecati ullam perferendis delectus perspiciatis, harum non. Distinctio, quasi blanditiis?</p>
                    <a href="about.php" class="btn btn-success">check More</a>
                </div>

            </div>
        </div>
    </section>


    

    <section class="my-5 ">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img src="images/pexels-roman-odintsov-4551832.jpg" class="card-img-top" alt="service_img">
                    <div class="card-body">
                        <h5 class="card-title">Foods :)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img src="images/pexels-roman-odintsov-4551832.jpg" class="card-img-top" alt="service_img">
                    <div class="card-body">
                        <h5 class="card-title">Foods :)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img src="images/pexels-roman-odintsov-4551832.jpg" class="card-img-top" alt="service_img">
                    <div class="card-body">
                        <h5 class="card-title">Foods :)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




    <section class="my-5 ">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/linkedin bg.webp" alt="gallery_img" class="img-fluid pb-4">
                </div>
            </div>
        </div>
    </section>

    

    <section class="my-5 ">
    <div class="py-5">
        <h2 class="text-center">Our Data</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group mb-3">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Comments</label>
                <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>


    <footer>
        <p class="p-3 bg-dark text-white text-center">@codingwithprateek</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>