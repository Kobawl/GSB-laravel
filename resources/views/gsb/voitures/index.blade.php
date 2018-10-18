@extends("gsb.includes.template")

@section("content")
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Visiteur</th>
            <th>Véhicule</th>
            <th>Date Début Prêt</th>
            <th>Nombre Km</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lesvisiteurs as $unvisiteur)
            <tr>
                <td>
                    {{ $unvisiteur->nom }}
                </td>
                @forelse($unvisiteur->Voitures as $voiture)
                    @if($voiture->pivot->date_fin === null)
                        <td>
                            {{ $voiture->id  }}
                        </td>
                        <td>
                            {{ $voiture->pivot->date_debut }}
                        </td>
                        <td>
                            {{ $voiture->pivot->nbKmPret }}
                        </td>
                    @endif
                @empty
                    <td colspan="3" style="text-align: center;">Aucun véhicule</td>
                @endforelse
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection