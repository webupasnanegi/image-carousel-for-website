<!DOCTYPE html>
<html lang="en">
<head?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caparison India :: Women's Dress</title>
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="about.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="caprison.js"></script>

    </head>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Nerko+One&display=swap');

    .carousel-cell {
        width: 100%;
    }

    /* cell number */
    .carousel-cell:before {
        display: block;
    }

    .w3-image {
        height: 200px;
    }

    a img {
        width: 50%;
    }
    </style>

    <body>
        <div class="container" style="display:inline;">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000" id="content">
                        <img src="photo8.jpg" class="d-block w-100" alt="..." id="img1">
                        <div class="msg">
                            <p class="txt1">We are leading manufacutre of Women's Clothing.</p>
                            <p class="txt2">Making your Brand differentiate from other Clothing brand.</p>
                            <p class="txt3">Contact us for more Details.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="photo6.jpg" class="d-block w-100" alt="..." id="img2">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="photo2.webp" class="d-block w-100" alt="..." id="img3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </body>

</html>