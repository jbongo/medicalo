@extends('layouts.app')


@section('content')

@section ('page_title')
<a class="btn btn-success btn-flat btn-addon btn-sm m-l-5 " id="ajouter"><i class="ti-plus"></i>Stats 2019</a> 
@endsection


{{--  CA ANNEE N --}}
<div class="row" >
      
    <div class="col-lg-8">
        <div class="card alert">
            <div class="card-header">
                <h4>Chiffre d'affaires 2020 </h4>
                {{-- <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="sales-chart">
                <canvas id="sales-chart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-4" >
        <div class="card" style="height: 100%; ">
            <div class="card-body">
                <h4 class="card-title">Chiffre d'affaire annuel (2020)</h4>
                <div id="morris-donut-chart"></div>
            </div>
            <div>
            </div>
        </div>
        
    </div>
     
  
</div>


@section('js-content')

@endsection