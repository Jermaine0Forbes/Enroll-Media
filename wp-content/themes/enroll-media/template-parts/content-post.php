
    <?php
    global $post;
    $args =
     array(
         'posts_per_page' => 5,
         'post_type' => 'post',
         'orderby'  => 'date',
    	'order' => 'DESC',
      );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <div class="border border-left-0 border-right-0">
    	<h3>
    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	</h3>
        <h5>Date : <?php  $d = new DateTime($post->post_date); echo $d->format("M d Y") ; ?></h5>
        <p><?php the_content(); ?></p>
        <p > Comments: <?php echo  $post->the_comment_count; ?></p>
    </div>
    <?php endforeach;
    wp_reset_postdata();?>
