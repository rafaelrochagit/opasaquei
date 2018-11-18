  <!-- Header -->
  <link href="<?=base_url('public/css/home.css')?>" rel="stylesheet">
  <header>
    <div class="container">
      <div id="home-services" class="intro-text">
        <div class="intro-lead-in">Você veio à procura de?</div>
        <div id="aulas" class="col-lg-6 services">
          <div class="head-service wow slideInLeft" data-wow-delay="200ms">
            <h3><a href="<?=base_url('aulas-particulares')?>">Aulas Particulares</a></h3>
          </div>
          <div class="images-service" onclick="<?="location.href='".'/aulas-particulares'."'"?>">
             <img src="<?=base_url('public/img/aula/aula.gif')?>" 
            class="aula wow fadeIn animated" data-wow-duration="1s">
            <!-- <img src="<?=base_url('public/img/aula/duvida.png')?>" 
            class="duvida wow fadeIn animated" data-wow-duration="2s">
            <img src="<?=base_url('public/img/aula/plus.png')?>" 
            class="plus wow fadeIn animated" data-wow-duration="1s" >
            <img src="<?=base_url('public/img/aula/minus.png')?>" 
            class="minus wow bounceInDown animated" data-wow-duration="1s" >
            <img src="<?=base_url('public/img/aula/x.png')?>" 
            class="x wow bounceInLeft animated" data-wow-duration="1s" >
            <img src="<?=base_url('public/img/aula/terra.png')?>" 
            class="terra wow lightSpeedIn animated" data-wow-duration="1s" >
            <img src="<?=base_url('public/img/aula/historia.png')?>" 
            class="historia wow rotateIn animated" data-wow-duration="1s">
            <img src="<?=base_url('public/img/aula/quimica1.png')?>" 
            class="quimica1 wow fadeIn animated" data-wow-duration="1s">
            <img src="<?=base_url('public/img/aula/quimica2.png')?>" 
            class="quimica2 wow bounceIn animated" data-wow-duration="1s">
            <img src="<?=base_url('public/img/aula/ingles.png')?>" 
            class="ingles wow bounceIn animated" data-wow-duration="1s">
            <img src="<?=base_url('public/img/aula/balao.png')?>" 
            class="balao wow fadeIn animated" data-wow-duration="500ms" >
            <img src="<?=base_url('public/img/aula/interrogation.png')?>" 
            class="interrogation wow zoomIn animated" data-wow-duration="1s" >
            <img src="<?=base_url('public/img/ops_logo.png')?>" 
            class="logo_balao wow zoomIn animated" data-wow-duration="500ms" data-wow-delay="800ms">
            <div class="opa_balao wow zoomIn animated" data-wow-duration="500ms" data-wow-delay="1000ms">Opa</div>
            <div class="saquei_balao wow zoomIn animated" data-wow-duration="500ms" data-wow-delay="1800ms">Saquei!</div>

            <img src="<?=base_url('public/img/aula/sacando.png')?>" 
            class="sacando wow fadeIn" data-wow-duration="1s" data-wow-delay="1000ms">
            <img src="<?=base_url('public/img/aula/sacou.png')?>" 
            class="sacou wow fadeIn" data-wow-duration="1s" data-wow-delay="1800ms"> -->
          </div>
          <!-- <a href="<?=base_url('aulas-particulares')?>" class="btn btn-xl">Aulas</a> -->
        </div>

        <div id="desenv-web" class="col-lg-6 services">
          <div class="head-service" >
            <h3>
              <a href="/desenvolvimento-web">
                <div class="wow slideInRight" data-wow-delay="300ms">Desenvolvimento de Sites</div>
                <!-- <p class="wow slideInLeft" data-wow-delay="5s">Site, Sistemas, Lojas Online...</p> -->
              </a>
            </h3>
          </div>
          <a class="images" href="/desenvolvimento-web">
            <img src="<?=base_url('public/img/desenv_web/desenv-web.png')?>" 
            class="desenv-web wow fadeIn animated" data-wow-duration="300ms" data-wow-delay="350ms">
            <!-- <img src="<?=base_url('public/img/desenv_web/pc.png')?>" 
            class="pc wow fadeIn animated" data-wow-duration="1s" data-wow-delay="3000ms">
            <img src="<?=base_url('public/img/desenv_web/tablet_cel.png')?>" 
            class="tablet_cel wow fadeIn animated" data-wow-duration="1s" data-wow-delay="2500ms">
            <img src="<?=base_url('public/img/desenv_web/signal.png')?>" 
            class="signal wow fadeIn animated" data-wow-duration="1s" data-wow-delay="2500ms">
            <div class="www wow zoomIn animated" data-wow-duration="500ms" data-wow-delay="2700ms">www</div> -->
          </a>
          <a href="/desenvolvimento-web" class="btn btn-xl wow zoomInUp" data-wow-delay="370ms">
            Sites
          </a>
        </div> 
          <!--
        <div id="orientacao-profissional" class="col-lg-4 services">
          <div class="head-service wow slideInLeft" data-wow-delay="1500ms">
            <h3><a href="/orientacao-profissional">Orientação Profissional</a></h3>
          </div>
          <div class="images-service" onclick="<?="location.href='".'/orientacao-profissional'."'"?>">
            <img src="<?=base_url('public/img/orientacao_profissional/orientacao-profissional.png')?>" 
            class="ori wow fadeIn animated" data-wow-duration="1s" data-wow-delay="1600ms">
            <img src="<?=base_url('public/img/orientacao_profissional/empresario.png')?>" 
            class="empresario wow zoomIn animated" data-wow-duration="1s" data-wow-delay="3600ms">
            <img src="<?=base_url('public/img/orientacao_profissional/quimica.png')?>" 
            class="quimica wow fadeIn animated" data-wow-duration="1s" data-wow-delay="3600ms">
            <img src="<?=base_url('public/img/orientacao_profissional/medicina.png')?>" 
            class="medicina wow zoomIn animated" data-wow-duration="1s" data-wow-delay="3700ms">
            <img src="<?=base_url('public/img/orientacao_profissional/professor.png')?>" 
            class="professor wow bounceIn animated" data-wow-duration="1s" data-wow-delay="3800ms">
            <img src="<?=base_url('public/img/orientacao_profissional/engrenagem.png')?>" 
            class="engrenagem wow zoomIn animated" data-wow-duration="1s" data-wow-delay="3900ms">
            <img src="<?=base_url('public/img/orientacao_profissional/advogado.png')?>" 
            class="advogado wow rotateIn animated" data-wow-duration="1s" data-wow-delay="4000ms">
          </div>
          <a href="<?=base_url('aulas-particulares')?>" class="btn btn-xl">Aulas</a> 
        </div>-->

      </div>
    </div>
  </header>