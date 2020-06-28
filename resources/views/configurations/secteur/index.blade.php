
            <a href="" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5 " data-target="#myModal" data-toggle="modal" ><i class="ti-user"></i>@lang('Ajouter secteur')</a>
                

                        <div class="panel panel-info m-t-15" id="cont">
                                <div class="panel-heading">Liste des secteurs</div>
                                <div class="panel-body">

                        <div class="table-responsive" >
                            <table id="example" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('Nom secteur')</th>
                                        <th>@lang('ville')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                @foreach ($secteurs as $secteur)
                                    <tr>
                                        
                                        <td>
                                          {{$secteur->nom}}
                                        </td>
                                        <td style="color: #e05555;; text-decoration: underline;">
                                            <strong> {{$secteur->ville}} </strong> 
                                        </td>
                                        <td >
                                            <span><a href="{{route('secteur.show',Crypt::encrypt($secteur->id) )}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $secteur->nom }}"><i class="large material-icons color-info">visibility</i></a> </span>
                                            <span><a href="{{route('secteur.edit',Crypt::encrypt($secteur->id) )}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $secteur->nom }}"><i class="large material-icons color-warning">edit</i></a></span>
                                            {{-- <span><a href="{{route('switch_user',Crypt::encrypt($secteur->id) )}}" data-toggle="tooltip" title="@lang('Se connecter en tant que ') {{ $secteur->nom }}"><i class="large material-icons color-success">person_pin</i></a></span> --}}
                                            
                                        <span><a  href="{{route('secteur.delete',[$secteur->id,1])}}" class="delete" data-toggle="tooltip" title="@lang('Archiver ') {{ $secteur->nom }}"><i class="large material-icons color-danger">delete</i> </a></span>
                                        </td>
                                    </tr>
                            @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                 
                <!-- end table -->


            
                <div class="modal fade" tabindex="-1" id="myModal" role="dialog" >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Secteur</h4>
                        </div>
                        <div class="modal-body">
                      
                          <form action="{{ route('secteur.store') }}" method="post">
                            
                            @csrf
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
           
           
                         
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                          <input type="submit" class="btn btn-primary" value="Enregistrer" />
                        </div>

                    </form>
                </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
           
              
        
            