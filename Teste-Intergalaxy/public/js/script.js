function myFunction(qtdId, priceId, valor) {
    var qtd = document.getElementById(qtdId);
    var price = document.getElementById(priceId);

    var mult = qtd.value * valor;

    price.innerHTML(mult);
}