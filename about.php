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
    <link rel="stylesheet" href="./css/about.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.svg" />
    <title>About</title>
</head>

<body style="overflow-x: none;">

    <?php 
        include "navbar.php";
    ?>

    <section class="container" style="padding-top: 100px; margin-bottom: 10rem;">
        <h1>ช่วยเหลือด่วน</h1>
        <p>คลิกคำถามที่เราได้รับบ่อยที่สุดเพื่อดูคำตอบได้เลย</p>
        <div class="about-items">
            <div>
                <p>การจัดส่งและการส่งมอบ
                    ฉันจะรับสิทธิ์จัดส่งสินค้าฟรีจากคำสั่งซื้อ NIKE ได้อย่างไร
                    ตัวเลือกการส่งมอบสินค้าของ NIKE มีอะไรบ้าง
                    คำสั่งซื้อจาก NIKE ของฉันสามารถจัดส่งระหว่างประเทศได้หรือไม่</p>
            </div>
            <div>
                <p>คืนสินค้า
                    วิธีคืนสินค้าที่สั่งซื้อจาก NIKE
                    นโยบายการคืนสินค้าของ Nike คืออะไร
                    ฉันจะรับเงินคืนได้อย่างไร</p>
            </div>
            <div>
                <p>NIKE MEMBERSHIP
                    การเป็นสมาชิก Nike คืออะไร
                    ฉันจะสร้างโปรไฟล์ Nike Member ได้อย่างไร
                    ฉันจะใช้งาน NRC และ NTC ให้เกิดประโยชน์สูงสุดได้อย่างไร</p>
            </div>
        </div>
        <div class="about-items">
            <div>
                <p>คำสั่งซื้อ
                    ฉันจะติดตามสถานะคำสั่งซื้อของฉันที่ Nike ได้อย่างไร
                    ยกเลิกหรือเปลี่ยนคำสั่งซื้อ NIKE ได้ไหม
                    ฉันใช้วิธีชำระเงินแบบใดได้บ้างกับคำสั่งซื้อ NIKE</p>
            </div>
            <div>
                <p>ข้อมูลสินค้า
                    ฉันจะทำความสะอาดรองเท้า เสื้อผ้า และอุปกรณ์กีฬา Nike ของฉันได้อย่างไร
                    ฉันจะหาไซส์และความพอดีที่เหมาะสมได้อย่างไร
                    นโยบายการออกแบบตามความต้องการของ Nike By You คืออะไร
                    รองเท้า Nike มีการรับประกันหรือไม่
                    ฉันจะรับข่าวสารการเปิดตัวรองเท้าผ้าใบล่าสุดของ Nike อย่างไร</p>
            </div>
            <div>
                <p>บริษัท
                    ฉันจะเรียนรู้เพิ่มเติมเกี่ยวกับ Nike, Inc. ได้ที่ไหน
                    ร้าน Nike ที่ใกล้ฉันที่สุดอยู่ที่ไหน</p>
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