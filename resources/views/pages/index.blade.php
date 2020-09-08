@extends('layouts.app')
@section('content')
	<div class="col-12">
	    <div class="card card-outline card-{{ _config('card-color') }}">
	        <div class="card-header">
	            <div class="card-title">Statistiques</div>
	             <div class="card-tools"><button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button></div>
	        </div>
        	<div class="card-body">
                <h4>Projets</h4>
                <div class="row">
                <div class="col-3 col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        @foreach($projects as $item)
                            <a class="nav-link {{ ($loop->index == 0) ? 'active':'' }}" id="vert-tabs-{{ $loop->index }}-tab" data-toggle="pill" href="#vert-tabs-{{ $loop->index }}" role="tab" aria-controls="vert-tabs-{{ $loop->index }}" aria-selected="true">{{ (strlen($item->projet)>40)?substr($item->projet, 0, 40)."...":$item->projet }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-9 col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                        @foreach($projects as $item)
                            <div class="tab-pane text-left fade show {{ ($loop->index == 0) ? 'active':'' }}" id="vert-tabs-{{ $loop->index }}" role="tabpanel" aria-labelledby="vert-tabs-{{ $loop->index }}-tab">
                                <div class="col-12">
                                    @php($taux = round(($item->montant_paye/$item->montant_total)*100, 2))
                                    <p>Contributions (<code>Progression des contributions par rapport au coût total</code>) {{ $taux }}%</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-{{ ($taux<30)?'danger':(($taux<60)?'warning':'success') }} progress-bar-striped" role="progressbar"
                                             aria-valuenow="{{ $taux }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $taux }}%">
                                            <span class="sr-only">{{ $taux }}% Contributions</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="card card-{{ _config('card-color') }} card-outline">
                                        <div class="card-header">
                                            <div class="card-title text-lg">{{ $item->projet }}</div>
                                            <div class="card-tools text-success">
                                                Total : {{ _money_format($item->montant_total) }} <span class="text-danger">&#9733;</span> Payé : {{ _money_format($item->montant_paye) }} <span class="text-danger">&#9733;</span> Restant : {{ _money_format($item->montant_restant) }}
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="{{ asset('img/giga.png') }}" alt="LOGO">
                                                    <span class="username">
                                                      <a>Réalisation prévu entre : {{ _format1($item->date_debut)." - "._format1($item->date_fin) }}</a>
                                                      <a class="float-right btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></a>
                                                  </span>
                                                    <span class="description text-success">Publié le {{ _format2($item->created_at) }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-8 col-sm-8 col-xs-12 border-right">
                                                        <div id="#_project{{ $item->id }}">GRAPHE DES CONTRIBUTEURS</div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <div class="row">
                                                            <div class="text-center text-success text-lg">Description du projet</div>
                                                            <p class="text-md">{{ $item->description ?? 'Aucune description' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $inscrits = \DB::table('inscriptions')
                                                    ->join('plan_contributions', 'plan_contributions.id', '=', 'plan_contribution_id')
                                                    ->join('contribuables', 'contribuables.id', '=', 'contribuable_id')
                                                    ->join('recurrences', 'recurrences.id', '=', 'recurrence_id')
                                                    ->select('contribuables.*', 'plan_contributions.*', 'recurrences.*')
                                                    ->where('projet_id', $item->id)->orderBy('inscriptions.id', 'DESC')
                                                    ->get();

                                                    $contributions = \DB::table('contributions')
                                                    ->join('moiss', 'moiss.id', '=', 'mois_id')
                                                    ->join('annees', 'annees.id', '=', 'annee_id')
                                                    ->join('mode_payements', 'mode_payements.id', '=', 'mode_payement_id')
                                                    ->join('inscriptions', 'inscriptions.id', '=', 'inscription_id')
                                                    ->join('contribuables', 'contribuables.id', '=', 'contribuable_id')
                                                    ->select('contribuables.*', 'mois', 'annee', 'mode_payement')
                                                    ->where('projet_id', $item->id)->orderBy('contributions.id', 'DESC')
                                                    ->get();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card card-outline card-{{ _config('card-color') }}">
                                                            <div class="card-header">
                                                                <div class="card-title">Inscrits</div>
                                                                <div class="card-tools"><button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button></div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-striped table-hover table-bordered dataTable" style="width: 100%">
                                                                                <thead>
                                                                                <td>#</td>
                                                                                <td>Nom</td>
                                                                                <td>Prenom</td>
                                                                                <td>Téléphone</td>
                                                                                <td>Email</td>
                                                                                <td>Adresse</td>
                                                                                <td>Poste</td>
                                                                                <td>Photo</td>
                                                                                <td>Plan</td>
                                                                                <td>Recurrence</td>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach($inscrits as $item)
                                                                                    <tr>
                                                                                        <td>{{ ++$loop->index }}</td>
                                                                                        <td>{{ $item->nom }}</td>
                                                                                        <td>{{ $item->prenom }}</td>
                                                                                        <td>{{ $item->telephone }}</td>
                                                                                        <td>{{ $item->email }}</td>
                                                                                        <td>{{ $item->adresse }}</td>
                                                                                        <td>{{ $item->poste }}</td>
                                                                                        <td class="text-center"><img src="{{ asset('img/'.$item->photo) }}" alt="PHOTO" class="img-responsive img-fluid img-thumbnail img-rounded" style="height: 30px"></td>
                                                                                        <td>{{ $item->plan }}</td>
                                                                                        <td>{{ $item->recurrence }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card card-outline card-{{ _config('card-color') }}">
                                                            <div class="card-header">
                                                                <div class="card-title">Contributions</div>
                                                                <div class="card-tools"><button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button></div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-striped table-hover table-bordered dataTable" style="width: 100%">
                                                                                <thead>
                                                                                <td>#</td>
                                                                                <td>Nom</td>
                                                                                <td>Prenom</td>
                                                                                <td>Téléphone</td>
                                                                                <td>Email</td>
                                                                                <td>Adresse</td>
                                                                                <td>Poste</td>
                                                                                <td>Photo</td>
                                                                                <td>Mode de payement</td>
                                                                                <td>Mois</td>
                                                                                <td>Année</td>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach($contributions as $item)
                                                                                    <tr>
                                                                                        <td>{{ ++$loop->index }}</td>
                                                                                        <td>{{ $item->nom }}</td>
                                                                                        <td>{{ $item->prenom }}</td>
                                                                                        <td>{{ $item->telephone }}</td>
                                                                                        <td>{{ $item->email }}</td>
                                                                                        <td>{{ $item->adresse }}</td>
                                                                                        <td>{{ $item->poste }}</td>
                                                                                        <td class="text-center"><img src="{{ asset('img/'.$item->photo) }}" alt="PHOTO" class="img-responsive img-fluid img-thumbnail img-rounded" style="height: 30px"></td>
                                                                                        <td>{{ $item->mode_payement }}</td>
                                                                                        <td>{{ $item->mois }}</td>
                                                                                        <td>{{ $item->annee }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        	</div>
        	<div class="card-footer"></div>
	    </div>
	</div>

@endsection
