<?php
add_action("init", "andd_menus");
add_action("wp_enqueue_scripts", "andd_scripts");
add_action("after_setup_theme", "andd_setup");
add_filter("excerpt_length", "andd_limit_excerpt", 999);

function andd_menus() {
  register_nav_menu('header', 'Barre du haut');
}

function andd_scripts() {
  wp_enqueue_style("main", get_template_directory_uri(). "/dist/css/app.css", [], "1.0.0", "all");
  wp_enqueue_style("gfont", "https://fonts.googleapis.com/css?family=Roboto:400|Raleway:400,600,700", [], "1.0.0", "all");

  wp_enqueue_script("mainjs", get_template_directory_uri(). "/dist/js/app.js", [], "1.0.0", true);
}

function andd_setup() {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}

function andd_limit_excerpt($length) {
  return 50;
}

class ANDD_MenuWalker extends Walker_Nav_Menu {
  private $lastItemID = null;
  public function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0) {
    $idField = $this->db_fields['id'];
    $output .= sprintf(
      "\n<li class='blb-navbar__list-item'><a class='%s' href='%s'>%s</a></li>\n",
      $this->lastItemID === $object->$idField ? 'blb-btn blb-btn--primary' : 'blb-navbar__list-item-link',
      $object->url,
      $object->title
    );
  }

  public function end_lvl(&$output, $depth = 0, $args = array()) {
    $output .= '</ul>';
  }

  public function walk($elements, $max_depth, ...$args) {
    $idField = $this->db_fields['id'];
    $this->lastItemID = $elements[count($elements)]->$idField;
    return parent::walk($elements, $max_depth);
  }
}
