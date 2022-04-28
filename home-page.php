<?php 
    /*
    Template Name: Home page
    */
?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!-- custom field fo the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
                <div class="blocker"></div>

        </div> <!--container end-->
    </section>



    <section class="container-fluid articlesbg">
        <div class="container">

            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimage'); ?>" alt="woman">
                    <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                    <p class="date"><?php the_field('articledate'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt'); ?></p>
                    <a class="readmore" href="<?php the_field('readmore'); ?>">CONTINUE READING </a>
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimagemiddle'); ?>" alt="woman">
                    <h4 class="article-title"><?php the_field('articletitlemiddle'); ?></h4>
                    <p class="date"><?php the_field('articledatemiddle'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerptmiddle'); ?></p>
                    <a class="readmore" href="<?php the_field('readmoremiddle'); ?>">CONTINUE READING </a>
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimageend'); ?>" alt="woman">
                    <h4 class="article-title"><?php the_field('articletitleend'); ?></h4>
                    <p class="date"><?php the_field('articledateend'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerptend'); ?></p>
                    <a class="readmore" href="<?php the_field('readmoreend'); ?>">CONTINUE READING </a>
                </div>

            </div> <!--row end-->

        </div> <!--container end-->
    </section>

    <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->