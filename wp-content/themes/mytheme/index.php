<?php get_header(); ?>
<div class="row">

        <div class="col-md-8 col-sm-12">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h3 class="mb-3 pb-2 border-bottom"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <div class="row">
              <div class="col-md-12 col-lg-6 mb-3">
                <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid'));?>
                 </a>
              </div>
              <div class="col-md-12 col-lg-6 mb-3">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde eum repellat, facere, ipsa dolor a pariatur quod voluptatem soluta maiores ea labore, vel quasi facilis aut? Rem consequatur architecto ea quasi qui ullam quaerat sit nostrum, necessitatibus error laboriosam? Corporis eos mollitia, reprehenderit nesciunt vitae magni ducimus voluptatem rem cumque.</p>
              </div>
            </div>
            <p class="text-muted">Publicado em: <span><?php echo get_the_date('d/m/y');?></span></p>
          </div>

      <?php endwhile; ?>
<?php else : get_404_template();  endif; ?>
          
          <div type="button">
          <?php next_posts_link( 'Mais Antigos' ); ?> <?php previous_posts_link( 'Mais Recentes' ); ?>
          </div>

        </div>

        <?php get_sidebar();?>
      </div>

    </div>

    <div class="w-100 bg-secondary border-top border-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col py-5 text-center text-white">
            <h5>Meu primeiro tema de WordPress</h5>
            <p class="mb-0">Leonel Cassule Web Developer with WordPress</p>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>