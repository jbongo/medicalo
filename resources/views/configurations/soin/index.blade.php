
                <!-- table -->
                <a href="" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5 " data-target="#myModal2" data-toggle="modal"><i class="ti-user"></i>@lang('Ajouter soin')</a>
                
           
                <div class="panel panel-info m-t-15" id="cont">
                        <div class="panel-heading">Liste des soins</div>
                        <div class="panel-body">

                <div class="table-responsive" >
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>@lang(' soin')</th>
                                <th>@lang('Description')</th>
                                <th>@lang('Tarif')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        @php $soins = array(); @endphp
                        <tbody>
                        @foreach ($soins as $soin)
                            <tr>
                                
                                <td>
                                  {{$soin->nom}} 
                                </td>
                                <td style="color: #e05555;; text-decoration: underline;">
                                    <strong> {{$soin->description_soin}} </strong> 
                                </td>
                                <td style="color: #e05555;; text-decoration: underline;">
                                    <strong> {{$soin->tarif}} </strong> 
                                </td>
                                <td >
                                    <span><a href="{{route('soin.show',Crypt::encrypt($soin->id) )}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $soin->nom_soin }}"><i class="large material-icons color-info">visibility</i></a> </span>
                                    <span><a href="{{route('soin.edit',Crypt::encrypt($soin->id) )}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $soin->nom_soin }}"><i class="large material-icons color-warning">edit</i></a></span>
                                    {{-- <span><a href="{{route('switch_user',Crypt::encrypt($soin->id) )}}" data-toggle="tooltip" title="@lang('Se connecter en tant que ') {{ $soin->nom_soin }}"><i class="large material-icons color-success">person_pin</i></a></span> --}}
                                    
                                <span><a  href="{{route('soin.archive',[$soin->id,1])}}" class="delete" data-toggle="tooltip" title="@lang('Archiver ') {{ $soin->nom_soin }}"><i class="large material-icons color-danger">delete</i> </a></span>
                                </td>
                            </tr>
                    @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>

                     
        <!-- end table -->

        
        <div class="modal fade" tabindex="-1" id="myModal2" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Soin</h4>
              </div>
              <div class="modal-body">
            
                <form action="" method="post">
                 
                          <div class="form-group row">
                              <label class=" control-label" for="tarif"> Tarif <span class="text-danger">*</span></label>
                              <div class="">
                                  <input type="number" class="form-control {{$errors->has('tarif') ? 'is-invalid' : ''}}" value="{{old('tarif')}}" id="tarif" name="tarif" placeholder="" required>
                                  @if ($errors->has('tarif'))
                                  <br>
                                  <div class="alert alert-warning ">
                                      <strong>{{$errors->first('tarif')}}</strong> 
                                  </div>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class=" control-label" for="nom_soin"> Nom (référence) du soin <span class="text-danger">*</span></label>
                              <div class="">
                                  <input type="text" class="form-control {{$errors->has('nom_soin') ? 'is-invalid' : ''}}" value="{{old('nom_soin')}}" id="nom_soin" name="nom_soin" placeholder=" pathologie.." required>
                                  @if ($errors->has('nom_soin'))
                                  <br>
                                  <div class="alert alert-warning ">
                                      <strong>{{$errors->first('nom_soin')}}</strong> 
                                  </div>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class=" control-label" for="description_soin">Description <span class="text-danger">*</span></label>
                              <div class="">
                                  <textarea class="form-control {{$errors->has('description_soin') ? 'is-invalid' : ''}}" name="description_soin" id="description_soin" cols="30" rows="10"></textarea>
                                  @if ($errors->has('description_soin'))
                                  <br>
                                  <div class="alert alert-warning ">
                                      <strong>{{$errors->first('description_soin')}}</strong> 
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
        </div><!-- /.modal -->
