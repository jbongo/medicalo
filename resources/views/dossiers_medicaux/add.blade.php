@extends('layouts.app')
@section('content')
   @section ('page_title')
   Ajout d'un Dossier
   @endsection

@if (session('ok'))
      
<div class="alert alert-success alert-dismissible fade in">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
</div>
@endif  

@if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif

<style>
   /* .process-step .btn:focus{outline:none} */
.process{display:table;width:100%;position:relative}
.process-row{display:table-row}
.process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
.process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
.process-step{display:table-cell;text-align:center;position:relative}
.process-step p{margin-top:4px}
.btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%}

</style>
<div class="card">
   <div class="col-lg-12">
      <a href="{{route('dossier.index')}}" class="btn btn-warning btn-flat btn-addon m-b-10 m-l-5"><i class="ti-angle-double-left"></i>@lang('Liste des dossiers')</a>
   </div>
   <br/>
   <div class="card-body">
      <div class="form-validation">
         <div class="process">
            <div class="process-row nav nav-tabs">
               <div class="process-step">
                  <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
                  <p>Info patient</small></p>
               </div>
               <div class="process-step">
                  <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                  <p>Fiche rapport</small></p>
               </div>
               <div class="process-step">
                  <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-file fa-3x"></i></button>
                  <p>Fiche médicale sécurisée</small></p>
               </div>
               <div class="process-step">
                  <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-credit-card fa-3x"></i></button>
                  <p>Tarification</small></p>
               </div>
            </div>
         </div>
      <form class="form-horizontal" >

         <div class="tab-content">
            <div id="menu1" class="tab-pane fade active in">
               <h3>Info patient</h3> <br>
                  @include('dossiers_medicaux.components.add-info-patient')
                 <hr>
               <ul class="list-unstyled list-inline ">
                  <li><button type="button" class="btn btn-info next-step">Suivant <i class="fa fa-chevron-right"></i></button></li>
               </ul>
            </div>



            <div id="menu2" class="tab-pane fade">
               <h3>Fiche patient rapport</h3>

               @include('dossiers_medicaux.components.add-fiche-rapport')
              
               <ul class="list-unstyled list-inline ">
                  <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Précédant</button></li>
                  <li><button type="button" class="btn btn-info next-step">Suivant <i class="fa fa-chevron-right"></i></button></li>
               </ul>
            </div>



            <div id="menu3" class="tab-pane fade">
               <h3>Fiche médicale sécurisée</h3>
               @include('dossiers_medicaux.components.add-fiche-medicale')
               <hr>

               <ul class="list-unstyled list-inline ">
                  <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Précédant</button></li>
                  <li><button type="button" class="btn btn-info next-step">Suivant <i class="fa fa-chevron-right"></i></button></li>
               </ul>
            </div>



            <div id="menu4" class="tab-pane fade">
               <h3>Tarification</h3>
               @include('dossiers_medicaux.components.add-tarification')
               <hr>
               <ul class="list-unstyled list-inline ">
                  <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Précédant</button></li>
                  <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Terminer!</button></li>
               </ul>
            </div>

         </div>
         </div>
      </div>
   </div>
</div>
<!-- /.MultiStep Form -->

@endsection 
     


@section('js-content') 

<script>
   $(function(){
$('.btn-circle').on('click',function(){
  $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
  $(this).addClass('btn-info').removeClass('btn-default').blur();
});

$('.next-step, .prev-step').on('click', function (e){
  var $activeTab = $('.tab-pane.active');

  $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

  if ( $(e.target).hasClass('next-step') )
  {
     var nextTab = $activeTab.next('.tab-pane').attr('id');
     $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
     $('[href="#'+ nextTab +'"]').tab('show');
  }
  else
  {
     var prevTab = $activeTab.prev('.tab-pane').attr('id');
     $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
     $('[href="#'+ prevTab +'"]').tab('show');
  }
});
});
</script>

@endsection