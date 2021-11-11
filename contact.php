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
    <title>Contact</title>
</head>

<body style="overflow-x: none;">

    <?php 
        include "navbar.php";
    ?>

    <section class="mt-5">
        <div class="container contact-container col-6">
            <i class="bi bi-person-lines-fill contact-icon"></i>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ความช่วยเหลือ" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">ค้นหา</button>
            </div>
        </div>

        <div class="contact-items" style="display:flex; justify-content:space-around;">
            <div class="my-5">
                <i style="font-size:5rem" class="bi bi-telephone"></i>
                <h5>สินค้าและคำสั่งซื้อ</h5>
                <p>035-4561-54984</p>
                <p>9:00 - 18.00</p>
                <p>วันจันทร์ - วันศุกร์</p>
            </div>
            <div class="my-5">
                <i style="font-size:5rem" class="bi bi-phone-vibrate"></i>
                <h5>สินค้าและคำสั่งซื้อ</h5>
                <p>035-4561-54984</p>
                <p>9:00 - 18.00</p>
                <p>วันจันทร์ - วันศุกร์</p>
            </div>
            <div class="my-5">
                <i style="font-size:5rem" class="bi bi-megaphone"></i>
                <h5>สินค้าและคำสั่งซื้อ</h5>
                <p>035-4561-54984</p>
                <p>9:00 - 18.00</p>
                <p>วันจันทร์ - วันศุกร์</p>
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








    <script>
    let currentPosition = this.scrollY;
    window.addEventListener('scroll', function() {

        let newPosition = this.scrollY;
        let navbar = document.querySelector(".navbar")

        if (this.scrollY > currentPosition) {

            navbar.style.top = "-100px"
            currentPosition = this.scrollY;
        } else {
            navbar.style.top = "0px"
            currentPosition = this.scrollY;
        }

    })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>