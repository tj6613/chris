<?php get_header(); ?>

<?php
function abv_field($name, $fallback = '') {
    if (function_exists('get_field')) {
        $value = get_field($name);
        if (!empty($value)) {
            return $value;
        }
    }
    return $fallback;
}

$template_uri = get_template_directory_uri();

$slides = array(
    array(
        'image' => abv_field('slide_1_image', $template_uri . '/images/slide-1.jpg'),
        'title' => abv_field('slide_1_title', 'Secure Motorbike Storage'),
        'text' => abv_field('slide_1_text', 'Safe, convenient and reliable storage for your motorbike.'),
        'button_text' => abv_field('slide_1_button_text', 'Book Storage'),
        'button_link' => abv_field('slide_1_button_link', home_url('/contact-us/')),
    ),
    array(
        'image' => abv_field('slide_2_image', $template_uri . '/images/slide-2.jpg'),
        'title' => abv_field('slide_2_title', 'Protect Your Bike'),
        'text' => abv_field('slide_2_text', 'Flexible storage options for commuters, riders and businesses.'),
        'button_text' => abv_field('slide_2_button_text', 'View Pricing'),
        'button_link' => abv_field('slide_2_button_link', home_url('/pricing/')),
    ),
    array(
        'image' => abv_field('slide_3_image', $template_uri . '/images/slide-3.jpg'),
        'title' => abv_field('slide_3_title', 'Easy Access'),
        'text' => abv_field('slide_3_text', 'Store your bike safely and collect it when you need it.'),
        'button_text' => abv_field('slide_3_button_text', 'Our Services'),
        'button_link' => abv_field('slide_3_button_link', home_url('/bike-storage/')),
    ),
);

$services = array(
    array(
        'image' => abv_field('service_1_image', $template_uri . '/images/service-1.jpg'),
        'title' => abv_field('service_1_title', 'Secure Storage'),
        'text' => abv_field('service_1_text', 'Keep your motorbike protected in a safe and monitored storage space.'),
        'link' => abv_field('service_1_link', home_url('/bike-storage/')),
    ),
    array(
        'image' => abv_field('service_2_image', $template_uri . '/images/service-2.jpg'),
        'title' => abv_field('service_2_title', 'Flexible Plans'),
        'text' => abv_field('service_2_text', 'Choose daily, weekly or monthly storage options to suit your needs.'),
        'link' => abv_field('service_2_link', home_url('/pricing/')),
    ),
    array(
        'image' => abv_field('service_3_image', $template_uri . '/images/service-3.jpg'),
        'title' => abv_field('service_3_title', 'Easy Access'),
        'text' => abv_field('service_3_text', 'Convenient access for commuters, local riders and regular motorcyclists.'),
        'link' => abv_field('service_3_link', home_url('/bike-storage/')),
    ),
    array(
        'image' => abv_field('service_4_image', $template_uri . '/images/service-4.jpg'),
        'title' => abv_field('service_4_title', 'Book Online'),
        'text' => abv_field('service_4_text', 'Request a space or contact us quickly through the website.'),
        'link' => abv_field('service_4_link', home_url('/contact-us/')),
    ),
);
?>

<main>

    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($slides as $index => $slide) : ?>
                <li data-target="#homeCarousel" data-slide-to="<?php echo esc_attr($index); ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
            <?php endforeach; ?>
        </ol>

        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide) : ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" style="background-image: url('<?php echo esc_url($slide['image']); ?>');">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-caption">
                        <h2><?php echo esc_html($slide['title']); ?></h2>
                        <p><?php echo esc_html($slide['text']); ?></p>
                        <?php if (!empty($slide['button_text']) && !empty($slide['button_link'])) : ?>
                            <a href="<?php echo esc_url($slide['button_link']); ?>" class="btn btn-primary btn-lg">
                                <?php echo esc_html($slide['button_text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <?php foreach ($services as $service) : ?>
                    <div class="col-md-3">
                        <div class="service-card">
                            <?php if (!empty($service['image'])) : ?>
                                <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
                            <?php endif; ?>

                            <div class="service-card-body">
                                <h3><?php echo esc_html($service['title']); ?></h3>
                                <p><?php echo esc_html($service['text']); ?></p>

                                <?php if (!empty($service['link'])) : ?>
                                    <a href="<?php echo esc_url($service['link']); ?>" class="btn btn-outline-primary btn-sm">Learn More</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2><?php echo esc_html(abv_field('about_title', 'Reliable Motorbike Storage for Peace of Mind')); ?></h2>
                    <div class="lead">
                        <?php echo wp_kses_post(abv_field('about_text', 'All Bikes Vault provides secure and convenient motorbike storage for riders who need a safer place to keep their bike.')); ?>
                    </div>

                    <?php
                    $about_button_text = abv_field('about_button_text', 'Find Out More');
                    $about_button_link = abv_field('about_button_link', home_url('/about-us/'));
                    ?>

                    <?php if (!empty($about_button_text) && !empty($about_button_link)) : ?>
                        <a href="<?php echo esc_url($about_button_link); ?>" class="btn btn-primary">
                            <?php echo esc_html($about_button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                    <?php $about_image = abv_field('about_image', $template_uri . '/images/about.jpg'); ?>
                    <?php if (!empty($about_image)) : ?>
                        <img class="about-image" src="<?php echo esc_url($about_image); ?>" alt="Motorbike storage">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2><?php echo esc_html(abv_field('cta_title', 'Need Secure Motorbike Storage?')); ?></h2>
            <p><?php echo esc_html(abv_field('cta_text', 'Contact us today to check availability and pricing.')); ?></p>

            <?php
            $cta_button_text = abv_field('cta_button_text', 'Contact Us');
            $cta_button_link = abv_field('cta_button_link', home_url('/contact-us/'));
            ?>

            <?php if (!empty($cta_button_text) && !empty($cta_button_link)) : ?>
                <a href="<?php echo esc_url($cta_button_link); ?>" class="btn btn-light btn-lg">
                    <?php echo esc_html($cta_button_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
