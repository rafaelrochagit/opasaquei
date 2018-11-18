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
                    <!--<li><a href="/orientacao-profissional" id="orientacao-profissional">Orientação Profissional</a>
                    </li>-->
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
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
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
    </div>
</footer>
<input id="menuSelecionado" type="hidden" value="<?= $menuSelecionado ?>">
</body>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('public/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Theme JavaScript -->
<script src="<?= base_url('public/js/agency.js')?>"></script>

<!-- WOW JavaScript -->
<script src="<?= base_url('public/js/wow.min.js')?>"></script>

<!-- Custom JavaScript -->
<script src="<?= base_url('public/js/main.js')?>"></script>


<script>
    $(document).ready(function () {
        var menu = $("#menuSelecionado").val();
        $("#" + menu).addClass('active');

        // Crédito servidor grátis 000Webhost
        var server = $('#menuSelecionado').next().clone();
        $('#menuSelecionado').next().hide();

        $('footer > .container').append('<div class="row" style="margin-top: 15px;">'+ server.html() +'</div>');


    });

</script>

</html>


