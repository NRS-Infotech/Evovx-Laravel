</article>
</main>

<!-- #FOOTER -->
<footer class="footer">
    <div class="container grid-list">

        <div class="footer-brand">

            <a href="" class="navbar-link">
                <img src="{{ asset('website/assets/logo-dark.svg') }}" class="logo logo-dark" style="width: 100px;">
            </a>

            <p class="footer-text">
                &copy; 2024 EVOVX. <br> All rights reserved.
            </p>

            <ul class="social-list">

                <li>
                    <a href="https://linktr.ee/zabisahi" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://linktr.ee/zabisahi" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://linktr.ee/zabisahi" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://linktr.ee/zabisahi" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

        <ul class="footer-list">

            <!-- <li>
        <p class="h4 footer-list-title">Lorem Ipsum</p>
      </li>

      <li>
        <address class="footer-text">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </address>
      </li>

      <li>
        <a href="mailto:info@email.com" class="footer-link">zabihullahsahi81@gmail.com</a>
      </li>

      <li>
        <a href="tel:001234567890" class="footer-link">+92 341 6146 573</a>
      </li> -->

        </ul>

        <ul class="footer-list">

            <!-- <li>
        <p class="h4 footer-list-title">Lorem Ipsum</p>
      </li> -->

            <li>
                <a href="{{ url('/about') }}" class="footer-link">About</a>
            </li>

            <li>
                <a href="{{ url('/services') }}" class="footer-link">Services</a>
            </li>

            <li>
                <a href="{{ url('/contact') }}" class="footer-link">Contact</a>
            </li>

            <li>
                <a href="{{ url('/') }}" class="footer-link">Terms of Use</a>
            </li>

            <li>
                <a href="{{ url('/') }}" class="footer-link">Privacy Policy</a>
            </li>

        </ul>

        <ul class="footer-list">

            <!-- <li>
        <p class="h4 footer-list-title">Lorem Ipsum</p>
      </li> -->

            <li>
                <a href="address" class="footer-link">
                    <span style="display: flex; align-items: center;">
                        <ion-icon name="location"></ion-icon> Doha,Qatar
                    </span>
                </a>
            </li>

            <li>
                <a href="mailto:info@email.com" class="footer-link">
                    <span style="display: flex; align-items: center;">
                        <ion-icon name="mail"></ion-icon> evovx@gmail.com
                    </span>
                </a>
            </li>
            <li>
                <a href="tel:001234567890" class="footer-link">
                    <span style="display: flex; align-items: center;">
                        <ion-icon name="call"></ion-icon> +92 341 6146 573
                    </span>
                </a>
            </li>

        </ul>


        <!-- <div class="footer-list">

      <p class="h4 footer-list-title">Join Newsletter</p>

      <p class="footer-text">
        Subscribe to our newsletter to get our news & deals delivered to you.
      </p>

      <form action="" class="input-wrapper">
        <input type="email" name="email_address" placeholder="Email Address" required class="input-field">

        <button type="submit" class="submit-btn">Join</button>
      </form>

    </div> -->

    </div>
</footer>

<!-- custom js link -->
<script src="{{ asset('website/assets/js/script.js') }}"></script>

<!-- ionicon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    document.querySelectorAll('[data-nav-toggler]').forEach(element => {
        element.addEventListener('click', () => {
            document.querySelector('[data-navbar]').classList.toggle('active');
            document.querySelector('[data-overlay]').classList.toggle('active');
        });
    });
</script>

</body>

</html>
