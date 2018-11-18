<?php get_header(); ?>
<section id="conteudo" class="last-page">
	<div id="artigos">
		<?php if ( have_posts() ) : ?>
			<h1>Resultados para: <?php echo get_search_query() ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
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
				    	<h1 style="text-align: center">Nada Encontrado para: <?php echo get_search_query() ?></h1>
				    </div>
				    <div class="posts-recentes">
				    <h3>Posts Recentes:</h3>
					<?php
						$aRecentPosts = new WP_Query("showposts=4"); 
							while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>
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
					<?php endwhile; ?>
					</div>
	        <?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>