<?php
$back = $this->session->flashdata('back');
if ($back != null) {
    echo processBack($back);
    $this->session->set_flashdata('back', null);
}
$new = $this->session->flashdata('new');
if ($new != null) {
    echo processNew($new);
    $this->session->set_flashdata('new', null);
}
?>
<section class="content-header">
    <h1>
        <?= $title ?>
        <small>Vestibular Cidadão!</small>
    </h1>
    <ol class="breadcrumb">
        <?php
        foreach ($breadcrumbs as $i => $b):
            if ($i == 0) {
                ?>
                <li><a href="#">
                        <i class="<?= $b[0] ?> <?= $i == (count($breadcrumbs) - 1) ? 'active' : '' ?>">
                            <?= $b[1] ?>
                        </i>
                    </a>
                </li>
            <?php } else { ?>
                <li class="<?= $i == (count($breadcrumbs) - 1) ? 'active' : '' ?>"><?= $b ?></li>
                <?php
            }
        endforeach;
        ?>
    </ol>
</section>

<div class="center" id="loader">
    <img src="<?= base_url('public/images/loader.gif') ?>">
</div>

<section id="conteudo" class="content" style="display: none">
    <?php
    $alert = $this->session->flashdata('alert');
    $message = $this->session->flashdata('message');
    if ($alert != null) :
        ?>
        <input id='alert' type='hidden' value="<?= $message ?>">
        <script>
            var a = $('#alert').val();
            bootbox.alert(a, function () {
            });
        </script>
        <p class="login-box-msg"><?= process_alert($alert); ?></p>
    <?php endif; ?>
    <?= $content ?>
</section><!-- /.content -->

<script type="text/javascript">
    //Só mostra a pagina quando ela está carregada
    window.onload = function () {
        $('#conteudo').show();
        $('#loader').hide();
    };
</script>
