@php
    if(isset($buscarProductos))
    {
        echo
        "<div class='modal-header bg-kumel-2'>
            <h6 class='modal-title text-kumel-titulo' id='exampleModalLabel'>Resultados de busqueda</h6>
            <button type='button' id='botonCerrarDespacho' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
       </div>
       <div class='modal-body bg-light'>
            <table class='responsive-table table table-hover table-bordered' id='tablaBuscar' style='width:100%;' >
            <thead>
              <tr>
                
                 <th class='bg-kumel-2 text-kumel-titulo'>Imagen</th>
                 <th class='bg-kumel-2 text-kumel-titulo'>Imagen2</th>
                 <th class='bg-kumel-2 text-kumel-titulo'>Imagen3</th>
                 <th class='bg-kumel-2 text-kumel-titulo'>Producto</th>
                 <th class='bg-kumel-2 text-kumel-titulo'>Unidad</th>
                 <th class='bg-kumel-2 text-kumel-titulo'>precio</th>
                 <th class='text-white'>Codigo</th>
                 <th class='text-ligth'>Tamano</th>
                 <th class='text-ligth'>codigo_unidad</th>
                 <th class='text-ligth'>stock</th>
              </tr>
            </thead><br>
       <tbody> ";
        foreach($buscarProductos as $value)
           {
            echo"<tr>
                <td class='text-kumel-titulo'> <img id='imagen-producto' src=" . $value->IMAGEN1 . "  height='70' width='70'> </td>
                <td class='text-kumel-titulo'> <img id='imagen-producto' src=" . $value->IMAGEN2 . "  height='70' width='70'> </td>
                <td class='text-kumel-titulo'> <img id='imagen-producto' src=" . $value->IMAGEN3 . "  height='70' width='70'> </td>
                <td class='text-kumel-titulo'>". $value->DESCRIPCION."</td>	
                <td class='text-kumel-titulo'> ". $value->TAMANO. " " . $value->CODIGO_UNIDAD. "</td>
                <td class='text-kumel-tituloh'> " . $value->PRECIO_VENTA . "</td>
                <td>".$value->ID_PRODUCTO."</td>	
                <td>".$value->TAMANO."</td>	
                <td>".$value->CODIGO_UNIDAD."</td>	
                <td>".$value->STOCK."</td>	
                </tr>";

           }
           
            
           
          echo "</tbody>
        </table>
        </div>";
    }

@endphp






<script src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
 <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- slick Slider JS-->
 <script type="text/javascript" src="slick/slick.min.js"></script>
 <!-- Sidebar JS-->
 <script type="text/javascript" src="sidebar/hc-offcanvas-nav.js"></script>
 <!-- Custom scripts for all pages-->
 <script src="js/osahan.js"></script>
 <script src="js/topuva.js"></script>
 <script src="js/alertify.js"></script>
<script src="js/modalMensaje.js"></script>
<script>
 $(document).ready(function() {
  $("#tablaBuscar").DataTable({
  
    "language":
    {
        "url": "js/Spanish.json.js" ,
                
    },
    'columns' : [
        null,
        {'visible' : false,"width": "0px" },
        {'visible' : false,"width": "0px" },
        null,
        null,
        null,
        //hide the fourth column
        {'visible' : false,"width": "0px" },
        {'visible' : false,"width": "0px" },
        {'visible' : false,"width": "0px" },
        {'visible' : false,"width": "0px" },
    ],
    "responsive": true,
    "lengthChange": true,
    "ordering": false,
    "info": false,
    "lengthChange": true,
    
   
    
});





var table = $('#tablaBuscar').DataTable();

$('#tablaBuscar tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        var imagen = $(data[0]).attr("src");
        var imagen1 = $(data[1]).attr("src");
        var imagen2 = $(data[2]).attr("src");
        oCarrito.LinkProducto(imagen,imagen1,imagen2,data[3],data[5],data[7],data[8] , data[9],data[6]);
        $("#botonCerrarDespacho").click();
                        
    } );
});
</script>
