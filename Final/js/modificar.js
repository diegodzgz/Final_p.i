$(document).ready(function(){
    $(".eliminar").click(function(){
        $(this).parent('td').parent('tr').remove();
        $.post('../php/ejecuta.php',{
          Caso:'Eliminar',
          Id:$(this).attr('data-id')
        },function (e) {
            alert(e);
        });
    });
    $(".modificar").click(function(){
      var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
      var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
      var precio=$(this).parent('td').parent('tr').find('.precio').val();
      var almacen=$(this).parent('td').parent('tr').find('.almacen').val();
      var origen=$(this).parent('td').parent('tr').find('.origen').val();
      var deporte=$(this).parent('td').parent('tr').find('.deporte').val();
      var marca=$(this).parent('td').parent('tr').find('.marca').val();
      $.post('../php/ejecuta.php',{Caso:'Modificar',
      Id:$(thsi)attr('data-id'),
      Nombre:nombre,
      Descripcion:descripcion,
      Precio:precio,
      Cantidad:almacen,
      Origen:origen,
      Deporte:deporte,
      Marca:marca
    },function(e){
          alert(e);
      });
    });
});
