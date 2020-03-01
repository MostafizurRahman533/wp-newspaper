
<?php get_header(); ?>

<div class="wrapper">
  <div id="intro">
    <ul>
      <li style="background: transparent;"><a href="<?php the_permalink(); ?>">
        <h4> Least Post Image</h4><img <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
      <li style="background: transparent;"></li>
      <li style="background: transparent;"></li>
      <li style="background: transparent;"></li></a>
      <li class="featured">
        <h2>Latest Featured Information</h2>
        <p class="imgholder"><img src="<?php echo get_template_directory_uri();?>/images/demo/280x70.gif" alt="" /></p>
        <p>This is a free website template from <a href="<?php echo get_template_directory_uri();?>/http://www.os-templates.com/">OS Templates</a> and is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
        <p class="readmore"><a href="#">Continue Reading This Article &raquo;</a></p>
      </li>
    </ul>
  </div>
</div>
<div class="wrapper"> 


<div style="float: right;width: 30%;margin-top: 100px;  ">
  <h2>Cetagory</h2>
  <?php
  $args = array(
    'orderby' => 'slug',
    'parent' => 0
  );

  $categories = get_categories( $args );
  foreach ( $categories as $category ) {
    echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-astreisk"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
   }
?>

</div>
  <!-- Content Box -->
  <div class="homecontent">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
        <li style="margin-bottom: 20px; ">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="article-info box">
            <p class="f-right"><?php comments_popup_link('0 Comments >', '1 Comments >','% Comments >'); ?></p>
            <p class="f-left"><?php the_time('F j, Y'); ?> | Posted by <a href="#"><?php the_author(); ?></a></p>
          </div>
            <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
            <?php the_excerpt();  ?>
          </p>
           <p class="more"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
          <br/>
        </li>
<!----------------------->
    <?php endwhile; else: ?>
    <p><?php esc_html_e('Sorry No Result found'); ?></p>
<?php endif; ?>




    <div class="clear"></div>
    <ul>
      <li>
        <h2 class="title"><img src="<?php echo get_template_directory_uri();?>/images/demo/64x64.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Read More &raquo;</a></p>
      </li>
      <li>
        <h2 class="title"><img src="<?php echo get_template_directory_uri();?>/images/demo/64x64.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Read More &raquo;</a></p>
      </li>
      <li class="last">
        <h2 class="title"><img src="<?php echo get_template_directory_uri();?>/images/demo/64x64.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Read More &raquo;</a></p>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
  <!-- / Content Box --> 
</div>
<div class="wrapper col2">
  <div id="projects">
    <h2>Our Latest Projects</h2>
    <ul>
      <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/demo/290x290.gif" alt="" /><strong>Read More About This Project &raquo;</strong></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/demo/290x290.gif" alt="" /><strong>Read More About This Project &raquo;</strong></a></li>
      <li class="last"><a href="#"><img src="images/demo/290x290.gif" alt="" /><strong>Read More About This Project &raquo;</strong></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer();?>