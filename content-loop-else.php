<?php endwhile; else: ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php comments_number( '0 comments', 'only 1 comment', '% comments' ); ?>
<?php endif; ?>