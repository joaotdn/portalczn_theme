<?php global $post; ?>
    <div class="width-100 float-left margin-bottom-1 post-author" role="main">
        <div class="float-left">
            <span class="margin-0"><strong><?php the_field( 'portalczn_post_font', $post->ID ); ?></strong></span><br>
            <span><?php the_time( 'j \d\e F, Y' ); ?> | <?php the_time( 'G:i' ); ?>hrs</span>
        </div>
        <div class="float-right">
            <a href="#" class="read-post display-inline-block margin-right-1" title="Ler matéria">
                <i id="speak" class="fas fa-volume-up"></i>
                <i id="silence" class="fas fa-volume-mute hide"></i>
            </a>
            <a href="#" title="Aumentar fonte"
               class="display-inline-block font-plus"><i
                        class="fas fa-font"></i> +</a>
            <a href="#" title="Diminuir fonte"
               class="display-inline-block font-minus"><i
                        class="fas fa-font"></i> -</a>
        </div>
    </div>

    <div id="post-text" class="width-100">
		<?php the_content(); ?>
    </div>

<?php
$keywords = get_the_tags( $post->ID );
if ( $keywords ):
	?>
    <div class="width-100 float-left post-tags margin-bottom-2 margin-top-2">
        <header>
            <strong>O que sabemos sobre:</strong>
        </header>
        <ul class="menu">
			<?php
			foreach ( $keywords as $tag ):
				?>
                <li>
                    <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="button small"
                       title="<?php echo $tag->name; ?>">
                        <i class="fas fa-tag"></i> <?php echo $tag->name; ?></a>
                </li>
			<?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>