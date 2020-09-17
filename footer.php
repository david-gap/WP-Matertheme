<?php
/**
 * @author      David Voglgsang
 * @version     1.3.1
*/

$obj = get_queried_object();
// page options
$options = $obj && property_exists($obj, 'ID') ? prefix_template::PageOptions($obj->ID) : array();
// custom content before footer
prefix_template::ContentBlock(prefix_template::$template_footer_before);
?>
    </main>
    <?php if(prefix_template::$template_footer_active == 1 && !in_array('footer', $options)): ?>
      <footer>
          <?php echo prefix_template::FooterContent(); ?>
      </footer>
    <?php endif; ?>
    <?php
    wp_footer();
    ?>
  </body>
</html>
