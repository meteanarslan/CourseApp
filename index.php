<?php
const title = "Popüler Kurslar";

$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),


);



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
                    <?php for ($i = 0; $i < count($kategoriler); $i++) : ?>
                        <a href="#" class="list-group-item list-group-item-action <?php echo ($kategoriler[$i]["aktif"]) ? "active" : "" ?>">
                            <?php echo $kategoriler[$i]["kategori_adi"]; ?>
                        </a>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> film listelenmiştir.
                </p>
                <?php foreach ($kurslar as $key => $kurs) : ?>
                    <?php if ($kurs["onay"]) : ?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo $kurs1_url; ?>">
                                                <?php echo $kurs["baslik"]; ?>
                                            </a>
                                        </h5>
                                        <p class="card-text">
                                            <?php if (strlen($kurs["altBaslik"]) > 50) : ?>
                                                <?php substr($kurs["altBaslik"], 0, 50) . "..." ?>
                                            <?php else : ?>
                                                <?php echo $kurs["altBaslik"]; ?>
                                            <?php endif ?>
                                        </p>
                                        <p>
                                            <?php if ($kurs["begeniSayisi"] > 0) : ?>
                                                <span class="badge rounded-pill text-bg-primary">
                                                    <?php echo $kurs["begeniSayisi"]; ?> Beğeni
                                                </span>
                                            <?php endif ?>

                                            <?php if ($kurs["yorumSayisi"] > 0) : ?>
                                                <span class="badge rounded-pill text-bg-danger">
                                                    <?php echo $kurs["yorumSayisi"]; ?> Yorum
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
                <?php endforeach ?>

            </div>
        </div>


    </div>
</body>

</html>