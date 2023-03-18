/*
const handleValor  = (event) => {
  let input = event
  //input.value = valorMask(input.value)

  input.value = formatarValor(input.value)
}

function formatarValor(valor){
  valor = parseFloat(valor)
  let valorFormatado = valor.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
  return valorFormatado;
}

const valorMask = (value) => {
  if (!value) return ""
  value = value.replace(/^(\d{3})(\d{3})(\d{2})/, "R$ $1.$2,$3")
  return value  
}

*/


$(document).ready(function () {
  $("#preco-compra").inputmask('decimal', {
    'groupSeparator': '.',
    'digits': 2,
    'radixPoint': ",",
    'prefix': 'R$ ',
  });

  $("#preco-venda").inputmask('decimal', {
    'groupSeparator': '.',
    'digits': 2,
    'radixPoint': ",",
    'prefix': 'R$ ',
  });
  //$('#preco-compra').mask(' 000.000.000.000.000,00', {reverse: true});
  //$('#preco-venda').mask('000.000.000.000.000,00', {reverse: true});

});


