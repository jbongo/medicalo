
                <!-- table -->
            <a href="" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5 " data-target="#myModal1" data-toggle="modal"><i class="ti-user"></i>@lang('Ajouter pathologie')</a>
                
           
                        <div class="panel panel-info m-t-15" id="cont">
                            <div class="panel-heading">Liste des pathologies</div>
                                <div class="panel-body">

                                    <div class="table-responsive" >
                                        <table id="example1" class="display  nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>@lang(' pathologie')</th>
                                                    <th>@lang('Description')</th>
                                                    <th>@lang('Action')</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($pathologies as $pathologie)
                                                    <tr>
                                                        
                                                        <td>
                                                       {{$pathologie->nom}} 
                                                        </td>
                                                        <td style="color: #e05555;; text-decoration: underline;">
                                                            <strong> {{$pathologie->description}} </strong> 
                                                        </td>
                                                        <td >
                                                            <span><a href="{{route('pathologie.show',Crypt::encrypt($pathologie->id) )}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $pathologie->nom_patho }}"><i class="large material-icons color-info">visibility</i></a> </span>
                                                            <span><a href="{{route('pathologie.edit',Crypt::encrypt($pathologie->id) )}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $pathologie->nom_patho }}"><i class="large material-icons color-warning">edit</i></a></span>
                                                            {{-- <span><a href="{{route('switch_user',Crypt::encrypt($pathologie->id) )}}" data-toggle="tooltip" title="@lang('Se connecter en tant que ') {{ $pathologie->nom_patho }}"><i class="large material-icons color-success">person_pin</i></a></span> --}}
                                                            
                                                        <span><a  href="{{route('pathologie.delete',[$pathologie->id,1])}}" class="delete" data-toggle="tooltip" title="@lang('Archiver ') {{ $pathologie->nom_patho }}"><i class="large material-icons color-danger">delete</i> </a></span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>    
                                        </table>
                                    </div>
                                </div>
                            </div>
                        

                  
                <!-- end table -->

     {{-- modal pathologie --}}


               
                {{-- Modal --}}

                <div class="modal fade" tabindex="-1" id="myModal1" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">pathologie</h4>
                        </div>
                        <div class="modal-body">
                      
                          <form action="{{ route('pathologie.store') }}" method="post">
                          
                                @csrf
                                    <div class="form-group row">
                                        <label class=" control-label" for="nom_patho"> pathologie <span class="text-danger">*</span></label>
                                        <div class="">
                                            <input type="text" class="form-control {{$errors->has('nom_patho') ? 'is-invalid' : ''}}" value="{{old('nom_patho')}}" id="nom_patho" name="nom" placeholder=" pathologie.." required>
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
                                            <textarea class="form-control {{$errors->has('description_patho') ? 'is-invalid' : ''}}" name="description" id="description_patho" cols="30" rows="10"></textarea>
                                            @if ($errors->has('description_patho'))
                                            <br>
                                            <div class="alert alert-warning ">
                                                <strong>{{$errors->first('description_patho')}}</strong> 
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
  
            
            
  

         