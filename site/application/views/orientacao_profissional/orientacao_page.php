  <!-- Custom CSS -->
  <link href="<?=base_url('public/plugins/vegas/vegas.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/jquery.fancybox.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/styles-isotope.css')?>" rel="stylesheet">
  <header id="preco" class="page1">
      <section id="prof" class="row text-center">
            <div class="prods">
                  <h3>Orientação Profissional</h3>
                  <p>
                    Atendimento psicológico de qualidade que abrirá as portas pra você encontrar o que procura.
                  </p>
                  <div class="col-md-12 prod">
                    <h4></h4>
                      <p><br></p>
                      <div class="btn btn-danger btn-lg head-btn-one scrollclass"><b>R$ 500,00 </b><br>6 encontros</div>
                      <br>
                  </div> 
             </div>      
        </section>
    </header>
  		<!-- Contact Section -->
		<section id="contact" class="last-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="section-heading wow fadeInDown">Contato</h1>
						<div style="margin-bottom:20px;color:#fff" class="row text-center col-sm-offset-4 col-xs-offset-3">
							<div class="col-xs-5 text-right">
								<i class="col-xs-12 fa fa-phone fa-3x wow bounceIn"></i>
							</div>
							<div class="col-xs-7">
								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-4 text-right"><strong>TIM:</strong></div> 
									<div class="col-xs-8 text-left">(61) 98177-6233 (Whatsapp)</div> 
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-4 text-right"><strong>VIVO:</strong></div> 
									<div class="col-xs-8 text-left">(61) 99647-0384</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
                    <input type="hidden" name="tipo" id="tipo" value="Aulas">
										<input type="text" class="form-control" placeholder="Seu Nome*" name="nome" id="name" required data-validation-required-message="Por favor entre com o name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Seu Email *" name="email" id="email" required data-validation-required-message="Por favor entre com o email.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control telefone" placeholder="Seu telefone ou celular *" name="telefone" 
                    id="phone" required data-validation-required-message="Por favor entre com o número." maxlength="15">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" placeholder="Sua Mensagem *" name="mensagem" id="message" required data-validation-required-message="Por favor entre com a mensagem."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit"  class="btn btn-xl">Enviar</button>
								</div>
								<div class="clearfix"></div>
								<div style="margin-top:25px;color:#fff;" class="row text-center">
									<i class="fa fa-map-marker fa-3x wow bounceIn" data-wow-delay=".1s"></i>
									<p>Atendemos em : Brasília-DF</p>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- VEGAS SLIDESHOW SCRIPTS -->
		<script src="<?=base_url('public/plugins/vegas/vegas.min.js')?>"></script>
		<script src="<?=base_url('public/js/contact_me.js')?>"></script>
		<script src="<?=base_url('public/js/jqBootstrapValidation.js')?>"></script>
		<script src="<?=base_url('public/js/isotope.min.js')?>"></script>
		<script src="<?=base_url('public/js/jquery.fancybox.pack.js')?>"></script>
    <script src="<?=base_url('public/js/isotope-main.js')?>"></script>

		<script type="text/javascript">
			var base_url = "<?=base_url()?>";
			$("body").vegas({
				slides: [
        { src: base_url + "public/img/orientacao_profissional/banner2.jpg" },
				{ src: base_url + "public/img/orientacao_profissional/banner1.png" },
				{ src: base_url + "public/img/orientacao_profissional/orientacao-profissional.png" }
				],
				overlay: true,
				timer: false
			});





		</script>