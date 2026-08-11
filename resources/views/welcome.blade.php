<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Joya Atelier creates luxury event decor, fresh flowers, and complete styling for celebrations, gifting, weddings, corporate events, and galas.">
    <title>Joya Atelier | Events, Florals & Styling</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|playfair-display:600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="image-hero-page">
    <header class="shop-header home-top-menu">
        <a class="brand shop-brand" href="{{ route('home') }}" aria-label="Joya Atelier home">
            <img class="brand-logo" src="{{ asset('images/brand/joya-logo-transparent-dark-text.png') }}" alt="Joya Atelier logo">
        </a>
        <nav class="shop-nav" aria-label="Primary navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('flowers') }}">Flowers</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('booking') }}">Booking</a>
        </nav>
        <a class="header-cta" href="{{ route('booking') }}">Book Your Event</a>
    </header>

    <main id="home">
        <section class="hero-section image-hero" data-hero-carousel>
            <div class="hero-slides" aria-hidden="true">
                <img
                    class="hero-image is-active"
                    src="{{ asset('images/events/joya-event-setup-pink-gold.png') }}"
                    alt=""
                >
                <img
                    class="hero-image"
                    src="{{ asset('images/events/pretty-table-styling.jpg') }}"
                    alt=""
                >
                <img
                    class="hero-image"
                    src="{{ asset('images/events/white-gold-party-table.jpg') }}"
                    alt=""
                >
                <img
                    class="hero-image"
                    src="{{ asset('images/events/outdoor-pink-balloon-event.jpg') }}"
                    alt=""
                >
            </div>
            <div class="hero-action-bar" aria-label="Joya Atelier quick actions">
                <a class="primary-btn" href="{{ route('booking') }}">Book Your Event</a>
                <a class="secondary-btn" href="{{ route('flowers') }}">Shop Flowers</a>
            </div>
            <div class="hero-slide-dots" aria-label="Hero slideshow progress">
                <span class="is-active"></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>

        <section id="work" class="gallery-section">
            <div class="section-heading">
                <p class="eyebrow dark">Featured Work</p>
                <h2>Moments We've Styled</h2>
                <div class="gallery-tags" aria-label="Featured work categories">
                    <span>Birthday</span>
                    <span>Wedding</span>
                    <span>Bridal Shower</span>
                    <span>Baby Shower</span>
                    <span>Graduation</span>
                    <span>Corporate</span>
                </div>
            </div>
            <div class="gallery-grid">
                <figure class="gallery-large">
                    <a href="{{ route('events') }}">
                        <img src="{{ asset('images/events/joya-event-setup-pink-gold.png') }}" alt="Pink and gold event setup with balloons, florals, candles, and table styling">
                        <figcaption>Signature event setup</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="{{ route('events') }}">
                        <img src="{{ asset('images/events/black-bows-birthday.jpg') }}" alt="Black and silver birthday balloon decor inspiration">
                        <figcaption>Birthday balloon decor</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="{{ route('events') }}">
                        <img src="{{ asset('images/events/romantic-love-setup.jpg') }}" alt="Romantic surprise setup with candles and rose petals">
                        <figcaption>Romantic surprise setup</figcaption>
                    </a>
                </figure>
            </div>
        </section>

        <section id="flowers" class="content-section flower-section">
            <div class="section-heading">
                <p class="eyebrow dark">Featured Flowers</p>
                <h2>Flowers For Every Beautiful Moment</h2>
            </div>
            <div class="flower-grid">
                <article>
                    <img src="{{ asset('images/flowers/pink-fuzzy-roses.jpg') }}" alt="Pink handcrafted fuzzy-wire bouquet">
                    <h3>Blush Pearl Fuzzy Bouquet</h3>
                    <p>Handcrafted keepsake</p>
                </article>
                <article>
                    <img src="{{ asset('images/flowers/basket-fuzzy-flowers.jpeg') }}" alt="Handcrafted basket with fuzzy-wire flowers">
                    <h3>Rose & Lily Basket</h3>
                    <p>Gift arrangement</p>
                </article>
                <article>
                    <img src="{{ asset('images/ribbon/red-pink-ribbon-roses.webp') }}" alt="Red and pink ribbon rose bouquet">
                    <h3>Red & Pink Ribbon Roses</h3>
                    <p>Ribbon tape bouquet</p>
                </article>
                <article>
                    <img src="{{ asset('images/flowers/fuzzy-sunflower.jpg') }}" alt="Handcrafted fuzzy-wire sunflower bouquet">
                    <h3>Sunflower Keepsake</h3>
                    <p>Bright handmade gift</p>
                </article>
            </div>
            <div class="section-action">
                <a class="primary-btn" href="{{ route('flowers') }}">Shop All Flowers</a>
                <p>Same-day delivery can be added for selected service areas.</p>
            </div>
        </section>

        <section id="occasions" class="occasion-section">
            <div class="section-heading">
                <p class="eyebrow dark">Occasions</p>
                <h2>Made For Your Moment</h2>
            </div>
            <div class="occasion-grid">
                <article style="--occasion-image: url('{{ asset('images/events/black-bows-birthday.jpg') }}')"><span>Birthday</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/floral-wedding-aisle.jpg') }}')"><span>Wedding</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/bride-to-be-pink.jpg') }}')"><span>Bridal Shower</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/baby-shower-pink-gold.jpg') }}')"><span>Baby Shower</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/bedroom-birthday-balloons.jpg') }}')"><span>Graduation</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/romantic-love-setup.jpg') }}')"><span>Anniversary</span></article>
                <article style="--occasion-image: url('{{ asset('images/events/wedding-candle-tablescape.jpeg') }}')"><span>Corporate Event</span></article>
            </div>
        </section>

        <section id="why" class="content-section why-section">
            <div class="section-heading">
                <p class="eyebrow dark">Why Choose Joya Atelier?</p>
                <h2>Designed with intention, finished with care.</h2>
            </div>
            <div class="why-grid">
                <article>
                    <h3>Designed With Intention</h3>
                    <p>Every setup is carefully styled around your vision, colors, venue, and occasion.</p>
                </article>
                <article>
                    <h3>Beautifully Detailed</h3>
                    <p>From the smallest floral arrangement to the full backdrop, every detail matters.</p>
                </article>
                <article>
                    <h3>Personalized</h3>
                    <p>Your theme, your personality, and your story guide the creative direction.</p>
                </article>
                <article>
                    <h3>Reliable</h3>
                    <p>Professional setup and coordination from first enquiry to final reveal.</p>
                </article>
            </div>
        </section>

        <section class="testimonial-section">
            <div class="section-heading light-heading">
                <p class="eyebrow">Testimonials</p>
                <h2>Our Clients Say It Best</h2>
            </div>
            <div class="testimonial-grid">
                <blockquote>
                    <span>5 stars</span>
                    "The decor was absolutely beautiful. Everything looked even better than I imagined."
                    <cite>- Sarah, Birthday Celebration</cite>
                </blockquote>
                <blockquote>
                    <span>5 stars</span>
                    "The flowers, backdrop, and table details worked together perfectly."
                    <cite>- Nia, Bridal Shower</cite>
                </blockquote>
                <blockquote>
                    <span>5 stars</span>
                    "Elegant, professional, and calm from planning to setup."
                    <cite>- Amina, Graduation Party</cite>
                </blockquote>
            </div>
        </section>

        <section id="booking" class="contact-section">
            <div class="contact-copy">
                <p class="eyebrow">Book Your Event</p>
                <h2>Planning Something Beautiful?</h2>
                <p>
                    Tell us what you are celebrating and let us create something unforgettable.
                    Share your event details or flower request and we will respond with the best next step.
                </p>
                <a class="whatsapp-panel-link" href="https://wa.me/254700000000">Chat on WhatsApp</a>
            </div>
            <form class="contact-form" action="#" method="post" data-whatsapp-form data-whatsapp-context="Joya Atelier event booking request">
                @csrf
                <label>
                    <span>Name</span>
                    <input type="text" name="name" placeholder="Your name">
                </label>
                <label>
                    <span>Phone Number</span>
                    <input type="tel" name="phone" placeholder="+254 700 000 000">
                </label>
                <label>
                    <span>Request Type</span>
                    <select name="request_type">
                        <option>Book an event</option>
                        <option>Order flowers</option>
                        <option>Event styling and flowers</option>
                        <option>Gift package</option>
                    </select>
                </label>
                <div class="form-row">
                    <label>
                        <span>Event / Delivery Date</span>
                        <input type="date" name="event_date">
                    </label>
                    <label>
                        <span>Number of Guests</span>
                        <input type="number" name="guests" placeholder="80">
                    </label>
                </div>
                <label>
                    <span>Location</span>
                    <input type="text" name="location" placeholder="Venue, delivery area, or city">
                </label>
                <label>
                    <span>Preferred Colors / Theme</span>
                    <input type="text" name="theme" placeholder="Ivory, blush, champagne gold">
                </label>
                <label>
                    <span>Budget Range</span>
                    <select name="budget">
                        <option>Still deciding</option>
                        <option>Below KSh 20,000</option>
                        <option>KSh 20,000 - 50,000</option>
                        <option>KSh 50,000 - 100,000</option>
                        <option>KSh 100,000+</option>
                    </select>
                </label>
                <fieldset>
                    <legend>Services Needed</legend>
                    <div class="checkbox-grid">
                        <label><input type="checkbox" name="services[]" value="Flowers"> Flowers</label>
                        <label><input type="checkbox" name="services[]" value="Balloons"> Balloons</label>
                        <label><input type="checkbox" name="services[]" value="Backdrop"> Backdrop</label>
                        <label><input type="checkbox" name="services[]" value="Tables"> Tables</label>
                        <label><input type="checkbox" name="services[]" value="Full setup"> Full setup</label>
                        <label><input type="checkbox" name="services[]" value="Other"> Other</label>
                    </div>
                </fieldset>
                <label>
                    <span>Inspiration Photo</span>
                    <input type="file" name="inspiration_photo" accept="image/*">
                </label>
                <label>
                    <span>Details</span>
                    <textarea name="details" rows="4" placeholder="Tell us about the mood, bouquet, package, or setup you want"></textarea>
                </label>
                <button type="submit">Start Your Booking</button>
            </form>
        </section>

        <section class="flower-cta">
            <div>
                <p class="eyebrow dark">Need Flowers Today?</p>
                <h2>Send someone a little joy.</h2>
            </div>
            <a class="primary-btn" href="{{ route('flowers') }}">Shop Bouquets</a>
        </section>

        <section class="social-section">
            <p class="eyebrow dark">Follow Our Latest Creations</p>
            <h2>See what Joya Atelier is creating next.</h2>
            <div class="social-links">
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.tiktok.com/">TikTok</a>
                <a href="https://www.facebook.com/">Facebook</a>
            </div>
        </section>

        <section class="promise-strip" aria-label="Joya Atelier promises">
            <article>
                <span class="promise-icon">01</span>
                <div>
                    <h2>Bespoke Designs</h2>
                    <p>Custom designs tailored to your vision</p>
                </div>
            </article>
            <article>
                <span class="promise-icon">02</span>
                <div>
                    <h2>Fresh & Beautiful</h2>
                    <p>Premium flowers for every special moment</p>
                </div>
            </article>
            <article>
                <span class="promise-icon">03</span>
                <div>
                    <h2>Quality & Detail</h2>
                    <p>Exceptional quality and attention to every detail</p>
                </div>
            </article>
            <article>
                <span class="promise-icon">04</span>
                <div>
                    <h2>Made With Love</h2>
                    <p>Passionate about creating memories that last</p>
                </div>
            </article>
        </section>
    </main>

    <footer class="site-footer">
        <div>
            <img class="footer-logo" src="{{ asset('images/brand/joya-logo-transparent-dark-text.png') }}" alt="Joya Atelier logo">
            <p>EVENTS &bull; DECOR &bull; FLORALS</p>
        </div>
        <div>
            <p>Phone: +254 700 000 000</p>
            <p>WhatsApp: +254 700 000 000</p>
            <p>Email: hello@joyaatelier.test</p>
            <p>Location: Nairobi, Kenya</p>
        </div>
        <div>
            <p><a href="{{ route('home') }}">Home</a> | <a href="{{ route('about') }}">About</a> | <a href="{{ route('events') }}">Events</a> | <a href="{{ route('flowers') }}">Flowers</a> | <a href="{{ route('home') }}#work">Gallery</a> | <a href="{{ route('booking') }}">Booking</a></p>
            <p>Instagram | TikTok | Facebook</p>
        </div>
    </footer>
</body>
</html>
