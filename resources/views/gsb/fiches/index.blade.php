@extends("gsb.includes.template")

@section("content")
    <h4>Vos Fiche Frais</h4>
    <hr>

    <table class="table table-dark">
        <tr>
            <th>Mois</th>
            <th>NbJustificatif</th>
            <th>Montant</th>
            <th>Dernière Modification</th>
        </tr>
        @foreach($FicheFrais as $fiche)
        <tr>
            <td>{{ date("F", mktime(0, 0, 0, $fiche->mois, 1)) }}</td>
            <td>{{ $fiche->nbJustificatif }}</td>
            <td>{{ $fiche->montantValide . "€" }}</td>
            <td>{{ \Carbon\Carbon::parse($fiche->dateModif)->diffForHumans() }}</td>
        </tr>
        @endforeach
        
    </table>
    <hr>
    
    <h4>Mois avec plus de 2 hors forfait</h4>
    <hr>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th></th>
            <th>Mois</th>
        </tr> 
        </thead>
        <tbody>
            @foreach($lesMoisHorsForfait as $mois)
            <tr>
                <th class="row"></th>
                <td>{{ \Carbon\Carbon::parse($mois->date)->format('F o')}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection