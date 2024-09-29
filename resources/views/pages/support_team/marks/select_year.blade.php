@extends('layouts.master')
@section('page_title', 'Sélectionner l\'année d\'examen')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><i class="icon-alarm mr-2"></i> Sélectionner l'année d'examen</h5>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form method="post" action="{{ route('marks.year_select', $student_id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="year" class="font-weight-bold col-form-label-lg">Sélectionner l'année d'examen :</label>
                            <select required id="year" name="year" data-placeholder="Sélectionner l'année d'examen" class="form-control select select-lg">
                                @foreach($years as $y)
                                    <option value="{{ $y->year }}">{{ $y->year }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary btn-lg">Soumettre <i class="icon-paperplane ml-2"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
