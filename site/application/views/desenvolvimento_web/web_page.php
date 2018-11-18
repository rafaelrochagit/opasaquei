  <!-- Custom CSS -->
  <link href="<?=base_url('public/plugins/vegas/vegas.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/jquery.fancybox.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/styles-isotope.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/desenv-web.css')?>" rel="stylesheet">
 <?= $this->load->view('desenvolvimento_web/servicos_comp', '', true) ?>
 <?= $this->load->view('desenvolvimento_web/portfolio_comp', '', true) ?>

	<!-- Contact Section -->
<section id="contact" class="last-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading wow fadeInDown">Orçamento</h1>
				<div style="margin-bottom:20px;color:#fff" class="row text-center col-sm-offset-4 col-xs-offset-3">
					<div class="col-xs-5 text-right">
						<i class="col-xs-12 fa fa-phone fa-3x wow bounceIn"></i>
					</div>
					<div class="col-xs-7">
						<div class="row">
							<div class="col-md-2 col-sm-3 col-xs-4 text-right"><strong>TIM:</strong></div> 
							<div class="col-xs-8 text-left">(61) 98247-4008 (Whatsapp)</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm">
					<div class="row">
						<div class="col-md-6">
			              <div class="form-group">
			                <label>Como nos conheceu?</label>
			                <select class="form-control" id="como_chegou"  placeholder="Como nos Conheceu? *" 
			                required data-validation-required-message="Por favor selecione">
			                    <option value=""></option>
			                    <option value="FOLHETO">FOLHETO</option>
			                    <option value="FACEBOOK">FACEBOOK</option>
			                    <option value="INSTAGRAM">INSTAGRAM</option>
			                    <option value="GOOGLE">GOOGLE</option>
			                    <option value="YAHOO / BING">YAHOO / BING</option>
			                    <option value="INDICAÇÃO">INDICAÇÃO</option>
			                    <option value="EMAIL MARKETING">EMAIL MARKETING</option>
			                    <option value="OUTRO">OUTRO</option>
			                </select>
			                <p class="help-block text-danger"></p>
			              </div>
							<div class="form-group">
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
                <label>Tipo de Serviço?</label>
                <select class="form-control" id="tipo"  placeholder="Como nos Conheceu? *" 
                required data-validation-required-message="Por favor selecione">
                    <option value=""></option>
                    <option value="CRIAÇÃO DE SITE">Criação de Site</option>
                    <option value="CRIAÇÃO DE SISTEMA WEB">Desenvolvimento de Sistema Web</option>
                    <option value="LOJA VIRTUAL">Loja Virtual(e-commerce)</option>
                </select>
                <p class="help-block text-danger"></p>
              </div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Mais Informações *" name="mensagem" id="message" required data-validation-required-message="Por favor entre com mais informações."></textarea>
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
			/*$("body").vegas({
				slides: [
				{ src: base_url + "public/img/background/0111.jpg" },
				{ src: base_url + "public/img/background/011.jpg" }
				],
				overlay: true,
				timer: false
			});*/


			$(document).ready(function () {
		        $(document).prop('title', 'Ops! Criação de Sites e Sistemas');
		    });



		</script>