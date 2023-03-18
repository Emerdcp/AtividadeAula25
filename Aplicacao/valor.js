
$(document).ready(function(){
  $("#preco-compra").inputmask('decimal', {
    'groupSeparator': '.',
    'digits': 2,
    'radixPoint': ",",
    'prefix': 'R$ ',
});


});

  //$('#preco-compra').mask(' 000.000.000.000.000,00', {reverse: true});
  //$('#preco-venda').mask('000.000.000.000.000,00', {reverse: true});
