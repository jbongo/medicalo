<div class="row">
   <div class="col-md-6">
      
      <div class="form-group row">
         <label class=" control-label" for="nom">Nom <span class="text-danger">*</span></label>
         <div class="">
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
         <label class=" control-label" for="nom">Prénom <span class="text-danger">*</span></label>
         <div class="">
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
         <label class=" control-label" for="nom">Date de naissance <span class="text-danger">*</span></label>
         <div class="">
            <input type="date" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Nom.." required>
            @if ($errors->has('val-lastname'))
            <br>
            <div class="alert alert-warning ">
               <strong>{{$errors->first('nom')}}</strong> 
            </div>
            @endif
         </div>
      </div>

      <div class="form-group row">
         <label class=" control-label" for="nom">Email <span class="text-danger">*</span></label>
         <div class="">
            <input type="email" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Email.." required>
            @if ($errors->has('val-lastname'))
            <br>
            <div class="alert alert-warning ">
               <strong>{{$errors->first('nom')}}</strong> 
            </div>
            @endif
         </div>
      </div>
      

      

   </div>
   <div class="col-md-6">

      <div class="form-group row">
         <label class=" control-label" for="nom">Numéro client <span class="text-danger">*</span></label>
         <div class="">
            <input type="text" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Numéro client.." required>
            @if ($errors->has('val-lastname'))
            <br>
            <div class="alert alert-warning ">
               <strong>{{$errors->first('nom')}}</strong> 
            </div>
            @endif
         </div>
      </div>

      <div class="form-group row">
         <label class="control-label" for="civilite">Secteur <span class="text-danger">*</span></label>
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
         <label class=" control-label" for="nom">Adresse postale <span class="text-danger">*</span></label>
         <div class="">
            <input type="text" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Adresse postale.." required>
            @if ($errors->has('val-lastname'))
            <br>
            <div class="alert alert-warning ">
               <strong>{{$errors->first('nom')}}</strong> 
            </div>
            @endif
         </div>
      </div>
      
      <div class="form-group row">
         <label class=" control-label" for="nom">Contact téléphonique<span class="text-danger">*</span></label>
         <div class="">
            <input type="number" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" value="{{old('nom')}}" id="nom" name="nom" placeholder="Contact.." required>
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
