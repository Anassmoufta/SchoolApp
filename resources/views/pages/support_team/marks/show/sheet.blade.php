<table class="table table-bordered table-responsive text-center">
    <thead>
    <tr>
        <th rowspan="2">N°</th>
        <th rowspan="2">MATIÈRES</th>
        <th rowspan="2">CA1<br>(20)</th>
        <th rowspan="2">CA2<br>(20)</th>
        <th rowspan="2">EXAMENS<br>(60)</th>
        <th rowspan="2">TOTAL<br>(100)</th>

        {{--@if($ex->term == 3) --}}{{-- 3ème Trimestre --}}{{--
        <th rowspan="2">TOTAL <br>(100%) 3<sup>ÈME</sup> TRIMESTRE</th>
        <th rowspan="2">1<sup>ER</sup> <br> TRIMESTRE</th>
        <th rowspan="2">2<sup>ÈME</sup> <br> TRIMESTRE</th>
        <th rowspan="2">CUMUL (300%) <br> 1<sup>ER</sup> + 2<sup>ÈME</sup> + 3<sup>ÈME</sup></th>
        <th rowspan="2">MOYENNE CUMULÉE</th>
        @endif--}}

        <th rowspan="2">NOTE</th>
        <th rowspan="2">POSITION <br> DANS LA MATIÈRE</th>
        <th rowspan="2">REMARQUES</th>
    </tr>
    </thead>

    <tbody>
    @foreach($subjects as $sub)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sub->name }}</td>
            @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                <td>{{ ($mk->t1) ?: '-' }}</td>
                <td>{{ ($mk->t2) ?: '-' }}</td>
                <td>{{ ($mk->exm) ?: '-' }}</td>
                <td>
                    @if($ex->term === 1) {{ ($mk->tex1) }}
                    @elseif ($ex->term === 2) {{ ($mk->tex2) }}
                    @elseif ($ex->term === 3) {{ ($mk->tex3) }}
                    @else {{ '-' }}
                    @endif
                </td>

                {{--3ème Trimestre--}}
                {{-- @if($ex->term == 3)
                     <td>{{ $mk->tex3 ?: '-' }}</td>
                     <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                     <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                     <td>{{ $mk->cum ?: '-' }}</td>
                     <td>{{ $mk->cum_ave ?: '-' }}</td>
                 @endif--}}

                {{--Note, Position dans la Matière & Remarques--}}
                <td>{{ ($mk->grade) ? $mk->grade->name : '-' }}</td>
                <td>{!! ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                <td>{{ ($mk->grade) ? $mk->grade->remark : '-' }}</td>
            @endforeach
        </tr>
    @endforeach
    <tr>
        <td colspan="4"><strong>TOTAL DES POINTS OBTENUS : </strong> {{ $exr->total }}</td>
        <td colspan="3"><strong>MOYENNE FINALE : </strong> {{ $exr->ave }}</td>
        <td colspan="2"><strong>MOYENNE DE LA CLASSE : </strong> {{ $exr->class_ave }}</td>
    </tr>
    </tbody>
</table>
