{{--<!--NOM, CLASSE ET AUTRES INFORMATIONS -->--}}
<table style="width:100%; border-collapse:collapse;">
    <tbody>
    <tr>
        <td><strong>NOM :</strong> {{ strtoupper($sr->user->name) }}</td>
        <td><strong>NUMÉRO D'ADMISSION :</strong> {{ $sr->adm_no }}</td>
        <td><strong>MAISON :</strong> {{ strtoupper($sr->house) }}</td>
        <td><strong>CLASSE :</strong> {{ strtoupper($my_class->name) }}</td>
    </tr>
    <tr>
        <td><strong>BULLETIN DE NOTES POUR</strong> {!! strtoupper(Mk::getSuffix($ex->term)) !!} TRIMESTRE </td>
        <td><strong>ANNÉE ACADÉMIQUE :</strong> {{ $ex->year }}</td>
        <td><strong>ÂGE :</strong> {{ $sr->age ?: ($sr->user->dob ? date_diff(date_create($sr->user->dob), date_create('now'))->y : '-') }}</td>
    </tr>
    </tbody>
</table>

{{--Tableau des examens--}}
<table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
    <thead>
    <tr>
        <th rowspan="2">MATIÈRES</th>
        <th colspan="3">ÉVALUATION CONTINUE</th>
        <th rowspan="2">EXAMEN<br>(60)</th>
        <th rowspan="2">NOTES FINALES <br> (100%)</th>
        <th rowspan="2">NOTE</th>
        <th rowspan="2">POSITION <br> DANS LA MATIÈRE</th>

        {{--  @if($ex->term == 3) --}}{{-- 3ème Trimestre --}}{{--
        <th rowspan="2">NOTES FINALES <br>(100%) 3<sup>ÈME</sup> TRIMESTRE</th>
        <th rowspan="2">1<sup>ER</sup> <br> TRIMESTRE</th>
        <th rowspan="2">2<sup>ÈME</sup> <br> TRIMESTRE</th>
        <th rowspan="2">CUM (300%) <br> 1<sup>ER</sup> + 2<sup>ÈME</sup> + 3<sup>ÈME</sup></th>
        <th rowspan="2">MOYENNE CUMULÉE</th>
        <th rowspan="2">NOTE</th>
        @endif--}}

        <th rowspan="2">REMARQUES</th>
    </tr>
    <tr>
        <th>CA1(20)</th>
        <th>CA2(20)</th>
        <th>TOTAL(40)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subjects as $sub)
        <tr>
            <td style="font-weight: bold">{{ $sub->name }}</td>
            @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                <td>{{ $mk->t1 ?: '-' }}</td>
                <td>{{ $mk->t2 ?: '-' }}</td>
                <td>{{ $mk->tca ?: '-' }}</td>
                <td>{{ $mk->exm ?: '-' }}</td>

                <td>{{ $mk->$tex ?: '-'}}</td>
                <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                <td>{!! ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>

                {{--@if($ex->term == 3)
                    <td>{{ $mk->tex3 ?: '-' }}</td>
                    <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                    <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                    <td>{{ $mk->cum ?: '-' }}</td>
                    <td>{{ $mk->cum_ave ?: '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                @endif--}}

            @endforeach
        </tr>
    @endforeach
    <tr>
        <td colspan="3"><strong>TOTAL DES POINTS OBTENUS : </strong> {{ $exr->total }}</td>
        <td colspan="3"><strong>MOYENNE FINALE : </strong> {{ $exr->ave }}</td>
        <td colspan="3"><strong>MOYENNE DE LA CLASSE : </strong> {{ $exr->class_ave }}</td>
    </tr>
    </tbody>
</table>
