  <!-- Custom CSS -->
  <link href="<?=base_url('public/css/aulas.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/plugins/vegas/vegas.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/jquery.fancybox.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/styles-isotope.css')?>" rel="stylesheet">

 <?= $depoimento_page ?>
  <section id="quemsomos" class="color-bg-two">
    <h1 class="text-center wow fadeInDown">Quem Somos</h1>
     <div class="container">
      <p>Somos uma empresa de Aulas Particulares criada em 2015, por jovens estusiasmados em trazer uma proposta diferente ao processo de ensino-aprendizagem, na qual <b>o mais importante</b> é o <b>aprendizado do aluno</b> com respeito total a sua individualidade na forma de aprender.</p>

      <p>Todos os nossos <b>Professores</b> são ex-alunos ou alunos da <b>UNB</b>.</p>

      <p>Nossas <b>aulas</b> são <b>100% individuais</b> e focadas no(a) aluno(a) de forma a levá-lo(a) ao objetivo desejado.</p>

      <p>Nossa sala de aula está localizada na Asa Norte e atendemos apenas nela, pois nossa experiência mostra que um <b>ambiente preparado</b> especialmente para o estudo potencializa a capacidade de concentração e absorção do conteúdo pelo(a) aluno(a).</p>
    </div>
 </section>
 <?= $this->load->view('aulas/precos_comp', '', true) ?>
 <section id="pacotes" class="color-bg-two">
    <h1 class="text-center wow fadeInDown remove-from-download">Monte seu Pacote</h1>
    <h5 class="text-center section-heading wow fadeInDown remove-from-download">Descontos a partir de 2 aulas</h5>
    <div class="container">
      <div class="row col-xs-12">
        <table id="pacotes-table" class="table table-hover">
          <thead>
            <tr>

              <th>Quantidade</th>
             
              <th>Total</th>
              <th class="remove-from-download">Ação</th>
            </tr>
          </thead>
          <tbody id="pacotes-table-body">
            <?= $this->load->view('aulas/pacote_linha', '', true) ?>
          </tbody>
        </table>
      </div>
      <div class="row col-xs-12 remove-from-download">
        <!--
        <button id="adicionar-aulas" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar aulas</button>
         -->
      </div>
      <div id="totais-pacotes" class="row col-xs-12">
        <table>
          <thead>
            <tr>
              <th>
                <h4 class="totais-pacotes-titulo">QTD:</h4>
              </th>
              <th>
                <h4 class="totais-pacotes-titulo">DESCONTO:</h4>
              </th>
              <th >
                <h4 class="totais-pacotes-titulo">SEM DESCONTO:</h4>
              </th>
              <th>
                <h4 class="totais-pacotes-titulo">COM DESCONTO:</h4>
              </th>
            </tr>
          </thead>
          <tbody> 
              <tr>
                <td>
                  <h4 class="totais-pacotes-valor" id="qtd-aulas-total">0</h4>
                </td>
                <td>
                  <h4 class="totais-pacotes-valor" ><span id="desconto-porcentagem">0</span>% - R$ 
                  <span id="desconto-reais">0,00</span></h4>
                </td>
                <td>
                 <h4 class="totais-pacotes-valor" >R$ <span id="valor-total-sem-desconto">0,00</span></h4>
               </td>
               <td>
                <h4 class="totais-pacotes-valor" >R$ <span id="valor-total-com-desconto">0,00</span></h4>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--
      <div class="row col-xs-12 remove-from-download">
       <?= form_open('ajax/AjaxController/downloadPacotePdf') ?>
        <button id="download-pdf" formtarget="_blank" class="btn btn-default">
        <i class="fa fa-file-pdf-o"></i> Baixar Pacote</button>
        <input type="hidden" id="pacote-html" name="pacote" value="">
       <?= form_close() ?>
      </div>
      -->
      <div class="row col-xs-12 remove-from-download">
         <a class="page-scroll btn btn-default" id="enviar-pacote" href="#contact">
         <i class="fa fa-envelope"></i> Enviar-nos o Pacote</a>
      </div>
    </div>
 </section>

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
									<!-- <div class="col-md-2 col-sm-3 col-xs-4 text-right"><strong>VIVO:</strong></div>  -->
									<div class="col-xs-8 text-left"><h4>(61) 99830-5555 (Whatsapp)</h4></div> 
								</div>
								<!--<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-4 text-right"><strong>VIVO:</strong></div> 
									<div class="col-xs-8 text-left">(61) 99647-0384</div> 
								</div>-->
							</div>
						</div>
					</div>
				</div>
        <div id="pacote-anexado" class="row btn btn-info btn-lg col-lg-12 text-center" style="display: none; color:#fff">
          <h3>Pacote anexado! (Preencha os dados para nos enviar)</h3>
        </div>
				<div class="row">
					<div class="col-lg-12">
						<form name="sentMessage" id="contactForm" novalidate>
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
                    <label>Mensagem</label>
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
									<h3>Atendemos em : CLN 406 bl. B Subsolo Loja 02</h3>
									<p>Referências: No prédio ao lado do SEBINHO.<br> No subsolo do prédio da SBS Livraria.</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.7062990315544!2d-47.88021218514543!3d-15.76666888906849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dd177af068d8959!2sOpa%2C+Saquei*21!5e0!3m2!1spt-BR!2sbr!4v1539181107539" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
    <script src="<?=base_url('public/js/aulas_pacotes.js')?>"></script>

    <?php 
        $aulas = $this->load->view('aulas/pacote_linha','',true);
        $aulas = preg_replace( "/\r|\n/", "", $aulas ); // tira as quebras de linhas para o javascript poder interpretar
    ?>
		<script type="text/javascript">

      
			var base_url = "<?=base_url()?>";
			$("body").vegas({
				slides: [
				{ src: base_url + "public/img/background/0111.jpg" },
				{ src: base_url + "public/img/background/011.jpg" }
				],
				overlay: true,
				timer: false
			});

      var aulas = '<?=$aulas?>';
      $('#adicionar-aulas').click(function(){
        $('#pacotes-table-body').append(aulas);
      });

      //eventos em elementos adicionados depois de carregar a pagina
      $(document).on('change', '.aula-select', function(){
        atualizaLinha(this); //aulas_pacotes.js
      });

      $(document).on('click', '.excluir', function(){
          $(this).parent().parent().remove();
          var linha = $(this).parents('.aula-linha');
          atualizaTotais(linha);
      });

      $(document).on('click', '.gravar', function(){
          var linha = $(this).parents('.aula-linha');
          
          //aulas_pacotes.js
          gravarLinha(linha);
          atualizaTotais(linha);
      });

      $(document).on('click', '.alterar', function(){
          var linha = $(this).parents('.aula-linha');
          editarLinha(linha);
          atualizaTotais(linha);
      });




		</script>