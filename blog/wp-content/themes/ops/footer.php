<a id="gototop" href="#page-top" class="page-scroll wow fadeInDown animated"><i class="glyphicon glyphicon-chevron-up"></i></a>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline quicklinks">
                        <li ><a href="/aulas-particulares" id="aulas-particulares">Aulas Particulares</a>
                        </li>
                        <li><a href="/desenvolvimento-web" id="desenvolvimento-web">Desenvolvimento Web</a>
                        </li>
                        <li><a href="/orientacao-profissional" id="orientacao-profissional">Orientação Profissional</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Opa, Saquei! <?=date('Y')?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li>
                            <a href="https://www.facebook.com/opasaquei/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/opa.saquei/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/opasaquei/" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="site-link"><a href="/">Site Principal</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php wp_footer(); ?>
        </div>
    </footer>
    <input id="menuSelecionado" type="hidden" value="<?= $menuSelecionado ?>">
    </div>
</body>

<!-- Bootstrap Core JavaScript -->
<script src="<?= '/'.PASTA_SITE_NOME.'public/bootstrap/js/bootstrap.min.js' ?>"></script>

<!-- Theme JavaScript -->

<!-- WOW JavaScript -->
<script src="<?= '/'.PASTA_SITE_NOME.'public/js/wow.min.js' ?>"></script>

<!-- Custom JavaScript -->
<script src="<?= '/'.PASTA_SITE_NOME.'public/js/main.js' ?>"></script>

<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="<?= '/'.PASTA_SITE_NOME.'public/plugins/vegas/vegas.min.js' ?>"></script>

<script src="<?php echo get_template_directory_uri() ?>/jquery.sticky.js"></script>

<script>
    var base_url = "<?='/'.PASTA_SITE_NOME?>";
    $("body").vegas({
        slides: [
        { src: base_url + "public/img/background/0111.jpg" },
        { src: base_url + "public/img/background/011.jpg" }
        ],
        overlay: true,
        timer: false
    });

    $(document).ready(function () {
        var menu = $("#menuSelecionado").val();
        $("#" + menu).addClass('active');
        
        $('li.current-cat').addClass('active');

        $(".widget:last-child").sticky({topSpacing:80});;

        var server = $('#body').next().clone();
        $('#body').next().hide();

        $('footer > .container').append('<div class="row" style="margin-top: 15px;">'+ server.html() +'</div>');
        $('#logo').click(function(){
            window.location.href = "/";
        });
    });

    (function($) {
        "use strict"; // Start of use strict

        $(".page-scroll").click(function(event){        
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
        });
        // Offset for Main Navigation
        $('#mainNav').affix({
            offset: {
                top: 0
            }
        })

    })(jQuery); // End of use strict

</script>

</html>