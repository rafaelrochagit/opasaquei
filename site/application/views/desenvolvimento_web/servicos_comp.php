 <header id="servicos">
 	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="6000" id="bs-carousel">
 		<!-- Overlay -->
 		<!-- <div class="overlay"></div> -->

 		<!-- Indicators -->
 		<ol class="carousel-indicators">
 			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
 			<li data-target="#bs-carousel" data-slide-to="1"></li>
 			<li data-target="#bs-carousel" data-slide-to="2"></li>
 		</ol>

 		<!-- Wrapper for slides -->
<div class="carousel-inner">
    <div class="item slides active">
	      <div class="slide-1"></div>
	      <a id="slide-1" class="page-scroll" href="#contact">
	        <hgroup>
	            <h1>Criação de Sites</h1>        
	            <img id="construcao_sites" src="<?= base_url('public/img/desenv_web/sites/construcao_sites.png') ?>">
	            <img id="desk_responsive" src="<?= base_url('public/img/desenv_web/sites/desk-responsive.png') ?>">
	        </hgroup>
	      </a>
	    </div> 
    <div class="item slides">
	  	<div class="slide-2"></div>
	  	<a id="slide-2" class="page-scroll" href="#contact">        
	  		<hgroup>
	  			<img id="monitor-php" src="<?= base_url('public/img/desenv_web/sistemas/monitor-php.png') ?>">
	  			<img id="note-php" src="<?= base_url('public/img/desenv_web/sistemas/note-php.png') ?>">
	  			<img id="tablet-sql" src="<?= base_url('public/img/desenv_web/sistemas/tablet-sql.png') ?>">
	  			<img id="imagesprogramacao_HB" src="<?= base_url('public/img/desenv_web/sistemas/imagesprogramacao_HB.png') ?>">
	  			<h1>Desenvolvimento de Sistemas Web</h1>        
	  		</hgroup>       
	  	</a>
    </div>
	<div class="item slides">
		  <div class="slide-3"></div>
		  <a id="slide-3" class="page-scroll" href="#contact">        
		    <hgroup>
		    	<img id="loja_online" src="<?= base_url('public/img/desenv_web/loja_online/loja_online.png') ?>">
					<img id="ecommerce" src="<?= base_url('public/img/desenv_web/loja_online/ecommerce.png') ?>">
		        <h1>Construção de Loja Virtual <br>(e-commerce)</h1>        
		    </hgroup>
		  </a>
	</div> 
</div> 
<!-- Carousel Buttons Next/Prev -->
<a data-slide="prev" href="#bs-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
<a data-slide="next" href="#bs-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
</div>

</header>

<script type="text/javascript">
	$('#slide-1').click(function(){
		$('#tipo').val('CRIAÇÃO DE SITE');
	});
	$('#slide-2').click(function(){
		$('#tipo').val('CRIAÇÃO DE SISTEMA WEB');
	});
	$('#slide-3').click(function(){
		$('#tipo').val('LOJA VIRTUAL');
	});
</script>