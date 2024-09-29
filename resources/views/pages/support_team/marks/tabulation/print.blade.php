<!DOCTYPE html>
<html>
<head>
    <title>Feuille de Tabulation - {{ $my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print_tabulation.css') }}" />
</head>
<body>
    <div class="container">
        <div id="print">
            <table width="100%">
                <tr>
                    <td>
                        <strong><span style="color: #1b0c80; font-size: 25px;">{{ strtoupper(Qs::getSetting('system_name')) }}</span></strong><br/>
                        <strong><span style="color: #000; font-size: 15px;"><i>{{ ucwords($s['address']) }}</i></span></strong><br/>
                        <strong><span style="color: #000; font-size: 15px;"> FEUILLE DE TABULATION POUR {{ strtoupper($my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' ) }}</span></strong>
                    </td>
                </tr>
            </table>
            <br/>
            <div style="position: relative; text-align: center;">
                <img src="{{ $s['logo'] }}" style="max-width: 500px; max-height:600px; margin-top: 60px; position:absolute; opacity: 0.2; left: 0; right: 0;" />
            </div>
            <table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NOMS_DES_ÉTUDIANTS_DANS_LA_CLASSE</th>
                        @foreach($subjects as $sub)
                            <th>{{ strtoupper($sub->slug ?: $sub->name) }}</th>
                        @endforeach
                        <th style="color: darkred">Total</th>
                        <th style="color: darkblue">Moyenne</th>
                        <th style="color: darkgreen">Position</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: center">{{ $s->user->name }}</td>
                            @foreach($subjects as $sub)
                                <td>{{ $marks->where('student_id', $s->user_id)->where('subject_id', $sub->id)->first()->$tex ?? '-' }}</td>
                            @endforeach
                            <td style="color: darkred">{{ $exr->where('student_id', $s->user_id)->first()->total ?? '-' }}</td>
                            <td style="color: darkblue">{{ $exr->where('student_id', $s->user_id)->first()->ave ?? '-' }}</td>
                            <td style="color: darkgreen">{{ Mk::getSuffix($exr->where('student_id', $s->user_id)->first()->pos) ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
