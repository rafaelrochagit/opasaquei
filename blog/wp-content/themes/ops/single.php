<?php get_header(); ?>
<section id="conteudo" class="last-page">
	<div id="artigos">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="artigo artigo-single">
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <p class="post-date">Postado <?php the_time('l \- j \d\e F \d\e Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                <p><?php the_content(); ?></p>
            </div>  
            <div class="post-author"> 
                <div class="author-bio">
                    <div class="author-img">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                    </div>
                    <div class="author-description">
                        
                        <h4>Escrito por <a href="<?php the_author_url ();?>"> <?php echo get_the_author() ?></a>
                        </h4>
                        <p><?php the_author_description ();?></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>  
            <?php comments_template(); ?>

        <?php endwhile; else: ?>
        <div class="artigo">
            <h2>Nada Encontrado</h2>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>            
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>