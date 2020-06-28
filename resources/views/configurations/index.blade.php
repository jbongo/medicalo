@extends('layouts.app')
@section('content')
   @section ('page_title')
  Configuration
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


<div class="card">
   <div class="col-lg-12">
   </div>
   <br/>
   <div class="card-body">
      <div class="default-tab">

         <ul class="nav nav-tabs" role="tablist">
            <li   role="presentation" class="active"><a role="tab" data-toggle="tab" href="#secteur">Secteurs</a></li>        
            <li  role="presentation" ><a role="tab" data-toggle="tab" href="#pathologie">Pathologies</a></li>
            <li  role="presentation" ><a role="tab" data-toggle="tab" href="#soin">Soins </a></li>
            {{-- <li  role="presentation" ><a role="tab" data-toggle="tab" href="#abonnement">Abonnements</a></li> --}}
         </ul>

         <div class="tab-content">
            <div role="tabpanel" id="secteur" class="tab-pane fade in active">
            @include("configurations.secteur.index")
            </div>
            <div role="tabpanel" id="pathologie" class="tab-pane fade">
               @include("configurations.pathologie.index")

            </div>
            <div role="tabpanel" id="soin" class="tab-pane fade">
               @include("configurations.soin.index")
            </div>
            {{-- <div role="tabpanel" id="abonnement" class="tab-pane fade">
               @include("configurations.abonnement.index")

            </div> --}}
         </div>
      </div>
   </div>




   {{-- modal secteur --}}
       {{-- Modal --}}

       {{-- <div class="modal fade" tabindex="-1" id="myModal" role="dialog" >
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title" id="gridSystemModalLabel">Secteur</h4>
             </div>
             <div class="modal-body">
           
               <form action="" method="post">
                 <div class="row">
                     <div class="col-md-6">

                         <div class="form-group row">
                             <label class=" control-label" for="nom">Nom secteur <span class="text-danger">*</span></label>
                             <div class="">
                                 <input type="text" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="nom secteur.." required>
                                 @if ($errors->has('nom'))
                                 <br>
                                 <div class="alert alert-warning ">
                                     <strong>{{$errors->first('nom')}}</strong> 
                                 </div>
                                 @endif
                             </div>
                         </div>
                         <div class="form-group row">
                             <label class=" control-label" for="ville">ville <span class="text-danger">*</span></label>
                             <div class="">
                                 <input type="text" class="form-control {{$errors->has('ville') ? 'is-invalid' : ''}}" value="{{old('ville')}}" id="ville" name="ville" placeholder="ville.." required>
                                 @if ($errors->has('ville'))
                                 <br>
                                 <div class="alert alert-warning ">
                                     <strong>{{$errors->first('ville')}}</strong> 
                                 </div>
                                 @endif
                             </div>
                         </div>


               </form>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
               <button type="button" class="btn btn-primary">Enregistrer</button>
             </div>
           </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
       </div><!-- /.modal --> --}}



  

          
  {{-- modal pathologie --}}


               
                {{-- Modal --}}
{{-- 
                <div class="modal fade" tabindex="-1" id="myModal1" role="dialog" aria-labelledby="gridSystemModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">pathologie</h4>
                      </div>
                      <div class="modal-body">
                    
                        <form action="" method="post">
                          <div class="row">
                              <div class="col-md-6">

                                  <div class="form-group row">
                                      <label class=" control-label" for="nom_patho"> pathologie <span class="text-danger">*</span></label>
                                      <div class="">
                                          <input type="text" class="form-control {{$errors->has('nom_patho') ? 'is-invalid' : ''}}" value="{{old('nom_patho')}}" id="nom_patho" name="nom_patho" placeholder="nom_patho pathologie.." required>
                                          @if ($errors->has('nom_patho'))
                                          <br>
                                          <div class="alert alert-warning ">
                                              <strong>{{$errors->first('nom_patho')}}</strong> 
                                          </div>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class=" control-label" for="description_patho">Description <span class="text-danger">*</span></label>
                                      <div class="">
                                          <textarea class="form-control {{$errors->has('description_patho') ? 'is-invalid' : ''}}" name="description_patho" id="description_patho" cols="30" rows="10"></textarea>
                                          @if ($errors->has('description_patho'))
                                          <br>
                                          <div class="alert alert-warning ">
                                              <strong>{{$errors->first('description_patho')}}</strong> 
                                          </div>
                                          @endif
                                      </div>
                                  </div>


                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> --}}

    


</div>

@endsection 
     


@section('js-content') 

<script>
   
</script>

@endsection