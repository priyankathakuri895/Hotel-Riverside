@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="page-header text-white text-center">
    <div class="container">
        <span class="section-eyebrow">Contact</span>

        <h1 class="display-4">Get In Touch</h1>

        <p class="lead">
            Questions about your stay? We would love to hear from you.
        </p>
    </div>
</section>

<!-- CONTACT -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="row g-5">

            <!-- CONTACT INFO -->
            <div class="col-lg-5">

                <h2 class="about-label">Contact Info</h2>
                <h3 class="about-title">We're Here To Help</h3>

                <p class="text-muted-grey">
                    Reach out for reservations, special requests or anything
                    else &mdash; our team typically responds within a day.
                </p>

                <div class="contact-info-list">

                    <div class="contact-info-item">
                        <span class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </span>
                        <div>
                            <h5>Address</h5>
                            <p>Bharatpur-22, Ghatgain, Bharatpur 44200, Chitwan, Nepal</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z"></path></svg>
                        </span>
                        <div>
                            <h5>Phone</h5>
                            <p><a href="tel:+9779845088858">+977 984-5088858</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-10 6L2 7"></path></svg>
                        </span>
                        <div>
                            <h5>Email</h5>
                            <p><a href="mailto:info@hotelriverside.com">info@hotelriverside.com</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                        </span>
                        <div>
                            <h5>Front Desk Hours</h5>
                            <p>Open 24 hours, every day</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- CONTACT FORM (SAMPLE) -->
            <div class="col-lg-7">

                <div class="flat-card">

                    <h3 class="mb-4">Send Us A Message</h3>

                    <form onsubmit="return false;">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control contact-input" placeholder="Your name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control contact-input" placeholder="you@example.com">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control contact-input" placeholder="How can we help?">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Message</label>
                                <textarea class="form-control contact-input" rows="5" placeholder="Write your message here..."></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-brand">
                                    Send Message
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- MAP -->
<section class="section-tint">

    <div class="map-embed">
        <iframe
            src="https://www.google.com/maps?q=Hotel+Riverside+%26+Lodge,Bharatpur-22,Ghatgain,Chitwan,Nepal&z=16&output=embed"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Hotel Riverside & Lodge location map"
        ></iframe>
    </div>

    <div class="container py-3 text-center">
        <a
            href="https://www.google.com/maps/place/hotel+Riverside+%26+Lodge/@27.5693125,84.3629943,17z/data=!4m6!3m5!1s0x3994f1489ab5c567:0xf431b348a4ff7ff1!8m2!3d27.5693638!4d84.3628145!16s%2Fg%2F11z8hgwj65"
            target="_blank"
            rel="noopener"
            class="text-link"
        >
            Open in Google Maps &rarr;
        </a>
    </div>

</section>

<style>

.contact-info-list{
    display: flex;
    flex-direction: column;
    gap: 22px;
    margin-top: 28px;
}

.contact-info-item{
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

.contact-icon{
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--brand-tint);
    color: var(--brand);
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-info-item h5{
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 2px;
}

.contact-info-item p{
    color: var(--grey);
    margin: 0;
    font-size: 14px;
}

.contact-info-item p a{
    color: var(--grey);
    text-decoration: none;
}

.contact-info-item p a:hover{
    color: var(--brand);
}

.contact-input{
    border-radius: 4px;
    border: 1px solid rgba(0,0,0,0.15);
    padding: 10px 14px;
}

.contact-input:focus{
    border-color: var(--brand);
    box-shadow: 0 0 0 3px rgba(27,67,50,0.12);
}

.form-label{
    font-size: 13px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 6px;
}

.map-embed{
    line-height: 0;
}

.map-embed iframe{
    display: block;
    width: 100%;
    height: 400px;
    filter: grayscale(10%) contrast(1.05);
}

@media(max-width: 768px){
    .map-embed iframe{
        height: 280px;
    }
}

</style>

@endsection
