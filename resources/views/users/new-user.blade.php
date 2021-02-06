@extends('layouts.plantilla')
@section('content')
<div class="content-body mar-top">
    <div class="container-fluid">
        <div class="row-w justify-content-center">
            <div class="col-lg-10">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header text-white" style="background: url('img/photo1.png') center center; height:200px">
                        <h3 class="widget-user-username text-right">{{ Auth::user()->name }}</h3>
                        <h5 class="widget-user-desc text-right">Admin</h5>
                    </div>
                    <div class="widget-user-image mar-top">
                        <img class="img-circle" src="{{ asset('profile/default.jpg') }}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">CLIENTES</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTOS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection