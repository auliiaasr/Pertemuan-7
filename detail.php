<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AULIA SINTA_1122</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d95b64c38.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #242424">
    <div>
        <h1 class="text-light text-center">CINEPOLIS MOVIES</h1>
    </div>
    <div class="container">
        <!-- Content -->
        <div class="row">
            <?php
            require_once 'connect.php';
            $id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM film WHERE id=$id");
            $row = mysqli_fetch_object($query);
            ?>
            <div class="col-sm-3 mb-3">
                <div class="card" style="width: 15rem">
                    <a href="">
                        <img src="https://altfilmlens.files.wordpress.com/2015/11/the_good_dinosaur_promo_art_03.jpg" class="card-img-top" alt="" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row->title; ?> (<?= $row->release_year; ?>)</h5>
                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">Rating: <?= $row->rating; ?></p>
                            </div>
                            <div class="col-2">
                                <i class="fas fa-edit fa-lg text-primary mr-1"></i>
                            </div>
                            <div class="col-2">
                                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>