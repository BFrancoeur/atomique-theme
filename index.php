<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atomique
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="hero container">
            <div class="inner">
                <h1 class="hero-msg">Unique Sales Prop</h1>
                <h3 class="supporting-usp-msg">Supporting Message</h3>
                <button class="btn cta-btn">CTA Button</button>
            </div>
        </section>

        <section class="logo-bar container">
            <div class="inner">
                <span class="client-logo">Client Logo</span>
                <span class="client-logo">Client Logo</span>
                <span class="client-logo">Client Logo</span>
                <span class="client-logo">Client Logo</span>
                <span class="client-logo">Client Logo</span>
                <span class="client-logo">Client Logo</span>
            </div>
        </section>

        <section class="main-services container">
            <div class="inner">
                <div class="card-svc">
                    <div class="icon">Service Icon</div>
                    <div class="icon">Service Icon</div>
                    <div class="icon">Service Icon</div>
                    <div class="icon">Service Icon</div>
                </div>
            </div>
        </section>

        <section class="testimonials container">
            <div class="inner">
            <h2 class="section-heading">Testimonials</h2>
                <div class="card-testimonial">
                    <img src="" alt="" class="t-headshot">
                    <div class="testimonial-info"><span class="test-name">First Name Last Name</span><span class="job-title">Job Title</span></div>
                    <div class="testimonial-text">Testimonial text content</div>
                </div>
                <div class="card-testimonial">
                    <img src="" alt="" class="t-headshot">
                    <div class="testimonial-info"><span class="test-name">First Name Last Name</span><span class="job-title">Job Title</span></div>
                    <div class="testimonial-text">Testimonial text content</div>
                </div>
                <div class="card-testimonial">
                    <img src="" alt="" class="t-headshot">
                    <div class="testimonial-info"><span class="test-name">First Name Last Name</span><span class="job-title">Job Title</span></div>
                    <div class="testimonial-text">Testimonial text content</div>
                </div>
            </div>
        </section>

        <section class="who-we-serve container">
            <div class="inner">
                <h2 class="section-heading">Who We Serve</h2>
                <p class="who-we-serve body-text">
                    Who we serve body text. 
                </p>
            </div>
        </section>

        <section class="mission-stmt container">
            <div class="inner">
                <h2 class="section-heading">Mission Statement</h2>
                <p class="mission-stmt body-text">Mission statement body text</p>
            </div>
        </section>

        <section class="google-reviews container">
            <div class="inner">
                <h2 class="google-reviews section-heading">Google Reviews</h2>
                <!-- Embed Google Reviews widget here -->
            </div>
        </section>

        <section class="call-to-action form container">
            <div class="inner">
                <h3 class="cta-message"></h3>
                <button class="btn cta-btn">Get Started</button>
            </div>
        </section>
		
	</main><!-- #main -->

<?php
get_footer();
