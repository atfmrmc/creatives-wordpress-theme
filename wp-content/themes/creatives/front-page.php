<?php get_header(); ?>

<!-- Hero Section -->

<section id="hero">
    <div class="title">
        <h1>
            <?php echo get_bloginfo('name'); ?>
        </h1>
        <p>
            <?php echo get_bloginfo('description'); ?>
        </p>
    </div>

    <div class="scrollDownBtn">
        <p>Scroll Down</p>
        <a href="#features"><i class="fa-solid fa-chevron-down"></i></a>
    </div>
</section>

<!-- Features Section -->

<section id="features">
    <h2>We Are An Awesome Agency</h2>
    <div class="cardList">
        <div class="cardListCard">
            <div class="cardListIcon"><i class="fa-regular fa-pen-to-square"></i></div>
            <h3>FEATURE ONE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div class="cardListCard">
            <div class="cardListIcon"><i class="fa-regular fa-pen-to-square"></i></div>
            <h3>FEATURE TWO</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div class="cardListCard">
            <div class="cardListIcon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <h3>FEATURE THREE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div class="cardListCard">
            <div class="cardListIcon"><i class="fa-regular fa-comment"></i></div>
            <h3>FEATURE FOUR</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </div>
</section>

<!-- Recent Articles Section -->

<section id="recent">
    <?php
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 2,
      'post_status' => 'publish'
    ));
    foreach ($recent_posts as $post): ?>
        <article>
            <main>
                <div class="articlesInformations">
                    <p>
                        <?php
                        $date = new DateTime($post['post_date']);
                        echo $date->format('M j, Y');
                        ?>
                    </p>
                    <hr>
                    <p>
                        <?php
                        echo 'In ' . get_the_category_list(', ', '', $post['ID']);
                        ?>
                    </p>
                </div>
                <h2>
                    <?php echo $post['post_title']; ?>
                </h2>
                <p>
                    <?php echo $post['post_content']; ?>
                </p>
            </main>
            <aside>
                <img src="<?php echo get_the_post_thumbnail_url($post['ID']); ?>" alt="<?php echo $post['post_title']; ?>">
            </aside>
        </article>
    <?php endforeach; ?>
</section>

<!-- Extra Content Section -->

<section id="extraContent">
    <div class="extraContentCard">
        <div>
            <i class="fa-regular fa-pen-to-square"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id porta.</p>
    </div>
    <div class="extraContentCard">
        <div>
            <i class="fa-regular fa-pen-to-square"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id porta.</p>
    </div>
</section>

<!-- Contact Section -->

<section id="contactForm">
    <h2>We'd love to hear about your project.</h2>
    <?php echo do_shortcode('[contact-form-7 id="24" title="Default"]'); ?>
</section>

<?php get_footer(); ?>