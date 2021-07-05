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