<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.0/font/bootstrap-icons.min.css"
        integrity="sha512-yLNTU6YQWEtsM/WVkUqd2jRzzq5hmfFUMVvziVlkgC0R9HTElDtyF4DiWiBeMS36npvN+NWwrr764A4AWGcmQQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400&family=Raleway:wght@200;300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.svg" />
    <title>Home</title>
</head>

<body style="overflow-x: none;">

    <?php 
        include "navbar.php";
    ?>

    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/shoes1.jpg" class="d-block w-100" alt="shoes"
                        style="height:100vh; object-fit: cover;">
                    <div class=" carousel-caption d-none d-md-block">
                        <h1>NIKE Air Max 5</h1>
                        <p>ร้องเท้ายอดนิยม ปี 2021</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/shoes2.jpg" class="d-block w-100" alt="shoes"
                        style="height:100vh;object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Jordan Delta 2</h1>
                        <p>ร้องเท้าผู้ใหญ่ ใส่แล้วดูดีขึ้น 500%</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/shoes3.jpg" class="d-block w-100" alt="shoes"
                        style="height:100vh; object-fit: cover;">
                    <div class=" carousel-caption d-none d-md-block">
                        <h1>Air Jordan 1 Hi FlyEase</h1>
                        <p>รองเท้าเด็กโต ดูดีมีสไตร์</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>


    <section class="section-lifestyle container mb-5">
        <div class="container-card-one">
            <img src="./img/lifestyle1.jpg" alt="">
            <div style="padding: 40px">
                <h1>เครื่องแต่งกาย สไดร์ผู้หญิง</h1>
                <p>เดรส Jordan Essentials
                    ให้ทรงที่สวมใส่ง่ายและเข้ากับหลากหลายสไตล์ผลิตจากคอตตอนเนื้อหนักระดับพรีเมียมที่มาในทรงหลวมแบบผ่อนคลายและมีกระเป๋าที่จัดวางให้ใช้งานสะดวกด้านข้าง
                </p>
            </div>
        </div>
        <div class="container-card-two" style="margin-top: 50px;">
            <img src="./img/lifestyle2.jpg" alt="">
            <div style="padding: 40px">
                <h1>เครื่องแต่งกาย สไดร์ผู้หญิง</h1>
                <p>เดรส Jordan Essentials
                    ให้ทรงที่สวมใส่ง่ายและเข้ากับหลากหลายสไตล์ผลิตจากคอตตอนเนื้อหนักระดับพรีเมียมที่มาในทรงหลวมแบบผ่อนคลายและมีกระเป๋าที่จัดวางให้ใช้งานสะดวกด้านข้าง
                </p>
            </div>
        </div>

    </section>


    <section class="section-card">
        <div class=" container mt-4 mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/card1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">AIR JORDAN XXXVI</h5>
                            <p class="card-text">พบความเร็วได้ใน Air Jordan XXXVI
                                นิยามใหม่ของรุ่นแห่งความเร็วน้ำหนักเบารุ่นนี้เป็นรองเท้าแข่งที่เบาที่สุดของ Jordan
                                ซึ่งมีส่วนบนบางแบบมินิมอลที่เสริมความแข็งแรง.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NIKE AR6374-010</h5>
                            <p class="card-text">รองเท้าแตะแบบสวม Jordan Break
                                มาพร้อมสายรัดยึดเข้ากับที่บริเวณด้านบนของเท้า และใช้หนังสังเคราะห์ทนทาน
                                รวมถึงระบบลดแรงกระแทกจากโฟมน้ำหนักเบาเพื่อความสบายใต้ฝ่าเท้า.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/card3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NIKE CW2458-163</h5>
                            <p class="card-text">Russell Westbrook
                                เสริมความฉับไวของเขาด้วยสไตล์การเล่นที่รวดเร็วและดุดัน
                                รวมไปถึงอีกหลายสิ่งที่ทำให้เขาเป็นหนึ่งในผู้เล่นที่เก่งที่สุดในลีก และ Jordan One Take
                                II.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <footer>
        <div class="footer-container">
            <div>
                <h5>ค้นหาร้านค้า</h5>
                <h5>สมัครเป็นสมาชิก</h5>
                <h5>ลงทะเบียนเพื่อรับข่าวสาร</h5>
            </div>
            <div>
                <h5>รับความข่วยเหลือ</h5>
                <p>สถานะคำสั่งซื้อ</p>
                <p>การส่งมอบ</p>
                <p>การคืนสินค้า</p>
                <p>ทางเลือกการชำระเงิน</p>
                <p>สติดต่อเรา</p>
            </div>
            <div>
                <h5>เกี่ยวกับ NIKE</h5>
                <p>ข่าวสาร</p>
                <p>ร่วมงานกับเรา</p>
                <p>ร่วมลงทุนกับเรา</p>
                <p>ความยั่งยืน</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2021 NikeNAJA, Inc. สงวนลิขสิทธิ์</p>
        </div>
    </footer>




    <?php 
        include "script.php";
    ?>



</body>

</html>