<footer>
    <section class="container footer-content">
        <div class="logo-footer">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
            <img class="logo" src="<?= $image[0]; ?>" alt="logo">
        </div>

        <div class="footer-info">
            <a href="https://www.google.com/maps/place/Piraí+Pneus+-+R.+Fábio+Brito+de+Azambuja,+280+-+São+Cristóvão,+Lajeado+-+RS,+95913-068/@-29.444484,-51.9650374,17z/data=!4m2!3m1!1s0x951c616caa6f4f51:0x78d3f428c715f313" target="_blank" rel="noopener noreferrer">
                <p>
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                    <span>Rua Fábio Brito de Azambuja, 280, São Cristóvão - Lajeado/RS</span>
                </p>
            </a>

            <a href="tel:+555130111460" target="_blank">
                <p>
                    <i class="fa-solid fa-phone fa-lg"></i>
                    <span>51 3011-1460</span>
                </p>
            </a>

            <a href="https://web.whatsapp.com/send?phone=5551981842396&amp;text=Ol%C3%A1%2C+vim+pelo+site+de+voc%C3%AAs%2C+poderia+me+ajudar%3F" target="_blank">
                <p>
                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                    <span>51 9 8184-2396</span>
                </p>
            </a>
        </div>

        <div class="footer-social-link">
            <a href="https://web.whatsapp.com/send?phone=5551981842396&amp;text=Ol%C3%A1%2C+vim+pelo+site+de+voc%C3%AAs%2C+poderia+me+ajudar%3F" class="whats-btn" target="_blank">
                <i class="fa-brands fa-whatsapp fa-xl" style="margin-top: -2px;"></i>
            </a>
            <ul>
                <li>
                    <a href="https://www.facebook.com/piraipneuslajeado" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/piraipneuslajeado" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <div id="cookieNotice" class="cookie-consent d-flex flex-column flex-lg-row justify-content-center align-items-center w-100">
        <div class="cookie-content">
            <p>Este site utiliza cookies para melhorar sua experiência!</p>
        </div>
        <div class="cookie-accept">
            <button onclick="acceptCookieConsent()" class="secundario">
                Continuar
            </button>
        </div>
    </div>

    <div class="bar">
        <p>Copyright &copy; <?= date("Y"); ?></p>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>