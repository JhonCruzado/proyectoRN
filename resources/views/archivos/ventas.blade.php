<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ public_path('img/cropped-favicon.ico.png')}}">
    <title>Factura de venta</title>
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
</head>
<body>
<div class="content-body">
    <div></div>
    @if($detalle[0]->estado =='C')
    <img src="{{ public_path('img/anulado.png') }}" class="img-cancelado"> 
    @endif
    <div class="container-fluid">
        <div class="row-w margen">
            <div class="col-w">
                <img src="{{ public_path('img/cropped-favicon.ico.png')}}" alt="aa" with="100px" height="100px">
            </div>
            <div class="col-w text-center">
                <div>
                    <div>Electro Ventas</div>
                    <div>La Libertad - Chepén</div>
                    <div>Celular: 972455889</div>
                    <div>electroventas@hotmail.com</div>
                </div>
            </div>
            <div class="col-w">
                <div class="float-right">
                    <div class="factura">
                        <div class="factura-header text-center">Factura</div>
                        <div class="factura-body">
                            <div><span>Nº de factura: </span><span>00{{$facturas->id_factura }}</span></div>
                            <div><span>vendedor: </span><span>{{$detalle[0]->name}}</span></div>
                            <div><span>Fecha: </span><span>{{ date("d/m/Y", strtotime($facturas->fecha)) }}</span></div>
                            <div><span>Hora: </span><span>{{ date("H:i A", strtotime($facturas->fecha)) }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-w">
            <div class="col-w">
                <div class="cliente mb-3">
                    <div class="cliente-head text-center">Datos del cliente</div>
                    <div class="cliente-body">
                        <div>Nombres: {{$detalle[0]->nombres}} {{$detalle[0]->apellidos}}</div>
                        <div>DNI: {{$detalle[0]->dni}}</div>
                        <div>Teléfono/Celular: {{$detalle[0]->telefono}}</div>
                        <div>Dirección: {{$detalle[0]->direccion}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-w">
            <div class="col-w">
                <table class="table-w">
                    <thead class="table-head">
                        <tr class="tr">
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Precio total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($detalle as $d)
                        <tr>
                        <th>{{ $d->id_producto }}</th>
                        <td>{{ $d->producto }}</td>
                        <td>{{ $d->descripcion }}</td>
                        <td class="text-center">{{ $d->cantidad }}</td>
                        <td class="text-center">{{ $d->precio_total }}</td>
                        <td class="text-center">{{ $d->cantidad * $d->precio_total }}</td>
                        </tr>
                        <?php $total = $total + ($d->cantidad * $d->precio_total) ?>
                    @endforeach
                    </tbody>
                    <tbody>
                        <tr>
                        <th colspan="5"><div class="row-w float-right">Total a pagar:</div></th>
                        <td class="text-center">S/.{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div><br><br>
            
        </div> 
    </div>
</div>
</body>
</html>