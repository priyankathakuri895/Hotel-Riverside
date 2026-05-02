<!-- ================= LUXURY FOOTER ================= -->
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

            </div>

            <!-- QUICK LINKS -->
            <div class="col-lg-2">

                <h5 class="text-white mb-3">Quick Links</h5>

                <ul class="list-unstyled">

                    <li><a href="/" class="footer-link">Home</a></li>
                    <li><a href="#rooms" class="footer-link">Rooms</a></li>
                    <li><a href="#facilities" class="footer-link">Facilities</a></li>
                    <li><a href="/booking" class="footer-link">Booking</a></li>

                </ul>

            </div>

            <!-- CONTACT -->
            <div class="col-lg-3">

                <h5 class="text-white mb-3">Contact</h5>

                <p class="text-white-50 mb-1">
                    📍 Kathmandu, Nepal
                </p>

                <p class="text-white-50 mb-1">
                    📞 +977 9800000000
                </p>

                <p class="text-white-50">
                    ✉ info@hotelriverside.com
                </p>

            </div>

            <!-- SOCIAL -->
            <div class="col-lg-3">

                <h5 class="text-white mb-3">Follow Us</h5>

                <div class="d-flex gap-3">

                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">YT</a>

                </div>

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
    background: #0b0b0b;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.footer-link{
    display:block;
    color: rgba(255,255,255,0.6);
    text-decoration:none;
    margin-bottom:8px;
    transition:0.3s;
}

.footer-link:hover{
    color:#c9a24a;
    padding-left:5px;
}

.social-icon{
    width:40px;
    height:40px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid rgba(255,255,255,0.2);
    border-radius:50%;
    color:white;
    text-decoration:none;
    transition:0.3s;
}

.social-icon:hover{
    background:#c9a24a;
    color:black;
    transform:translateY(-3px);
}

</style>