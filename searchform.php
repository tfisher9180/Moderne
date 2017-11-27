<?php
/**
 * The template for the search form
 *
 *
 * @package Moderne
**/
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="container">
    <label>
      <span class="screen-reader-text"><?php esc_html_e( 'Search: Type and press enter.', 'moderne' ); ?></span>
      <input type="search" class="search-field" placeholder="enter terms and press 'enter'" value="" name="s" title="Search field" />
    </label>
    <input type="submit" class="search-submit" value="Search" />
    <a href="#" class="close">
      <span class="screen-reader-text"><?php esc_html_e( 'Close Search Menu', 'moderne' ); ?></span>
      <svg class="icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><line class="cls-1" x1="11.7" y1="11.7" x2="24.3" y2="24.3"></line><line class="cls-1" x1="24.3" y1="11.7" x2="11.7" y2="24.3"></line></svg>
    </a>
  </div>
</form>
