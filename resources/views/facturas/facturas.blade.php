@extends('layouts.plantilla')
@section('content')
<div class="content-body mar-top">
    <div class="container-fluid">
        <div class="row-w justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de Facturas</div>
                    @csrf
                    <div class=card-body>
                        <div class="content-table" id="tab-scroll">
                            <div class="tb-content">
                                <table class="table display nowrap" cellspacing="0" id="TabFacturas" widht="100%">
                                    <thead class="btn-grad">
                                        <tr>
                                            <th>Código</th>
                                            <th>Total</th>
                                            <th class="text-center">Estado</th>
                                            <th>Fecha</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">
   
$(document).ready(function (){   
    tabla_facturas = $('#TabFacturas').DataTable({
        resposive: true,
        "serverSide": true,
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron registros",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "<i class='fas fa-chevron-right'></i>",
                "previous": "<i class='fas fa-chevron-left'></i>"
                }
        },
        "ajax":"{{url('api/facturas')}}",
        "columns":[
            {"data":'id_factura'},
            {"data":'total_factura'},
            {"data":'estado','render':function(data){
                if(data !='C'){
                    return `<div class='text-center'><span class='bg-success etq'>activo</span></div>`;
                }else{
                    return `<div class='text-center'><span class='bg-warning etq'>anulado</span></div>`;
                }
            }},
            {"data":'fecha','render':function(data){
                var d = new Date(data); var options = {year: 'numeric', month: '2-digit', day: '2-digit',hour: '2-digit', minute: '2-digit' };
                return  d.toLocaleDateString("PE", options);
            }},
            {"defaultContent":`<div class='text-white text-center'><button type="button" title="ver detalle" class='verdetalle btn btn-info btn-sm mr-1' data-toggle='modal' data-target='#exampleModal'><i class="far fa-eye"></i></button><button type="button" title="anular" class='btn btn-warning deletep btn-sm anular'><i class="fas fa-ban"></i></button></div>`,orderable:false,searchable:false}
        ]
    });
});
</script>
@endsection