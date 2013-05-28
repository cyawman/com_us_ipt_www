<?php get_header(); ?>
<div class="container_12" id="page_container">
    <div id="front_page_container">
      <div class="grid_12 banner_container">
        <section class="banner">
          <h2>Inspectors' Blog</h2>
          <p>A discussion group for the fruit and vegetable insepection community.</p>
          <a href="/produce-inspection-resources/inspectors-blog" class="learnmore">Learn More <span>>></span></a>
        </section>
      </div>
      <section class="grid_4">
        <h2>Products</h2>
        <p>We are proud to announce the arrival of the 2012 Commodity Reference Manual. Over 60 of the most common fruits and vegetables. This manual is packed full of information in a pocket-sized and durable design.</p>
        <a href="/produce-inspection-products" class="learnmore">Learn More <span>>></span></a>
      </section>
      <section class="grid_4">
        <h2>Services</h2>
        <p>Let us train your staff at your location with the commodities of your choice. We have over 30 years of USDA experience. Courses include classroom lectures and hands-on training specialized towards your needs.</p>
        <a href="/produce-inspection-services" class="learnmore">Learn More <span>>></span></a>
      </section>
      <section class="grid_4">
        <h2>Resources</h2>
        <p>Explore everything we have to offer. International Produce Training is the best blog on the Internet for the produce inspection community. Keep the dialogue going; ask a question or submit a comment.</p>
        <a href="/produce-inspection-resources" class="learnmore">Learn More <span>>></span></a>
      </section>
      <section class="grid_12 watermelon_container">
        <blockquote>When I began my produce inspection career, in 1976, I never envisioned over 30 years later I would be in a position to teach others using my produce experience.</blockquote>
        <cite><a href="/company/about-us">Tom Yawman</a>, Founder of International Produce Training</cite>
      </section>
      <section class="grid_4">
        <h2>Inspectors' Blog</h2>
        <nav>
            <h3 class="list-title">Latest Blog Posts</h3>
            <ul>
            <?php
              $lastposts = get_posts('numberposts=10');
              foreach($lastposts as $post) :
                setup_postdata($post); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
        </nav>
        <hr class="separator" />
        <nav>
            <h3 class="list-title">Categories</h3>
            <ul>
              <?php wp_list_categories('show_count=0&title_li='); ?>
            </ul>
        </nav>
      </section>
      <section class="grid_4">
        <h2>Inspectors' Book</h2>
        <a href="/produce-inspection-products/commodity-reference-manual" class="crm-book-block"><img src="/wp-content/themes/ipt/img/commodity-reference-manual.jpg" alt="Commodity Reference Manual" /></a>
        <h3>Commodity Reference Manual</h3>
        <p>This handy reference is a must have for every inspector. Quickly find U.S. and good delivery tolerances, defect descriptions, general quantity terms and storage tips for 60 of the most common fruit and vegetables.</p>
        <a href="/produce-inspection-products/commodity-reference-manual" class="learnmore">Learn More <span>>></span></a>
      </section>
      <section class="grid_4">
        <h2>Onsite Training</h2>
        <h3>Choose the Commodities</h3>
        <p>International Produce Training offers personalized fresh produce inspection training courses for your staff. The instruction design will include training on only the commodities you feel are needed.</p>
        <hr class="separator" />
        <h3>Choose the Location</h3>
        <p>Unlike other produce inspection training programs, International Produce Training travels to your place of business and teaches your staff a personalized curriculum based on your business needs.</p>
      </section>
    </div>
</div>
<?php get_footer(); ?>