<head> 
	<style type="text/css">
		#logo{
			width: 65px;
			cursor:pointer;
		}

		.ops {
			color: #fc0;
			height: 55px;
			text-shadow: #000 1px -1px, #000 -1px 1px, #000 1px 1px, #000 -1px -1px;
			font-size: 26pt;
		}

		.logo_ops{
			margin: 0 auto;
			text-align: center;
		}


		.table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 20px;
		}

		table {
			border-spacing: 0;
			border-collapse: collapse;
		}

		th {
			border-top: 0;
			vertical-align: bottom;
			border-bottom: 2px solid #ddd;
			padding: 8px;
			line-height: 1.42857143;
			text-align-last: left;
		}


		td{
			padding: 8px;
			line-height: 1.42857143;
			vertical-align: top;
			border-top: 1px solid #ddd;

		}

		#totais-pacotes th{
			border-bottom: 0;
			padding: 0px 8px;
			line-height: 0;
		}

		#totais-pacotes td{
			border-top: 0;
			padding: 0px 8px;
			line-height: 0;
		}

		.panel-xl{
			border: solid 3px #fc0;
			border-radius: 6px;
		}
		.panel-heading{
			background-color: rgba(0, 0, 0, 0.73);
			color:#000;
			height: 100%;
		}

		.panel-title{
			color:#fff;
			text-align:center;
			font-size: 15pt;
		}

		.panel-body{
			border-top:solid 3px #fc0;
		}

		.panel-body .row{
			margin: 15px;
		}

		.panel-body label{
			font-weight: 900;
		}

		.totais-pacotes-titulo{
			font-size: 9pt;
		}
	</style>

</head>

<div class="panel panel-xl">
	<div class="panel-heading">
		<div class="logo_ops" href="#page-top">
			<img id="logo" src="<?=base_url('public/img/ops_logo.png')?>">
			<div class="ops">Opa, Saquei!</div>
		</div>
		<h3 class="panel-title">Contato - <?= $tipo ?></h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Nome: </label>
			<span><?= $nome ?></span>
		</div>
		<div class="row">
			<label>Email: </label>
			<span><?= $email ?></span>
		</div>
		<div class="row">
			<label>Telefone:</label>
			<span><?= $telefone ?></span>
		</div>
		<div class="row">
			<label>Mensagem: </label>
			<span><?= $mensagem ?></span>
		</div>
		<?php if(isset($pacote) && $pacote != ''): ?>
			<div class="row">
				<h1 style="text-align: center;">Pacote</h1>
				<span><?= $pacote ?></span>
			</div>
		<?php endif; ?>
		<?php if(isset($como_chegou) && $como_chegou != ''): ?>
			<div class="row">
				<label>Como chegou?</label>
				<span><?= $como_chegou ?></span>
			</div>
		<?php endif; ?>
	</div>
</div>

