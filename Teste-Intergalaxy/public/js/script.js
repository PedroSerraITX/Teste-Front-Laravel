var preco = document.getElementById('preco');
var quant = document.getElementById('quant');
var total = document.getElementById('total[]');
var table = document.querySelector('table');

table.addEventListener('input', function(e) {
  var quant = e.target.matches('[name="quant[]"]') && e.target;
  var tr = quant.parentElement;
  while (tr = tr.parentElement) {
    if (tr.matches('tr')) break;
  }
  var preco = tr.querySelector('[name="preco[]"]');
  var total = tr.querySelector('[name="total[]"]');
  total.value = Number(preco.value) * Number(quant.value);
});