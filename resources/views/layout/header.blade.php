<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div data-aos="fade-up" class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo">
                <i class="fas fa-times fa-2x"></i>
            </div>
            <h1 class="text-center">Laravel Blog</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                {{-- is_active is form  app/helpers/helpers.php  --}}
                <li data-aos="fade-up" class="tm-nav-item  {{ is_active('/') }}">
                    <a href="/" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a>
                </li>
                <li data-aos="fade-up" class="tm-nav-item {{ is_active('blog-details') }}">
                    <a href="/blog-details" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Single Post
                    </a>
                </li>
                <li data-aos="fade-up" class="tm-nav-item {{ is_active('about-us') }}">
                    <a href="/about-us" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About Xtra
                    </a>
                </li>
                <li data-aos="fade-up" class="tm-nav-item {{ is_active('contact-us') }}">
                    <a href="/contact-us" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        <div data-aos="fade-up" class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
            <a href="https://linkedin.com" class="tm-social-link">
                <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
        </div>
        <p data-aos="fade-up" class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website.
            Left side is a sticky menu bar. Right side content will scroll up and
            down.
        </p>
    </div>
</header>
