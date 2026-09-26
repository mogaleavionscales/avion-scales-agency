<?php get_header(); ?>
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <p class="eyebrow">WE BUILD. WE SCALE.</p>
                <h1>Grow your business with a high-converting website</h1>
                <p class="hero-copy">Avion Scales designs modern, custom WordPress sites and digital marketing campaigns that make local businesses look credible and capture real leads.</p>
                <a class="button" href="#contact">Start Your Project</a>
            </div>
            <div class="growth-card">
                <div class="card-top">
                    <span>Performance Overview</span>
                    <span class="live">• LIVE</span>
                </div>
                <div class="chart-wrap">
                    <span class="bar bar-one"></span>
                    <span class="bar bar-two"></span>
                    <span class="bar bar-three"></span>
                </div>
                <div class="logo-chip">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section section-soft">
        <div class="container">
            <div class="section-heading center">
                <p class="eyebrow">WHAT WE DO</p>
                <h2>Websites & ads built to drive revenue</h2>
                <p>We give your business a clear online presence that builds trust, drives customer inquiries, and turns website visits into conversions.</p>
            </div>
            <div class="services">
                <article class="service-card">
                    <span class="service-number">01</span>
                    <h3>High-Impact Web Design</h3>
                    <p>Custom, mobile-friendly WordPress websites crafted specifically for your industry to showcase your work and convert visitors.</p>
                </article>
                <article class="service-card">
                    <span class="service-number">02</span>
                    <h3>Targeted Ads & Lead Gen</h3>
                    <p>Meta and Google ad campaigns optimized to place your services in front of active local customers ready to buy.</p>
                </article>
                <article class="service-card">
                    <span class="service-number">03</span>
                    <h3>Business Setup & Tech Support</h3>
                    <p>Domain configuration, custom business email setups, and ongoing technical maintenance so you can focus on running your business.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="packages" class="section">
        <div class="container">
            <div class="section-heading center">
                <p class="eyebrow">PACKAGES</p>
                <h2>Three simple ways to work with us</h2>
                <p>Choose the level of growth your business needs today, from a straightforward launch setup to complete web and marketing management.</p>
            </div>
            <div class="packages">
                <article class="package-card">
                    <span class="package-kicker">STARTER</span>
                    <h3>Launch Package</h3>
                    <p>A fast, professional single-page web presence designed for high conversion.</p>
                    <ul>
                        <li>Custom single-page responsive layout</li>
                        <li>Lead capture form & WhatsApp button</li>
                        <li>Basic SEO & Google Maps integration</li>
                    </ul>
                </article>
                <article class="package-card featured">
                    <span class="package-kicker">RECOMMENDED</span>
                    <h3>Growth Package</h3>
                    <p>A complete multi-page site paired with initial ad campaign setup for maximum reach.</p>
                    <ul>
                        <li>Up to 5 custom website pages</li>
                        <li>Google Ads or Meta Ads campaign setup</li>
                        <li>Professional business email configuration</li>
                    </ul>
                </article>
                <article class="package-card">
                    <span class="package-kicker">CUSTOM</span>
                    <h3>Scale Package</h3>
                    <p>Full web design, continuous ad management, and dedicated maintenance support.</p>
                    <ul>
                        <li>Full custom web design & development</li>
                        <li>Ongoing ad optimization & monthly reporting</li>
                        <li>Website maintenance, updates & backups</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="contact" class="section section-soft">
        <div class="container contact">
            <div class="contact-copy">
                <p class="eyebrow">YOUR NEXT STEP</p>
                <h2>Let’s build something great together.</h2>
                <p>Tell us about your business goals, and we'll map out the ideal strategy to get you there.</p>
                <p><strong>Add your details to get started:</strong></p>
            </div>
            <div>
                <?php echo do_shortcode('[avion_lead_form]'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
