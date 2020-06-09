@extends('layouts.app') 
@section('content') 
@section ('page_title') 
    Profil de {{ $utilisateur->nom }} {{ $utilisateur->nom }}
@endsection
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="col-lg-12">
               <div class="panel panel-info lobipanel-basic">
                  <div class="panel-heading">Fiche utilisateur.</div>
                  <div class="panel-body">
                     <div class="card alert">
                        <div class="card-body">
                           <div class="user-profile">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <div class="col-lg-12">
                                       <div class="user-photo m-b-30">
                                          <img class="img-responsive" style="object-fit: cover; width: 225px; height: 225px; border: 5px solid #8ba2ad; border-style: solid; border-radius: 20px; padding: 3px;" src="{{asset('/images/avatar/'.(($utilisateur->civilite == "Mme." || $utilisateur->civilite == "Mme") ? "user_female.jpg ": "user_male.jpg"))}}" alt="">
                                       </div>
                                    </div>
    
                                    <div class="user-skill">
                                       <h4 style="color: #32ade1;text-decoration: underline;">Options</h4>
                                        @if (auth()->user()->role == "admin")
                                            <a href="{{route('utilisateur.edit',Crypt::encrypt($utilisateur->id) )}}"  class="btn btn-warning btn-rounded btn-addon btn-xs m-b-10"><i class="ti-pencil"></i>Modifier</a>
                                        @endif
                                        
                                     
                                        
                                    </div>
                                 </div>
                                 <div class="col-lg-8">
                                    <div class="user-profile-name" style="color: #d68300;">{{$utilisateur->civilite}} {{$utilisateur->nom}} {{$utilisateur->prenom}}</div>
                                    <div class="user-Location"><i class="ti-location-pin"></i> {{$utilisateur->ville}}</div>
                                    
                                    <div class="custom-tab user-profile-tab">
                                       <ul class="nav nav-tabs" role="tablist">
                                          <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Détails</a></li>
                                       </ul>
                                       <div class="tab-content">
                                          <div role="tabpanel" class="tab-pane active" id="1">
                                             <div class="contact-information">
                                                <div class="phone-content">
                                                    <span class="contact-title"><strong>Rôle:</strong></span>
                                                    <span class="phone-number" style="color: #ff435c;">{{$utilisateur->role}}</span>
                                                </div>
                                                <div class="phone-content">
                                                   <span class="contact-title"><strong>Téléphone:</strong></span>
                                                   <span class="phone-number" style="color: #ff435c; text-decoration: underline;">{{$utilisateur->telephone1}} - {{$utilisateur->telephone2}}</span>
                                                </div>
                                                <div class="address-content">
                                                   <span class="contact-title"><strong>Adresse:</strong></span>
                                                   <span class="mail-address">{{$utilisateur->adresse}}</span>
                                                </div>
                                                
                                                <div class="website-content">
                                                   <span class="contact-title"><strong>Secteur:</strong></span>
                                                   <span class="contact-website">{{$utilisateur->secteur}}</span>
                                                </div>
                                                
                                                <div class="website-content">
                                                   <span class="contact-title"><strong>Ville:</strong></span>
                                                   <span class="contact-website">{{$utilisateur->ville}}</span>
                                                </div>
                                               
                                                <div class="email-content">
                                                   <span class="contact-title"><strong>Email :</strong></span>
                                                   <span class="contact-email" style="color: #ff435c; text-decoration: underline;">{{$utilisateur->email}}</span>
                                                </div>
                                               
                                             </div>
                                             <div class="basic-information">
                                                {{-- <h4 style="color: #32ade1;text-decoration: underline;">Role utilisateur</h4> --}}
                                                
                                                <div class="gender-content">
                                                   <span class="contact-title"><strong>Date d'ajout:</strong></span>
                                                   <span class="gender">{{date('d-m-Y',strtotime($utilisateur->created_at ))}}</span>
                                                </div>
                                             </div>
                                            
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @if ($utilisateur->role == "utilisateur")
                
          
            <div class="col-lg-6">
              
               <div class="panel panel-success lobipanel-basic">
                     <div class="panel-heading">Statistiques.</div>
                     <div class="panel-body">
                           <div class="col-lg-4 col-md-4 col-sm-4 ">
                                 <div class="card bg-danger">
                                     <div class="media">
                                         <div class="media-left meida media-middle">
                                             <span><i class="ti-home f-s-48 color-white"></i></span>
                                         </div>
                                         <div class="media-body media-text-right">
                                         <h4>{{$nb_affaire}}</h4>
                                             <h5>Affaires</h5>
                                         </div>
                                     </div>
                                 </div>
                                </div>
                            
                                <div class="col-lg-4 col-md-4 col-sm-4 ">
                                    <div class="card bg-primary">
                                        <div class="media">
                                            <div class="media-left meida media-middle">
                                                <span><i class="ti-money f-s-48 color-white"></i></span>
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h4>{{number_format($utilisateur->chiffre_affaire,2,'.',' ')}}€</h4>
                                                <h5>Chiffre d'affaires</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 ">
                                    <div class="card bg-success">
                                        <div class="media">
                                            <div class="media-left meida media-middle">
                                                <span><i class="ti-money f-s-48 color-white"></i></span>
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h4>{{$nb_filleul}}</h4>
                                                <h5>Filleuls</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     </div>
                  </div>
                    @if($nb_filleul > 0)
                    <div class="panel panel-default lobipanel-basic">
                        <div class="panel-heading">Filleuls.</div>
                        <div class="panel-body">
                             
                                <div class="table-responsive" style="overflow-x: inherit !important;">
                                        <table  id="example" class=" table student-data-table  m-t-20 "  style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>@lang('Nom filleul')</th>
                                                    <th>@lang('rang')</th>
                                                    <th>@lang('Action')</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($filleuls as $filleul)
                                                <tr>
                                           
                                                    <td style="color: #32ade1; text-decoration: underline;">
                                                    <strong>{{$filleul->user->nom}} {{$filleul->user->prenom}}</strong> 
                                                    </td>
                                                    <td style="color: #e05555;; text-decoration: underline;">
                                                        <strong> {{$filleul->rang}} </strong> 
                                                    </td>
                                                                                     
                                                    <td>
                                                        <span><a href="{{route('utilisateur.show',Crypt::encrypt($filleul->user_id))}}" data-toggle="tooltip" title="@lang('Détail ') {{ $filleul->nom }}"><i class="large material-icons color-warning">visibility</i></a></span>
                                                    </td>
                                                </tr>
                                        @endforeach
                                          </tbody>
                                        </table>
                                    </div>
                                
                        </div>
                    </div>
                    @endif
             
            </div>
            @endif
         </div>
      </div>
   </div>
</div>

    </div>

</div>

@endsection
@section('js-content')
<script>
 

</script>
@endsection