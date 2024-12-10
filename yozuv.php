<!--asalomu alaykum aziz tomoshobinlar ,bugungi sahna kurishimizga hush kelibsiz ,sizlarni kurib turganimizdan bagoyatda hursanmiz.-->
<!--Manashu 2 soat ichida biz sizlarga quvonch,yuzingizga kulgu ulashamiz.Manashu 2 soat ichida sizda shumini suraymizki,-->
<!--dunyo gamlarini unitib,mazza qilib bizni ajoyib sahna kurinishlarimizdan bahramad bulishingizni suraymiz.-->
<!---->
<?php
//
//        echo ("     Qalbimda o'zgarish bo'ldi o'sha kun,
//                    Yuragim juda tez ura boshladi.
//                    Shu kundan beri halovatim yo'q,
//                    Bu dil endi faqat senga bog'landi.
//
//                    Bu qanday tuyg'uki aqlim ham hayron,
//                    O't bo'lib yonmoqda yurakda sevgi.
//                    Buni to'xtata olmas hatto dengiz ham,
//                    Bu dil endi faqat senga bog'landi.
//
//                    Ko'zlarim ko'zinga tushgan zahoti,
//                    Qalbimda hayojon ,yuzimda kulgu.
//                    Goh boshim aylanib,oyog'im titrar,
//                    Bu dil endi faqat senga bog'landi.
//
//                    Bu qarashing aqlimdan ozdirar meni,
//                    Ohista men tomon yurib kelarding.
//                    O'sha tor ko'chada keldik ikkimiz,
//                    Bu dil endi faqat senga bog'landi.
//
//                    Kechalar halovat yo'qoldi menda,
//                    Hayolda birga kezardik chaman.
//                    Shu hayol bilan qolardim uhlab,
//                    Bu dil endi faqat senga boglandi.
//
//                    Sochlaring shamollar o'ynatar,
//                    U kulsa ko'zlarimni quvnatar.
//                    Yig'lasang boshqacha bo'laman jonim,
//                    Bu dil endi faqat senga boglandi.
//
//
//
//                    ") ;
//
//
//?>
<!---->
<!---->
<!--Yana bir bor oldim qo'limga qalam,-->
<!--Sening fisolingni yoritmoq uchun.-->
<!--Lekin qancha yozmay sen haqingda,-->
<!--Sen undanham ulug'san,azizsan ayol.-->
<!---->
<!--Senging bardoshinga yo'qdir hatto so'z,-->
<!--Tariflab berolmas eng zo'r shoir ham.-->
<!--Seni bir tun aytgan allangni,-->
<!--Haqqini ado etolmas inson.-->
<!---->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #282c34;
            color: white;
            font-family: Arial, sans-serif;
        }
        .clock {
            font-size: 3em;
            border: 5px solid #61dafb;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: #1c2025;
            wi
        }

    </style>
</head>
<body>
<div class="clock" id="clock">00:00:00</div>

<script>
    function updateClock() {
        const now = new Date();
// Hozirgi vaqt va sanani olish uchun yangi Date ob'ekti yaratiladi
        const hours = String(now.getHours()).padStart(2, '0');
// Hozirgi soatni olish, matnga aylantirish va nol bilan to'ldirish
        const minutes = String(now.getMinutes()).padStart(2, '0');
// Hozirgi daqiqani olish, matnga aylantirish va nol bilan to'ldirish
        const seconds = String(now.getSeconds()).padStart(2, '0');
// Hozirgi soniyani olish, matnga aylantirish va nol bilan to'ldirish
        document.getElementById('clock').textContent = ${hours}:${minutes}:${seconds};
// Soat, daqiqa va soniyani formatlab, HTML elementiga joylash
    }

    setInterval(updateClock, 1000);
    // Har 1 soniyada updateClock funksiyasini chaqirish
    updateClock();
    // Dastlabki yangilanish
</script>

</body>
</html>