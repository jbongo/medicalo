<div class="row">
    <div class="col-md-6">
       
        <div class="form-group row">
            <label class="control-label" for="civilite">Type de client <span class="text-danger">*</span></label>
            <div class="">
               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                  <option value="M">Ocassionnel</option>
                  <option value="Mme">Abonnement</option>
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
            <label class=" control-label" for="nom">Montant de prestation <span class="text-danger">*</span></label>
            <div class="">
               <input type="number" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder=".." required>
               @if ($errors->has('val-lastname'))
               <br>
               <div class="alert alert-warning ">
                  <strong>{{$errors->first('nom')}}</strong> 
               </div>
               @endif
            </div>
         </div>

        <div class="form-group row">
            <label class="control-label" for="civilite">Choisir un abonnement <span class="text-danger">*</span></label>
            <div class="">
               <select class="js-select2 form-control {{$errors->has('civilite') ? 'is-invalid' : ''}}" id="civilite" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                  <option value="M">Abon - 10000 Fcfa</option>
                  <option value="M">Abon - 50000 Fcfa</option>
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
 
    </div>
 </div>
