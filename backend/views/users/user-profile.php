<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>پروفایل کاربر</title>

    <!-- favicon -->
    <link rel="icon" href="../../assets/img/logo.png" type="image" sizes="30x5">

    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/general/layout/layout.css">
    <link rel="stylesheet" href="../../assets/css/page_css/users/user-profile.css">

</head>

<body>


    <section class="dashbord">
        <div class="ncb">

            <?php require_once '../layout/navbar.php'?>

            <main class="main_content">
                <?php require_once '../layout/fixedicon.php'?>

                <section class="header_of_pu">
                    <div class="cover_of_pu">
                        <img class="img_of_pu" alt="" title="" src="../../assets/img/PU2.jpg">
                        <div class="txtb">
                            <h1>نادیه نجم آبادی</h1>
                            <p>مدیر اصلی</p>
                        </div>
                    </div>

                    <div class="topic_btn">
                        <button class="btn btn_pu active">
                            پروفایل
                        </button>
                        <button class="btn btn_pu">
                            وظایف
                        </button>
                        <button class="btn btn_pu">
                            فعالیت ها
                        </button>
                        <button class="btn btn_pu">
                            گفتگو ها
                        </button>
                        <button class="btn btn_pu">
                            ایمیل ها
                        </button>

                    </div>
                </section>
                <section class="short_exp_pu_box">
                    <img class="img_of_pu" alt="" title="" src="../../assets/img/PU2.jpg">
                    <div class="details_of_exp">
                        <h2>nadie_najm</h2>
                        <p>نادیه نجم آبادی</p>
                        <p>nadi.codes@gmail.com</p>
                        <p>مدیر اصلی</p>
                        <p>122 مقاله</p>
                        <p>220 محصول</p>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون</p>

                    </div>
                </section>

                <section class="compelete_exp_pu">
                    <h2>اطلاعات کامل</h2>
                    <hr>
                    <div class="details_box">
                        <i class="fal fa-map-marker-smile"></i>
                        <p>تهران - خیابان بصارتی - کوچه فلانی - پلاک 12 - واحد 22</p>
                    </div>
                    <div class="details_box">
                        <i class="fal fa-phone-volume"></i>
                        <p>09023727588</p>
                    </div>
                    <div class="details_box">
                        <i class="fal fa-envelope-open-text"></i>
                        <p>nadi.codes@gmail.com</p>
                    </div>
                    <div class="details_box">
                        <i class="fal fa-lock"></i>
                        <p>***********</p>
                    </div>
                    <div class="details_box">
                        <i class="fal fa-clock"></i>
                        <p>10/12/1399</p>
                    </div>
                    <div class="details_box">
                        <i class="fal fa-user"></i>
                        <p>-</p>
                    </div>

                    <div class="details_box">
                        <i class="fal fa-address-card"></i>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>

                    </div>

                    <button class="btn btn_edit">
                        <i class="fal fa-edit"></i>
                        ویرایش
                    </button>

                </section>
            </main>
        </div>

        <?php require_once '../layout/sidebar.php'?>

    </section>

    <!-- modal  -->
    <section class="modal_box">
        <?php require_once '../layout/modal.php'?>
    </section>


    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/general/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/page-js/layout.js"></script>

</body>

</html>