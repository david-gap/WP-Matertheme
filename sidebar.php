<?php
/**
 * Sidebar File
 *
 * @author      David Voglgsang
 * @version     1.1.1
 *
*/

$obj = get_queried_object();
// page options
$options = $obj && property_exists($obj, 'ID') ? prefix_template::PageOptions($obj->ID) : array();

if(!in_array('sidebar', $options)): ?>
  <aside id="sidebar">
  </aside>
<?php endif; ?>
