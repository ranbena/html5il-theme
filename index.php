<?php get_header(); ?>
<?php $flag = 0 ?>

<?php if (have_posts()) : ?>
<div id="post-grid" class="post-grid">
    <?php while (have_posts()) : the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
    <?php if (has_post_thumbnail()) { ?>
        <div class="gridly-image featured-image"><a
                href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');  ?></a></div>
        <?php } ?>
        <?php if (get('featured_video', TRUE)) {
        $youtube = get('featured_video');
        echo '<div class="featured-video preview" data-youtube="'. $youtube .'" data-title="'.the_title('','',false).'" style="background-image:url(http://img.youtube.com/vi/' . $youtube . '/hqdefault.jpg)"><div class="play"></div></div>';
    } else {
            } ?>

        <div class="gridly-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>

            <p class="gridly-date"><a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')); ?></a>
             </p>
        </div>
    </div>
        <?php if ($flag == 0) {
        $flag = 1;
        $url = "https://api.meetup.com/2/events?key=597d711c1a263a1546671f5c1a67d42&sign=true&group_urlname=html5-il&page=1&status=past";
        $url2 = "https://api.meetup.com/2/events?key=597d711c1a263a1546671f5c1a67d42&sign=true&group_urlname=html5-il&page=1&status=upcoming";
        $curl = curl_init($url);
        $curl2 = curl_init($url2);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl2,CURLOPT_RETURNTRANSFER, 1);
        $return = curl_exec($curl);
        $return2 = curl_exec($curl2);
        curl_close($curl);
        curl_close($curl2);
        ?>
        <script>
            past_meetups = <?= $return ?>.results;
            future_meetups = <?= $return2 ?>.results;
        </script>
            <div class="grid-item" id="next">
                <?php if ( is_active_sidebar( 'second_post')) { ?>
                        <?php dynamic_sidebar( 'second_post' ); ?>
                <?php }  ?>
                <div class="past_event">
                    <h2>Our latest meetup was <span id="before_now"></span></h2>

                </div>
                <div class="next_event">
                    <h2>Our next meetup is <span id="from_now"></span></h2>
                    <a id="join" href="#" target="_blank">Join our next meetup</a>
                </div>
            </div>
        <?php }?>
    <?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>

<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>


<?php get_footer(); ?>
