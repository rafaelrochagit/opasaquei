
function atualizaLinha(modificado){
  var linha = $(modificado).parents('.aula-linha');
  //var tipo = floatFormat(linha.find('.tipo').val());
  var quantidade = parseInt(linha.find('.quantidade').val());
  //var local = floatFormat(linha.find('.local').val());

  var valor_aula = 60;
  
  valor = valor_aula*quantidade;
  linha.find('.total').text(valor);
}

function gravarLinha(linha){
  //var tipo = linha.find('.tipo');
  var quantidade = linha.find('.quantidade');
  //var local = linha.find('.local');
  var total = linha.find('.total');
  
  linha.find('.gravar').hide();
  //tipo.hide();
  quantidade.hide();
  //local.hide();

  linha.removeClass('remove-from-download');
  total.parent().removeClass('remove-from-download');  
  total.addClass('total-gravado');
  linha.find('.alterar').show();
  //tipo.parent().append(createDiv(tipo.find("option:selected").text()));
  quantidade.parent().append(createDiv(quantidade.find("option:selected").text()));
  //local.parent().append(createDiv(local.find("option:selected").text()));
}

function editarLinha(linha){
 // var tipo = linha.find('.tipo');
  var quantidade = linha.find('.quantidade');
  //var local = linha.find('.local');
  var total = linha.find('.total');
  
  linha.find('.gravar').show();  
  //tipo.show();
  quantidade.show();
  //local.show();
  total.parent().addClass('remove-from-download');  
  linha.addClass('remove-from-download');  

  total.removeClass('total-gravado');
  linha.find('.alterar').hide();
  //tipo.parent().children().last().remove();
  quantidade.parent().children().last().remove();
  //local.parent().children().last().remove();
}

function atualizaTotais(linha){
  var qtdTotal = parseInt(0);
  //var local = linha.find('.local');

  //Quantidade
  $('.quantidade:hidden').each(function(index){
    qtdTotal += parseInt($(this).val());
  });

  $('#qtd-aulas-total').text(qtdTotal);

  var minimo_desconto = 2; 
  var maximo_desconto = 30;
  //Porcentagem
  var porcentagem = 0;
  if(qtdTotal > maximo_desconto){
    porcentagem = maximo_desconto;
  }else if(qtdTotal >= minimo_desconto ){
    porcentagem = qtdTotal;
  }  
  $('#desconto-porcentagem').text(porcentagem);


  //Valor Sem Desconto
  var valorSemDesconto = parseInt(0);
  $('.total-gravado').each(function(index){
    valorSemDesconto += parseInt($(this).text());
  });

  $('#valor-total-sem-desconto').text(moneyFormat(valorSemDesconto));

  //Valor com Desconto
  var porcentagemDesconto = parseFloat(0);
  if(porcentagem < 10){
    porcentagemDesconto = parseFloat('0.0'+ porcentagem);
  }else{
    porcentagemDesconto = parseFloat('0.'+ porcentagem);
  }

  var desconto = valorSemDesconto * porcentagemDesconto;
  var valorComDesconto = valorSemDesconto - desconto;
  $('#valor-total-com-desconto').text(moneyFormat(valorComDesconto));
  $('#desconto-reais').text(moneyFormat(desconto));

}

function createDiv(content){
  return "<div>" + content + "</div>";
}

function floatFormat(valor){
  return parseFloat(valor.replace(',', '.'));
}
function moneyFormat(valor){
  return valor.toFixed(2).replace('.', ',');
}

$('#download-pdf').click(function(){
  var conteudo = $('#pacotes').clone();
  conteudo.find('.remove-from-download').remove();
  $('#pacote-html').val(conteudo.html());
});

$('#enviar-pacote').click(function(){
  var conteudo = $('#pacotes').clone();
  conteudo.find('.remove-from-download').remove();
  $('#pacote-html').val(conteudo.html());
  $('#pacote-anexado').show();
});