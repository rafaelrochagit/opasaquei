<?php define('URL', $_SERVER['SERVER_NAME'].'/') ?>
<?php define('PASTA_SITE_NOME', 'site/')?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="opasaquei, aulas particulares brasília, aulas particulares cruzeiro, aulas particulares taguatinga. aulas particulares asa norte, criação de sites e sistemas, reforço escolar brasília, reforço escolar taguatinga, reforço escolar cruzeiro, smu, rcg, aula particular, aulas particulares"/>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php if(wp_title() == null) bloginfo('title'); else wp_title('');?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

    
    <!-- Favicon -->
    <link rel="icon" href="<?='/'.PASTA_SITE_NOME.'public/img/ops_logo.png'?>" type="image/gif">
    <!-- Bootstrap Core CSS -->
    <link href="<?= '/'.PASTA_SITE_NOME.'public/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?='/'.PASTA_SITE_NOME.'public/fonts/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css"> 
    
    <!-- Custom Fonts -->
    <link href="<?='/'.PASTA_SITE_NOME.'public/css/animate.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?='/'.PASTA_SITE_NOME.'public/css/agency.min.css'?>" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?='/'.PASTA_SITE_NOME.'public/css/style.css'?>" rel="stylesheet">
    <link href="<?='/'.PASTA_SITE_NOME.'public/css/aulas.css'?>" rel="stylesheet">

    <!-- Others Fonts -->
    <link href="<?='/'.PASTA_SITE_NOME.'public/css/fonts.css'?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <link href="<?='/'.PASTA_SITE_NOME.'public/plugins/vegas/vegas.min.css' ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="<?= '/'.PASTA_SITE_NOME.'public/js/jquery.min.js'?>"></script>

        <script src="<?= '/'.PASTA_SITE_NOME.'public/js/ajax.js' ?>"></script>

    </head>
    <body id="page-top" class="main">
        <div id="body">
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <div class="navbar-brand logo_ops">
                        <img id="logo" src="<?='/'.PASTA_SITE_NOME.'public/img/ops_logo.png'?>">
                        <a class="page-scroll" href="#page-top">
                            <div class="ops">Opa, Saquei!</div>
                            <div class="desenv">blog</div>
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>">Home</a>
                    </li>
                    <?php if(have_posts()): ?>
                        <?php wp_list_cats('sort_column=id'); ?>
                    <?php endif; ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aulas <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/aulas-particulares#precos">Preços</a></li>  
                            <li><a href="/aulas-particulares#depoimentos">Depoimentos</a></li>  
                            <li><a href="/aulas-particulares#contact">Pacotes de Desconto</a></li>  
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
    </header>
    <div id="banner-afiliados">
        <!-- Banner Nome: banner-afiliados -->
            <script id='afl_64021' type='text/javascript'>
            var pTitle = document.title, aflDate = new Date(), new_js = document.createElement('script');
            new_js.type = 'text/javascript'; new_js.async = true;
            new_js.src = 'http://img.afiliados.com.br/banner_creator/loader2.php?aflDate='+aflDate.getDate()+aflDate.getHours()+'&banner=64021&franq=AFL-03-198327&title=' + pTitle + '&url='+document.URL;
            document.write(new_js.outerHTML);
            </script>
    </div>
