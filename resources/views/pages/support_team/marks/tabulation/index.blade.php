@extends('layouts.master')
@section('page_title', 'Feuille de Tabulation')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><i class="icon-books mr-2"></i> Feuille de Tabulation</h5>
            {!! Qs::getPanelOptions() !!}
        </div>


        <div class="card-body">
            <form method="post" action="{{ route('marks.tabulation_select') }}">
                @csrf
                <div class="row">
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exam_id" class="col-form-label font-weight-bold">Examen :</label>
                            <select required id="exam_id" name="exam_id" class="form-control select" data-placeholder="Sélectionner l'examen">
                                @foreach ($exams as $exm)
                                    <option {{ $selected && $exam_id == $exm->id ? 'selected' : '' }} value="{{ $exm->id }}">{{ $exm->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="my_class_id" class="col-form-label font-weight-bold">Classe :</label>
                            <select onchange="getClassSections(this.value)" required id="my_class_id" name="my_class_id" class="form-control select" data-placeholder="Sélectionner la classe">
                                <option value=""></option>
                                @foreach ($my_classes as $c)
                                    <option {{ $selected && $my_class_id == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="section_id" class="col-form-label font-weight-bold">Section :</label>
                            <select required id="section_id" name="section_id" data-placeholder="Sélectionner la classe d'abord" class="form-control select">
                                @if ($selected)
                                    @foreach ($sections->where('my_class_id', $my_class_id) as $s)
                                        <option {{ $section_id == $s->id ? 'selected' : '' }} value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
            
                    <div class="col-md-2 mt-4">
                        <div class="text-right mt-1">
                            <button type="submit" class="btn btn-primary">Voir la feuille <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
            
                </div>
            </form>
            
        </div>
    </div>

    {{-- if Selction Has Been Made --}}

    @if ($selected)
    <div class="card">
        <div class="card-header">
            <h6 class="card-title font-weight-bold">Feuille de tabulation pour
                {{ $my_class->name . ' ' . $section->name . ' - ' . $ex->name . ' (' . $year . ')' }}</h6>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NOMS_DES_ÉLÈVES_DANS_LA_CLASSE</th>
                        @foreach ($subjects as $sub)
                            <th title="{{ $sub->name }}" rowspan="2">{{ strtoupper($sub->slug ?: $sub->name) }}
                            </th>
                        @endforeach
                        {{-- @if ($ex->term == 3)
                    <th>TOTAL 1ER TRIMESTRE</th>
                    <th>TOTAL 2ÈME TRIMESTRE</th>
                    <th>TOTAL 3ÈME TRIMESTRE</th>
                    <th style="color: darkred">Total CUM</th>
                    <th style="color: darkblue">Moyenne CUM</th>
                    @endif --}}
                        <th style="color: darkred">Total</th>
                        <th style="color: darkblue">Moyenne</th>
                        <th style="color: darkgreen">Position</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: center">{{ $s->user->name }}</td>
                            @foreach ($subjects as $sub)
                                <td>{{ $marks->where('student_id', $s->user_id)->where('subject_id', $sub->id)->first()->$tex ?? '-' ?:'-' }}
                                </td>
                            @endforeach

                            {{-- @if ($ex->term == 3)
                            --}}{{-- Total 1er trimestre --}}{{--
                        <td>{{ Mk::getTermTotal($s->user_id, 1, $year) ?? '-' }}</td>
                        --}}{{-- Total 2ème trimestre --}}{{--
                        <td>{{ Mk::getTermTotal($s->user_id, 2, $year) ?? '-' }}</td>
                        --}}{{-- Total 3ème trimestre --}}{{--
                        <td>{{ Mk::getTermTotal($s->user_id, 3, $year) ?? '-' }}</td>
                        @endif --}}

                            <td style="color: darkred">
                                {{ $exr->where('student_id', $s->user_id)->first()->total ?: '-' }}</td>
                            <td style="color: darkblue">
                                {{ $exr->where('student_id', $s->user_id)->first()->ave ?: '-' }}</td>
                            <td style="color: darkgreen">{!! Mk::getSuffix($exr->where('student_id', $s->user_id)->first()->pos) ?: '-' !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Bouton d'impression --}}
            <div class="text-center mt-4">
                <a target="_blank" href="{{ route('marks.print_tabulation', [$exam_id, $my_class_id, $section_id]) }}"
                    class="btn btn-danger btn-lg"><i class="icon-printer mr-2"></i> Imprimer la feuille de tabulation</a>
            </div>
        </div>
    </div>
@endif

@endsection
