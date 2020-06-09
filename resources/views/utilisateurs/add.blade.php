@extends('layouts.app')
@section('content')
@section ('page_title')
Ajout d'un utilisateur
@endsection
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">
      @if (session('ok'))
      <div class="alert alert-success alert-dismissible fade in">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong> {{ session('ok') }}</strong>
      </div>
      @endif      
      <div class="card">
         <div class="col-lg-12">
            <a href="{{route('utilisateur.index')}}" class="btn btn-warning btn-flat btn-addon m-b-10 m-l-5"><i class="ti-angle-double-left"></i>@lang('Liste des utilisateurs')</a>
         </div>
         <div class="card-body">
            <div class="form-validation">
               <form class="form-valide form-horizontal" action="{{ route('utilisateur.add') }}" method="post">
                  {{ csrf_field() }}

                <div class="row">
                    <hr>
                    <hr>
                    <hr>
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="statut">Rôle <span class="text-danger">*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <select class="js-select2 form-control {{$errors->has('role') ? 'is-invalid' : ''}}" id="role" name="role" style="width: 100%;"required>
                                  <option value="{{old('role')}}">{{old('role')}}</option>
                                  <option value="infirmier">infirmier</option>
                                  <option value="responsable">responsable</option>
                                  <option value="admin">administrateur</option>
                               </select>
                               @if ($errors->has('role'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('role')}}</strong> 
                               </div>
                               @endif
                            </div>
                         </div>
       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="civilite">@lang('Civilité') <span class="text-danger">*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                                  <option value="{{old('civilite')}}">{{old('civilite')}}</option>
                                  <option value="M">M</option>
                                  <option value="Mme">Mme</option>
                               </select>
                               @if ($errors->has('civilite'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('civilite')}}</strong> 
                               </div>
                               @endif
                            </div>
                         </div>
       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="nom">Nom <span class="text-danger">*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Nom.." required>
                               @if ($errors->has('val-lastname'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('nom')}}</strong> 
                               </div>
                               @endif
                            </div>
                         </div>
       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="prenom">Prénom <span class="text-danger">*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text"  class="form-control {{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="{{old('prenom')}}" id="prenom" name="prenom" placeholder="Prénom.." required>
                               @if ($errors->has('val-firstname'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('prenom')}}</strong> 
                               </div>
                               @endif
                            </div>
                         </div>
       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="val-email">Email<span class="text-danger">*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="val-email" value="{{old('email')}}" name="email" placeholder="Email.." required>
                               @if ($errors->has('email'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('email')}}</strong> 
                               </div>
                               @endif
                            </div>
                         </div>

                       
                  
                       

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="adresse">Adresse </label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{ $errors->has('adresse') ? ' is-invalid' : '' }}" value="{{old('adresse')}}" id="adresse" name="adresse" placeholder="N° et Rue.." >
                               @if ($errors->has('adresse'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('adresse')}}</strong> 
                               </div>
                               @endif   
                            </div>
                         </div>
       

       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="secteur">Secteur</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{ $errors->has('secteur') ? ' is-invalid' : '' }}" value="{{old('secteur')}}" id="secteur" name="secteur" placeholder="Ex: Marcory" >
                               @if ($errors->has('secteur'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('secteur')}}</strong> 
                               </div>
                               @endif 
                            </div>
                         </div>
       
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="ville">Ville </label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{ $errors->has('ville') ? ' is-invalid' : '' }}" value="{{old('ville')}}" id="ville" name="ville" placeholder="EX: Paris.." >
                               @if ($errors->has('ville'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('ville')}}</strong> 
                               </div>
                               @endif 
                            </div>
                         </div>
       
                      
                         <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="telephone1">Téléphone 1 </label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                               <input type="text" class="form-control {{ $errors->has('telephone1') ? ' is-invalid' : '' }}" value="{{old('telephone1')}}" id="telephone1" name="telephone1" placeholder="Ex: 0600000000.." >
                               @if ($errors->has('telephone1'))
                               <br>
                               <div class="alert alert-warning ">
                                  <strong>{{$errors->first('telephone1')}}</strong> 
                               </div>
                               @endif     
                            </div>
                         </div>

                         <div class="form-group row">
                           <label class="col-lg-4 col-md-4 col-sm-4 control-label" for="telephone2">Téléphone 2 </label>
                           <div class="col-lg-8 col-md-8 col-sm-8">
                              <input type="text" class="form-control {{ $errors->has('telephone2') ? ' is-invalid' : '' }}" value="{{old('telephone2')}}" id="telephone2" name="telephone2" placeholder="Ex: 0600000000.." >
                              @if ($errors->has('telephone2'))
                              <br>
                              <div class="alert alert-warning ">
                                 <strong>{{$errors->first('telephone2')}}</strong> 
                              </div>
                              @endif     
                           </div>

                        </div>
                    </div>
                </div>
                  
                  <div class="form-group row" style="text-align: center; margin-top: 50px;">
                     <div class="col-lg-8 ml-auto">
                        <button class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5 submit" id="ajouter"><i class="ti-plus"></i>Enregistrer</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>


@stop
@section('js-content') 

<script>
 $('#nom').keyup(function(){
        $(this).val($(this).val().toUpperCase());
 });
 $('#ville').keyup(function(){
        $(this).val($(this).val().toUpperCase());
 });

 $('#prenom').on('focusout',function(){
      //   $(this).val( $(this).val().chartAt(0).toUpperCase());
      var prenom = $(this).val(); 
      tab  = prenom.split(" ");
      var prenoms = "";
      tab.forEach(element => {

         first = ""+element.substring(0,1);
         first=first.toUpperCase();

         second = element.substring(1,);

         prenoms+= first+second+" ";
      });
      $(this).val(prenoms);
      // console.log(tab);
      
 });

</script>


@endsection