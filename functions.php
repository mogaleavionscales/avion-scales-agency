<?php
function avion_scales_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'avion-scales'),
    ));
}
add_action('after_setup_theme', 'avion_scales_setup');

function avion_scales_assets() {
    wp_enqueue_style(
        'avion-scales-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'avion-scales-style',
        get_stylesheet_uri(),
        array('avion-scales-fonts'),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'avion_scales_assets');

function avion_scales_lead_form() {
    if (
        !empty($_POST['avion_lead_nonce']) &&
        wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['avion_lead_nonce'])),
            'avion_lead_submit'
        )
    ) {
        $name  = sanitize_text_field(wp_unslash($_POST['business_name'] ?? ''));
        $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
        $goal  = sanitize_text_field(wp_unslash($_POST['goal'] ?? ''));

        if ($name && is_email($email)) {
            $subject = 'New Avion Scales lead: ' . $name;
            $message = "Business: {$name}\n";
            $message .= "Email: {$email}\n";
            $message .= "Primary goal: {$goal}";

            wp_mail(
                get_option('admin_email'),
                $subject,
                $message,
                array('Reply-To: ' . $email)
            );

            return '<p class="form-note">Thank you — we will be in touch shortly.</p>';
        }
    }

    ob_start();
    ?>
    <form class="lead-form" method="post">
        <h3>Start your website project</h3>

        <?php wp_nonce_field('avion_lead_submit', 'avion_lead_nonce'); ?>

        <label for="business_name">Business name</label>
        <input
            id="business_name"
            name="business_name"
            required
            placeholder="Your business name"
        >

        <label for="email">Email address</label>
        <input
            id="email"
            name="email"
            type="email"
            required
            placeholder="you@business.co.za"
        >

        <label for="goal">What do you need most?</label>
        <select id="goal" name="goal">
            <option>Web design</option>
            <option>Ads and marketing</option>
            <option>Website and ads</option>
            <option>Business email and setup</option>
        </select>

        <button class="button" type="submit">
            Request My Free Strategy
        </button>

        <p class="form-note">
            We will respond with the best next step for your business.
        </p>
    </form>
    <?php

    return ob_get_clean();
}
add_shortcode('avion_lead_form', 'avion_scales_lead_form');
