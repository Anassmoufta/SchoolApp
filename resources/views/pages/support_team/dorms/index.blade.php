@extends('layouts.master')
@section('page_title', 'Gérer les Dortoirs')

@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Gérer les Dortoirs</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-dorms" class="nav-link active" data-toggle="tab">Gérer les dortoirs</a></li>
                <li class="nav-item"><a href="#new-dorm" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Créer un nouveau dortoir</a></li>
            </ul>
            

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-dorms">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dorms as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->description }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                
                                            <div class="dropdown-menu dropdown-menu-left">
                                                @if(Qs::userIsTeamSA())
                                                {{--Modifier--}}
                                                <a href="{{ route('dorms.edit', $d->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Modifier</a>
                                                @endif
                                                @if(Qs::userIsSuperAdmin())
                                                {{--Supprimer--}}
                                                <a id="{{ $d->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Supprimer</a>
                                                <form method="post" id="item-delete-{{ $d->id }}" action="{{ route('dorms.destroy', $d->id) }}" class="hidden">@csrf @method('delete')</form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                

                <div class="tab-pane fade" id="new-dorm">

                    <div class="row">
                        <div class="col-md-6">
                            <form class="ajax-store" method="post" action="{{ route('dorms.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Nom du dortoir">
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                                    <div class="col-lg-9">
                                        <input name="description" value="{{ old('description') }}" type="text" class="form-control" placeholder="Description du dortoir">
                                    </div>
                                </div>
                    
                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Soumettre le formulaire <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{--Dorm List Ends--}}

@endsection
