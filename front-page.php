<?php
get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['avion_lead_nonce'])) {
    if (wp_verify_nonce($_POST['avion_lead_nonce'], 'submit_lead_form')) {
        $name    = sanitize_text_field($_POST['lead_name']);
        $email   = sanitize_email($_POST['lead_email']);
        $message = sanitize_textarea_field($_POST['lead_message']);
        
        $to      = get_option('admin_email');
        $subject = 'New Lead from Avion Scales Website';
        $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>");
        
        if (wp_mail($to, $subject, $body, $headers)) {
            $form_success = "Thank you! Your message has been sent successfully.";
        } else {
            $form_error = "There was an issue sending your inquiry. Please try again.";
        }
    }
}
?>

<section class="hero-section">
    <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
        <h1 style="font-size: 3rem; margin-bottom: 1rem;">Scale Your Agency to New Heights</h1>
        <p style="font-size: 1.25rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Data-driven growth, streamlined web operations, and conversion-focused design built specifically for modern enterprises.
        </p>
        <a href="#contact" class="btn-primary" style="font-size: 1.1rem; padding: 1rem 2rem;">Claim Free Consultation</a>
    </div>

    <svg class="chart-bg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <rect class="chart-bar" x="50" y="100" width="40" height="50" fill="#2563eb" style="animation-delay: 0.1s;" />
        <rect class="chart-bar" x="130" y="80" width="40" height="70" fill="#2563eb" style="animation-delay: 0.3s;" />
        <rect class="chart-bar" x="210" y="50" width="40" height="100" fill="#2563eb" style="animation-delay: 0.5s;" />
        <rect class="chart-bar" x="290" y="30" width="40" height="120" fill="#2563eb" style="animation-delay: 0.7s;" />
        <rect class="chart-bar" x="370" y="10" width="40" height="140" fill="#2563eb" style="animation-delay: 0.9s;" />
    </svg>
</section>

<section id="services" class="grid-container">
    <div class="card">
        <h3>Performance Web Architecture</h3>
        <p>Custom WordPress engineering designed for speed, security, and effortless Content Management System control.</p>
    </div>
    <div class="card">
        <h3>Conversion Optimization</h3>
        <p>User experience layouts structured around clear visual hierarchies and immediate call-to-action conversion paths.</p>
    </div>
    <div class="card">
        <h3>Growth Analytics</h3>
        <p>Transparent scaling metrics with real-time reporting integrations so you track every single incoming business lead.</p>
    </div>
</section>

<section id="contact" style="max-width: 600px; margin: 4rem auto; padding: 0 2rem;">
    <div class="card">
        <h2 style="text-align: center; margin-bottom: 1.5rem;">Start Your Scaling Process</h2>
        
        <?php if (!empty($form_success)): ?>
            <div style="background: #dcfce7; color: #166534; padding: 1rem; border-radius: 6px; margin-bottom: 1rem;">
                <?php echo esc_html($form_success); ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($form_error)): ?>
            <div style="background: #fee2e2; color: #991b1b; padding: 1rem; border-radius: 6px; margin-bottom: 1rem;">
                <?php echo esc_html($form_error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="#contact">
            <?php wp_nonce_field('submit_lead_form', 'avion_lead_nonce'); ?>
            <div class="form-group">
                <label for="lead_name">Full Name</label>
                <input type="text" id="lead_name" name="lead_name" required>
            </div>
            <div class="form-group">
                <label for="lead_email">Email Address</label>
                <input type="email" id="lead_email" name="lead_email" required>
            </div>
            <div class="form-group">
                <label for="lead_message">Message</label>
                <textarea id="lead_message" name="lead_message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn-primary" style="width: 100%;">Send Inquiry</button>
        </form>
    </div>
</section>

<?php
get_footer();
