<?php
const title = "Popüler Kurslar";

$kategoriler = array("Programlama", "Web Geliştirme", "Veri Analizi", "Ofis Uygulamaları");

sort($kategoriler);

$kurslar = array(
    "1" => array(
        "baslik" => "PHP Kursu",
        "altBaslik" => "Sıfırdan ileri seviye web geliştirme",
        "resim" => "https://img-c.udemycdn.com/course/240x135/3952174_5d3a.jpg",
        "yayinTarihi" => "30.03.2024",
        "yorumSayisi" => 10,
        "begeniSayisi" => 0,
        "onay" => true
    ),
    "2" => array(
        "baslik" => "React Kursu",
        "altBaslik" => "Sıfırdan ileri seviye web geliştirme",
        "resim" => "https://img-c.udemycdn.com/course/240x135/3366564_2236_5.jpg",
        "yayinTarihi" => "30.03.2024",
        "yorumSayisi" => 0,
        "begeniSayisi" => 10,
        "onay" => true
    ),
    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye web geliştirme",
        "resim" => "https://img-c.udemycdn.com/course/240x135/1944162_74f2_3.jpg",
        "yayinTarihi" => "30.03.2024",
        "yorumSayisi" => 20,
        "begeniSayisi" => 10,
        "onay" => false
    ),
    "4" => array(
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye web geliştirme",
        "resim" => "https://img-c.udemycdn.com/course/240x135/4301499_60fc_3.jpg",
        "yayinTarihi" => "30.03.2024",
        "yorumSayisi" => 0,
        "begeniSayisi" => 5,
        "onay" => true
    )
);



$kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));
$kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["altBaslik"])); //08:42
$kurs3_altBaslik = ucfirst(strtolower($kurslar["3"]["altBaslik"]));

// $kurs1_altBaslik = substr($kurslar["1"]["altBaslik"], 0, 50) . "...";
// $kurs2_altBaslik = substr($kurslar["2"]["altBaslik"], 0, 50) . "...";
// $kurs3_altBaslik = substr($kurslar["3"]["altBaslik"], 0, 50) . "...";

$kurs1_url = str_replace([" ", "ç", "."], ["-", "c", "-"], strtolower($kurslar["1"]["baslik"]));
$kurs2_url = str_replace([" ", "ç", "."], ["-", "c", "-"], strtolower($kurslar["2"]["baslik"]));
$kurs3_url = str_replace([" ", "ç", "."], ["-", "c", "-"], strtolower($kurslar["3"]["baslik"]));
$kurs4_url = str_replace([" ", "ç", "."], ["-", "c", "-"], strtolower($kurslar["4"]["baslik"]));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>CourseApp</title>
</head>

<body>


    <div class="container my-3">


        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[0]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[1]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]; ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> film listelenmiştir.
                </p>
                <?php if ($kurslar["1"]["onay"]) : ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs1_url; ?>">
                                            <?php echo $kurslar["1"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (strlen($kurslar["1"]["altBaslik"]) > 50) : ?>
                                            <?php substr($kurslar["1"]["altBaslik"], 0, 50) . "..." ?>
                                        <?php else : ?>
                                            <?php echo $kurslar["1"]["altBaslik"]; ?>
                                        <?php endif ?>
                                    </p>
                                    <p>
                                        <?php if ($kurslar["1"]["begeniSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["1"]["begeniSayisi"]; ?> Beğeni
                                            </span>
                                        <?php endif ?>

                                        <?php if ($kurslar["1"]["yorumSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                <?php echo $kurslar["1"]["yorumSayisi"]; ?> Yorum
                                            </span>
                                        <?php else : ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk yorumu sen yap.
                                            </span>
                                        <?php endif ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

                <?php if ($kurslar["2"]["onay"]) : ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs2_url; ?>">
                                            <?php echo $kurslar["2"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (strlen($kurslar["2"]["altBaslik"]) > 50) : ?>
                                            <?php substr($kurslar["2"]["altBaslik"], 0, 50) . "..." ?>
                                        <?php else : ?>
                                            <?php echo $kurslar["2"]["altBaslik"]; ?>
                                        <?php endif ?>
                                    </p>
                                    <p>
                                        <?php if ($kurslar["2"]["begeniSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["2"]["begeniSayisi"]; ?> Beğeni
                                            </span>
                                        <?php endif ?>

                                        <?php if ($kurslar["2"]["yorumSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                <?php echo $kurslar["2"]["yorumSayisi"]; ?> Yorum
                                            </span>
                                        <?php else : ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk yorumu sen yap.
                                            </span>
                                        <?php endif ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

                <?php if ($kurslar["3"]["onay"]) : ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $kurslar["3"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs3_url; ?>">
                                            <?php echo $kurslar["3"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (strlen($kurslar["3"]["altBaslik"]) > 50) : ?>
                                            <?php substr($kurslar["3"]["altBaslik"], 0, 50) . "..." ?>
                                        <?php else : ?>
                                            <?php echo $kurslar["3"]["altBaslik"]; ?>
                                        <?php endif ?>
                                    </p>
                                    <p>
                                        <?php if ($kurslar["3"]["begeniSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["3"]["begeniSayisi"]; ?> Beğeni
                                            </span>
                                        <?php endif ?>

                                        <?php if ($kurslar["3"]["yorumSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                <?php echo $kurslar["3"]["yorumSayisi"]; ?> Yorum
                                            </span>
                                        <?php else : ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk yorumu sen yap.
                                            </span>
                                        <?php endif ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

                <?php if ($kurslar["4"]["onay"]) : ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $kurslar["4"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs4_url; ?>">
                                            <?php echo $kurslar["4"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (strlen($kurslar["4"]["altBaslik"]) > 50) : ?>
                                            <?php substr($kurslar["4"]["altBaslik"], 0, 50) . "..." ?>
                                        <?php else : ?>
                                            <?php echo $kurslar["4"]["altBaslik"]; ?>
                                        <?php endif ?>
                                    </p>
                                    <p>
                                        <?php if ($kurslar["4"]["begeniSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["4"]["begeniSayisi"]; ?> Beğeni
                                            </span>
                                        <?php endif ?>

                                        <?php if ($kurslar["4"]["yorumSayisi"] > 0) : ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                <?php echo $kurslar["4"]["yorumSayisi"]; ?> Yorum
                                            </span>
                                        <?php else : ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk yorumu sen yap.
                                            </span>
                                        <?php endif ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

            </div>
        </div>


    </div>
</body>

</html>