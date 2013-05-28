<?php get_header(); ?>
<div class="container_12" id="page_container">
    <div id="error_page_container">
      
      <article class="grid_8">
        <header>
            <h2>Page not found</h2>
        </header>
        <p>The page you are looking for cannot be found. If you know what you are looking for then try searching our website.</p>
        <form method="get" class="searchForm" action="<?php bloginfo('url'); ?>">
          <input type="text" placeholder="Search" name="s" class="searchBox" />
          <input type="submit" class="searchButton" value="Search" alt="<?php _e('Search'); ?>" title="<?php _e('Search'); ?>" />
        </form>

        <nav>
            <header>
                <h3>Quicklinks</h3>
            </header>
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="/produce-inspection-products">Products</a>
                    <ul>
                        <li><a href="/produce-inspection-products/commodity-reference-manual">Commodity Reference Manual</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/produce-inspection-services">Services</a>
                    <ul>
                        <li><a href="/produce-inspection-services/onsite-training-course">Onsite Training Course</a></li>
                        <li><a href="/produce-inspection-services/audit-services">Audit Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/produce-inspection-resources">Resources</a>
                    <ul>
                        <li><a href="/produce-inspection-resources/inspectors-blog">Inspectors' Blog</a></li>
                        <li><a href="/produce-inspection-resources/inspection-guidelines">Inspection Guidelines</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
      </article>
      <nav class="grid_4 sidebar_container">
        <?php get_sidebar(); ?>
      </nav>
    </div>
</div>
<?php get_footer(); ?>