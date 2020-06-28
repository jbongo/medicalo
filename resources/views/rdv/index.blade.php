@extends('layouts.app')
@section('content')
    @section ('page_title')
    Utilisateurs    @endsection
    <div class="row"> 
       
        <div class="col-lg-12">
                @if (session('ok'))
       
                <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
                </div>
             @endif       
            <div class="card alert">
                <!-- table -->
            {{-- <a href="{{route('utilisateur.create')}}" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5"><i class="ti-user"></i>@lang('Ajouter utilisateur')</a> --}}
            <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5">
                <i class="fa fa-plus"></i> Ajouter un nouveau RDV
            </a>
                <div class="card-body">
                        <div class="panel panel-info m-t-15" id="cont">
                                <div class="panel-heading">Prise de RDV</div>
                                <div class="panel-body">

          
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card alert">
                                              
                                                <div class="card-body">
                                                    <div class="row">
                                                    
                                                        <div class="col-md-12">
                                                            <div class="card-box">
                                                                <div id="calendar"></div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <!-- BEGIN MODAL -->
                                                        <div class="modal fade none-border" id="event-modal">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title"><strong>Nouveau RDV</strong></h4>
                                                                    </div>
                                                                    <div class="modal-body"></div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Enregister</button>
                                                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <!-- Modal Add Category -->
                                                        <div class="modal fade none-border" id="add-category">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title"><strong>Nouveau RDV</strong></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <label class="control-label">Category Name</label>
                                                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="control-label">Choose Category Color</label>
                                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                                <option value="success">Success</option>
                                                                                <option value="danger">Danger</option>
                                                                                <option value="info">Info</option>
                                                                                <option value="pink">Pink</option>
                                                                                <option value="primary">Primary</option>
                                                                                <option value="warning">Warning</option>
                                                                            </select>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END MODAL -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /# card -->
                                        </div>
                                        <!-- /# column -->
                                    </div>



                    </div>
                </div>

                    </div>
                <!-- end table -->


            </div>
        </div>
    </div>
@endsection

@section('js-content')
<script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })
            $('[data-toggle="tooltip"]').tooltip()
            $('body').on('click','a.delete',function(e) {
                let that = $(this)
                e.preventDefault()
                const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
})

        swalWithBootstrapButtons({
            title: '@lang('Vraiment archiver cet utilisateur  ?')',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '@lang('Oui')',
            cancelButtonText: '@lang('Non')',
            
        }).then((result) => {
            if (result.value) {
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('href'),
                        type: 'PUT'
                    })
                    .done(function () {
                            that.parents('tr').remove()
                    })

                swalWithBootstrapButtons(
                'Archivé!',
                'L\'utilisateur a bien été archivé.',
                'success'
                )
                
                
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                'Annulé',
                'L\'utlisateur n\'a pas été archivé :)',
                'error'
                )
            }
        })
            })
        })
    </script>
@endsection