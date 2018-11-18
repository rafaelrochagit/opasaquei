 <header id="depoimentos" class="page1">

  	<div id="depoimentos-slides" class="col-md-12" data-wow-delay="0.1s">

  		<div class="carousel slide" data-ride="carousel" data-interval="120000" id="quote-carousel">

  			<!-- Carousel Slides / Quotes -->

  			<div class="carousel-inner text-center wow fadeIn">

          <?php foreach($depoimentos as $i => $d):?>

              <div class="item <?= $i==0 ? 'active' : '' ?>">

              <blockquote>

                <div class="row">

                  <div class="col-sm-8 col-sm-offset-2">



                    <p><?= $d->getDeclaracao() ?></p>

                      <small><?= $d->getNome() ?>

                        <?php if($d->getEmail() != null):?> 

                        <br> Email: <a href="mailto:<?= $d->getEmail()?>"><?=$d->getEmail()?></a>

                        <?php endif;?> 

                      </small>

                      <span><?=$d->getData()->format('d/m/Y')?></span>

                    </div>

                  </div>

                </blockquote>

              </div>

            <?php endforeach;?>



          </div>

            <!-- Bottom Carousel Indicators -->

            <ol class="carousel-indicators">

              <?php foreach($depoimentos as $i => $d):?>

              <li data-target="#quote-carousel" data-slide-to="<?=$i?>" class="<?= $i==0 ? 'active' : '' ?>">

              <img class="img-responsive " 

                src="<?=base_url('public/img/avatars/'.$d->getFoto())?>" alt="">

              </li>

            <?php endforeach;?>

  					</ol>



  					<!-- Carousel Buttons Next/Prev -->

  					<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>

  					<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>

  				</div>

  			</div>

  		</header>