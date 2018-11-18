<?php get_header(); ?>
	<section id="conteudo">
		<div id="artigos">
			<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); ?>
	                <div class="artigo">
		                <?php if ( has_post_thumbnail() ) : ?>
		                    <a class="post-thumbnail-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		                        <?php the_post_thumbnail(array(160, 200)); ?>
		                    </a>
		                <?php endif; ?>
		                <div class="artigo-content">
		                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		                    <p class="post-date">Postado <?php the_time('l \- j \d\e F \d\e Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
		                     
		                    <p><?php the_content(); ?></p>
	                    </div>
	                </div>
	        		<?php endwhile?>
	        		<div class="paginator">
	             		<?php wordpress_pagination(); ?>  
	        		</div>
	        <?php else: ?>
	        	<div class="artigo">
				    <h2>Nada Encontrado</h2>
				    <p>Lamentamos mas não foram encontrados artigos.</p>
				</div> 
	        <?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
