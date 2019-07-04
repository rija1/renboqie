<?php /* Template Name: NoSidebar */ ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="section section-page-title">
<!--            <div class="container">-->
                <div class="section-title">
                    <div class="gutter">
                        <h1><?php the_title(); ?></h1>
                        <?php //the_excerpt(); ?>
                    </div>
                </div>
<!--            </div>-->
    </section> <!--  END section-page-title  -->
    <div class="section section-blog">
        <div class="container">
                <div class="inner-page-container ">
                    <div class="gutter">
                        <article class="single-post">
                            <div class="article-text">
                                <?php the_content(); ?>
                            </div>
                            <p><?php posts_nav_link(); ?></p>
                            <div class="padinate-page"><?php wp_link_pages(); ?></div>
                            <div class="comments">
                                <?php comments_template(); ?>
                            </div> <!--  END comments  -->
                        </article>
                    </div>
            </div>
        </div> <!--  END container  -->
    </div> <!--  END section-blog  -->
<?php endwhile; ?>
<?php get_footer(); ?>