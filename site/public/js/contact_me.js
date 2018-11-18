// Contact Form Scripts
function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}
function mtel(v) {
    v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

window.onload = function () {
    $('.telefone').on('keyup', function(){
        mascara(this, mtel);
    }) 
}

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var pacote = $("input#pacote-html").val();
            var tipo = $("#tipo").val();
            var como_chegou = $("#como_chegou").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: BASE_URL + "ajax/AjaxController/enviarEmail",
                type: "POST",
                data: {
                    nome: name,
                    telefone: phone,
                    email: email,
                    mensagem: message,
                    tipo: tipo,
                    pacote: pacote,
                    como_chegou: como_chegou
                },
                cache: false,
                success: function(data) {
                    console.log(data);
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                    $('#success > .alert-success')
                    .append("<strong>Sua mensagem foi enviada com sucesso!. </strong>");
                    $('#success > .alert-success')
                    .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function(data) {
                    console.log(data);
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                    $('#success > .alert-danger').append($("<strong>").text("Desculpe " + firstName + ", o servidor de e-mail não está repondendo. Tente novemente mais tarde!"));
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
