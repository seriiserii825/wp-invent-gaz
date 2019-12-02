<footer class="main-footer">
    <div class="container">
        <div class="main-footer__wrap">
            <div class="main-footer__item">
                <header class="main-footer__header"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo-white.svg" alt=""></a>
                </header>
                <p> Contoarele de gaze sunt împărțite în mod convențional în uz casnic, utilitar și industrial, în
                    funcție de capacitatea lor . Există multe variante de pasaje ale Lorem Ipsum disponibile, dar
                    majoritatea au suferit modificări .</p>
                <ul class="main-footer__socials">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/facebook-white.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/vk-white.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="main-footer__item">
                <header class="main-footer__header">
                    <h3 class="main-footer__title"> Contacte</h3>
                </header>
                <ul>
                    <li><a href="tel:069 76 9999"> 069 76 9999 </a></li>
                    <li><a href="tel:069 77 4968"> 069 77 4968 </a></li>
                    <li><span> Chișinău, str . Uzinelor 11 / 1 </span></li>
                    <li><a href="mailto:invent-in@rambler.ru"> invent - in@rambler . ru </a></li>
                    <li><span> Luni până sâmbătă: 9: 00 - 18: 00 </span></li>
                </ul>
            </div>
            <div class="main-footer__item">
                <header class="main-footer__header">
                    <h3 class="main-footer__title"> Locatie</h3>
                </header>
                <div class="map"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/map.jpg"></div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright"><span> © 2019 Industry . All rights reserved .</span></div>
<div class="overlay" id="js-overlay"></div>
<div class="popup" id="js-popup">
    <div class="popup-wrap">
        <div class="close-popup" id="js-close-popup"></div>
        <div class="form">
            <header class="section__header">
                <h2 class="section__title"> Trimite un mesaj </h2>
            </header>
            <div class="form-group-grid">
                <input type="text" name="your-name" placeholder="Nume">
                <input type="text" name="your-surname" placeholder="Prenume">
            </div>
            <div class="form-group-grid">
                <input type="tel" name="your-phone" placeholder="Telefon">
                <input type="email" name="your-email" placeholder="Email">
            </div>
            <textarea name="message"></textarea>
            <input class="btn" type="submit">
        </div>
    </div>
</div>
<! -- [if lt IE 9]>
<!--<script src="assets/libs/html5shiv/es5-shim.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/html5shiv.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/respond.min.js"></script>-->
<! --<! [endif]-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="assets/libs/wow/wow.min.js"></script>-->
<!--<script src="assets/libs/jquery-easy-scroll/jquery.easeScroll.js"></script>-->
<!--<script src="assets/libs/slick/slick/slick.min.js"></script>-->
<!--<script src="assets/js/main.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>
