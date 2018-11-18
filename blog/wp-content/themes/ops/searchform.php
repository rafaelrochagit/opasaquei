<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="Pesquisar" />
    <button type="submit" alt="" id="search-button" class="fa fa-search"></button>
</form>
