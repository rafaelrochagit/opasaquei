<?php
    $alert = $this->session->flashdata('alert');
    $message = $this->session->flashdata('message');
    if ($alert != null) :
        ?>
    <section class="content">
        <input id='alert' type='hidden' value="<?= $message ?>">
        <script>
            var a = $('#alert').val();
            bootbox.alert(a, function () {
            });
        </script>
        <p class="login-box-msg"><?= process_alert($alert); ?></p>
    </section><!-- /.content -->
<?php endif; ?>
<?php if(!empty($title)):?>
    <div class = "text-center titlePrincipal">
        <p><?= $title ?></p>
    </div>
<?php endif; ?>

<?= $content ?>
