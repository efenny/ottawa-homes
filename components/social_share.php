<div class="social-share <?php echo $args['classes'] ? $args['classes'] : ''; ?>">
  <ul>
    <li>
      <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>">
        <i class="fa fa-facebook"></i>
      </a>
    </li>
    <li>
      <a target="_blank"
        href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>">
        <i class="fa fa-twitter"></i>
      </a>
    </li>
    <li>
      <a target="_blank"
        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_the_permalink(); ?>">
        <i class="fa fa-linkedin"></i>
      </a>
    </li>
    <li>
      <a target="_blank"
        href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&amp;body=%20<?php echo get_the_permalink(); ?>">
        <i class="fa fa-envelope"></i>
      </a>
    </li>
  </ul>
</div>