$(function () {
    $("#price").maskMoney({
        prefix: "R$ ",
        decimal: ",",
        thousands: "."
    });
    $('[data-mask]').inputmask()
})