<div>
    <table class="td-left" style="border-collapse:collapse;">
        <tbody>
        <tr>
            <td><strong>COMMENTAIRE DU PROFESSEUR PRINCIPAL :</strong></td>
            <td>  {{ $exr->t_comment ?: str_repeat('__', 40) }}</td>
        </tr>
        <tr>
            <td><strong>COMMENTAIRE DU DIRECTEUR :</strong></td>
            <td>  {{ $exr->p_comment ?: str_repeat('__', 40) }}</td>
        </tr>
        <tr>
            <td><strong>LE PROCHAIN TRIMESTRE COMMENCE :</strong></td>
            <td>{{ date('l\, jS F\, Y', strtotime($s['term_begins'])) }}</td>
        </tr>
        <tr>
            <td><strong>FRAIS DU PROCHAIN TRIMESTRE :</strong></td>
            <td><del style="text-decoration-style: double">N</del>{{ $s['next_term_fees_'.strtolower($ct)] }}</td>
        </tr>
        </tbody>
    </table>
</div>

