<!-- ================= FOOTER ================= -->
<footer class="luxury-footer">

    <div class="container py-5">

        <div class="row g-4">

            <!-- HOTEL INFO -->
            <div class="col-lg-4">

                <h3 class="text-white fw-bold mb-3">
                    Hotel Riverside
                </h3>

                <p class="text-white-50">
                    Experience luxury, comfort, and nature in perfect harmony.
                    Your premium stay destination with world-class hospitality.
                </p>

                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">YT</a>
                </div>

            </div>

            <!-- PAGES -->
            <div class="col-lg-2 col-md-4 col-6">

                <h5 class="text-white mb-3">Pages</h5>

                <ul class="list-unstyled">

                    <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
                    <li><a href="{{ route('packages') }}" class="footer-link">Stay</a></li>
                    <li><a href="{{ route('facilities') }}" class="footer-link">Facilities</a></li>
                    <li><a href="{{ route('home') }}#gallery" class="footer-link">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>

                </ul>

            </div>

            <!-- STAY -->
            <div class="col-lg-2 col-md-4 col-6">

                <h5 class="text-white mb-3">Account</h5>

                <ul class="list-unstyled">

                    <li><a href="{{ route('booking') }}" class="footer-link">Book a Room</a></li>
                    <li><a href="{{ route('my.bookings') }}" class="footer-link">My Bookings</a></li>
                    @guest
                        <li><a href="{{ route('login') }}" class="footer-link">Sign In</a></li>
                        <li><a href="{{ route('register') }}" class="footer-link">Join Now</a></li>
                    @endguest

                </ul>

            </div>

            <!-- GET IN TOUCH -->
            <div class="col-lg-4 col-md-4">

                <h5 class="text-white mb-3">Get In Touch</h5>

                <p class="text-white-50 mb-1">
                    📍 Kathmandu, Nepal
                </p>

                <p class="text-white-50 mb-1">
                    📞 +977 9800000000
                </p>

                <p class="text-white-50 mb-4">
                    ✉ info@hotelriverside.com
                </p>

                <!-- NEWSLETTER (SAMPLE) -->
                <h6 class="text-white-50 mb-2" style="font-size:13px;">
                    Sign up now to receive special offers &amp; promotions
                </h6>

                <form class="newsletter-form" onsubmit="return false;">
                    <input type="email" placeholder="Your email address" class="newsletter-input">
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>

            </div>

        </div>

        <hr class="text-white-50 my-4">

        <div class="text-center text-white-50">

            © {{ date('Y') }} Hotel Riverside. All rights reserved.

        </div>

    </div>

</footer>

<!-- ================= FOOTER STYLE ================= -->

<style>

.luxury-footer{
    background: var(--footer-bg, #22201B);
    border-top: 1px solid rgba(255,255,255,0.08);
}

.footer-link{
    display:block;
    color: rgba(255,255,255,0.6);
    text-decoration:none;
    margin-bottom:8px;
    transition:0.25s;
}

.footer-link:hover{
    color: var(--accent, #7A9471);
    padding-left:5px;
}

.social-icon{
    width:38px;
    height:38px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid rgba(255,255,255,0.2);
    border-radius:50%;
    color:white;
    text-decoration:none;
    font-size: 12px;
    transition:0.25s;
}

.social-icon:hover{
    background: var(--accent, #7A9471);
    border-color: var(--accent, #7A9471);
    color:#fff;
    transform:translateY(-3px);
}

/* NEWSLETTER (SAMPLE FORM) */
.newsletter-form{
    display: flex;
    gap: 8px;
}

.newsletter-input{
    flex: 1;
    min-width: 0;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 4px;
    padding: 10px 14px;
    color: #fff;
    font-size: 14px;
}

.newsletter-input::placeholder{
    color: rgba(255,255,255,0.5);
}

.newsletter-btn{
    border: 2px solid var(--accent, #7A9471);
    background: var(--accent, #7A9471);
    color: #fff;
    font-weight: 700;
    padding: 10px 18px;
    border-radius: 4px;
    white-space: nowrap;
    transition: 0.25s ease;
}

.newsletter-btn:hover{
    background: var(--accent-dark, #63795C);
    border-color: var(--accent-dark, #63795C);
}

</style>
