<section id="portfolio" class="color-bg-two">
	<section class="filter-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">

					<h1 class="wow fadeInDown">Portfolio</h1>

					<div class="filter-container isotopeFilters">
						<ul class="list-inline filter">
							<li class="active"><a href="#" data-filter="*">Todos </a><span>/</span></li>
							<?php foreach($tipos as $i => $t):?>
							<li><a href="#" data-filter=".<?=$t->getAlias()?>"><?=$t->getNome()?></a>
								<?php if($i < sizeof($tipos) - 1 ):?>
								<span>/</span>
								<?php endif;?>
							</li>
							<?php endforeach;?>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section id="portfolio" class="portfolio-section port-col">
    <div class="container">
        <div class="row">
            <div class="isotopeContainer">
            
	            <?php foreach($portfolios as $j => $p):?>
	            	<div class="col-sm-4 isotopeSelector portfolio-item <?=$p->getTipo()->getAlias()?>">
	            		<figure class="portfolio-link">
	            			<img src="<?=base_url('public/img/desenv_web/portfolio/'.$p->getCapa())?>" 
	            			class="img-responsive" alt="">
	            			<div class="overlay-background">
	            				<div class="inner"></div>
	            			</div>
	            			<div class="overlay">
	            				<div class="inner-overlay">
		            				<div class="inner-overlay-content with-icons">
		            					<a title="Capa" class="fancybox-pop lupa-portfolio" rel="portfolio-<?=$j?>" 
		            						href="<?=base_url('public/img/desenv_web/portfolio/'.$p->getCapa())?>">
		            						<i class="fa fa-search"></i>
		            					</a>
		            					<?php foreach($p->getImagens() as  $i): ?>
		            						<a title="<?=$i->getDescricao()?>"  class="fancybox-pop" style="display: none" 
		            							href="<?=base_url('public/img/desenv_web/portfolio/'.$i->getImagem())?>" 
		            							rel="portfolio-<?=$j?>"></a>
	            						<?php endforeach;?>
		            						<a href="<?=linkWithProtocol($p->getLink())?>" target="_blank"
		            						title="<?=$p->getLink()?>" class="link-portfolio">
		            							<i class="fa fa-link"></i>
		            						</a>
		            					</div>
	            					</div>
	            				</div>
	            			</figure>
	            			<div class="portfolio-caption">
	            				<h4><?= $p->getNome()?></h4>
	            				<p class="text-muted"><?= $p->getTipo()->getNome() ?></p>
	            			</div>
	            		</div>
            	<?php endforeach;?>
            
            </div>
        </div>
    </div>
</section>
</section>