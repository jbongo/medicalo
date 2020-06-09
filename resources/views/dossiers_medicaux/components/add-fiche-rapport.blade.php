<div class="row">
    <div class="col-md-6">
       
        <div class="form-group row">
            <label class="control-label" for="civilite">Médécin traitant <span class="text-danger">*</span></label>
            <div class="">
               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                  <option value="{{old('civilite')}}">{{old('civilite')}}</option>
                  <option value="M">Dr. octo philipe</option>
                  <option value="Mme">Dr. Louis Sinte</option>
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
            <label class="control-label" for="civilite">Pathologie antécédent <span class="text-danger">*</span></label>
            <div class="">
               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                  <option value="{{old('civilite')}}">{{old('civilite')}}</option>
                  <option value="M">Marcory</option>
                  <option value="Mme">Angré Sud</option>
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
            <label class="control-label" for="civilite">Soin nécessaire <span class="text-danger">*</span></label>
            <div class="">
               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                  <option value="{{old('civilite')}}">{{old('civilite')}}</option>
                  <option value="M">Massage</option>
                  <option value="Mme">Injection</option>
               </select>
               @if ($errors->has('civilite'))
               <br>
               <div class="alert alert-warning ">
                  <strong>{{$errors->first('civilite')}}</strong> 
               </div>
               @endif
            </div>
         </div>


     
      
 
 
       
 
    </div>
    <div class="col-md-6">
 
      
 
 
       <div class="form-group row">
          <label class=" control-label" for="nom">Date d'arrivée <span class="text-danger">*</span></label>
          <div class="">
             <input type="date" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Adresse postale.." required>
             @if ($errors->has('val-lastname'))
             <br>
             <div class="alert alert-warning ">
                <strong>{{$errors->first('nom')}}</strong> 
             </div>
             @endif
          </div>
       </div>
 
       <div class="form-group row">
        <label class=" control-label" for="nom">Heure d'arrivée <span class="text-danger">*</span></label>
        <div class="">
           <input type="time" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Adresse postale.." required>
           @if ($errors->has('val-lastname'))
           <br>
           <div class="alert alert-warning ">
              <strong>{{$errors->first('nom')}}</strong> 
           </div>
           @endif
        </div>
     </div>

     <div class="form-group row">
        <label class=" control-label" for="nom">Heure de départ  <span class="text-danger">*</span></label>
        <div class="">
           <input type="time" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Adresse postale.." required>
           @if ($errors->has('val-lastname'))
           <br>
           <div class="alert alert-warning ">
              <strong>{{$errors->first('nom')}}</strong> 
           </div>
           @endif
        </div>
     </div>
 
    </div>
 </div>
 

     
        <fieldset class="col-md-12">
            <legend>Personne à prévenir en cas d&#39;urgence</legend>
            <div class="panel panel-warning">
                <div class="panel-body">
                   
                        

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="form-group row">
                                <label class=" col-form-label" for="raison_sociale">Nom<span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" class="form-control"  value="" id="raison_sociale" name="raison_sociale" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class=" col-form-label" for="numero_siret">Prénom<span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" class="form-control" value="" id="numero_siret" name="numero_siret" required>
                                </div>
                            </div>
                            

                            

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group row">
                                <label class=" col-form-label" for="adresse">Contact téléphonique<span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group row">
                                <label class=" col-form-label" for="code_postal">Email<span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="email" min="0" class="form-control" value="" id="code_postal" name="code_postal" required>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </fieldset>

  
 