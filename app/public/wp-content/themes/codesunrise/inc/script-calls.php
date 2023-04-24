<?php
function ca_custom_scripts()
{
  $page_style_array = array(
    'home' => '',
  );
  ca_enqueue_page_style($page_style_array);
}

function ca_enqueue_page_style($page_style_array)
{
  $THEME_PATH = get_template_directory_uri();

  foreach ($page_style_array as $slug => $dependency) {
    $dependency = $dependency ? $dependency : 'base-theme-style';
    if (is_page_template('pages/page-' . $slug . '.php')) {
      wp_enqueue_style( $slug . '-css', $THEME_PATH . '/css/pages/' . $slug . '.css', array($dependency), _S_VERSION);
    }
  }
}

add_action('wp_enqueue_scripts', 'ca_custom_scripts');