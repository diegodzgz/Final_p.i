
var inicio = function () {

  $(".cantidad").keyup(function(e) {
    if ($(this).val() !='') {
        if (e.keyCode==13) {
          var id=$(this).attr('data-id');
          var precio=$(this).attr('data-precio');
          var cantidad=$(this).val();
          $(this).parentsUntil('col-sm-4 col-lg-4 col-md-4').find('.subtotal').text('Subtotal: ' + (precio*cantidad));
          $.post('../php/modificardatos.php',{Id:id,Precio:precio,Cantidad:cantidad},function(e){$('#total').text('Total= ' + e)});
        }
    }
  });
  $(".eliminar").click(function(e){
      e.preventDefault();
      var id=$(this).attr('data-id');
        $(this).parentsUntil('.col-sm-4 col-lg-4 col-md-4').remove();
        $.post('eliminar.php',{
          Id:id
        },function(a){
          location.href="carrito.php";
          if (a=='0') {
            location.href="carrito.php";
          }
        });
  });
}

$(document).on('ready',inicio);
