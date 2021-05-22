@extends('layouts.default')
@section('main')
<link rel="stylesheet" type="text/css" href="/css/pages/commandes.css" />


<h1>Commande</h1>

<div class="c-wrap">


    <div class="c-filter">
        <form action="/commandes" method="GET">
        <h4>Filter</h4>
        <div class="w3-container">
            <label>Commande</label>
            <input class="w3-input"  name="arg" type="text" placeholder="Nom,Prenom,ID" >
        </div>

        <div class="w3-container w3-margin-top">
            <label>Dates</label>
            <div class="date-wrap">
                <input class="w3-input" type="date">
                <input class="w3-input" type="date">
            </div>
        </div>
        <div class="w3-container w3-margin-top">
            <label>EWMS Status</label>
            <div class="montant-wrap">
                <select>
                    <option></option>
                    <option>Open</option>
                    <option>Close</option>
                    <option>Empty</option>
                </select>

            </div>
        </div>
        <div class="w3-container w3-margin-top">
            <label>Avec Incidents </label>
            <input class="w3-input" type="text">
        </div>

        <div class="w3-container w3-margin-top w3-center">
            <button class="w3-btn w3-red">Reset</button>
            <button class="w3-btn">Chercher</button>
        </div>
    </form>
    </div>
    <div class="ongle">
        <i class="o1 fas fa-angle-right"  style="display: none;"></i>
        <i class="o2 fas fa-angle-left" ></i>
    </div>
    <div class="c-container" >
        @if ($commandes->count())
        <table class="w3-table">
            <thead>
            <tr>
                <th class="w3-center">Nom</th>
                <th class="w3-center">Prenom</th>
                <th class="w3-center">Ville</th>
                <th class="w3-center">Ramasse </th>
                <th class="w3-center">EWMS Status</th>
                <th class="w3-center">Date </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($commandes as $item)
                <tr>
                    <td class="w3-center">  {{$item->NOM}}</td>
                    <td class="w3-center">  {{$item->PRENOM}}</td>
                    <td class="w3-center">  {{$item->VILLE}}</td>
                    <td class="w3-center {{$item->RAMASSE_LIGNE_STATUT =='TERMINE' ? 'w3-text-light-green' : 'w3-text-red' }} ">  {{$item->RAMASSE_LIGNE_STATUT}}</td>
                    <td class="w3-center  {{$item->EWMS_STATUS =='Closed' ? 'w3-text-light-green' : 'w3-text-red' }}">  {{$item->EWMS_STATUS}}</td>
                    <td class="w3-center m-date">  {{$item->DATE_CDE}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <div class="noData">
            <i class="fas fa-battery-empty"></i>
           <span> Aucune donnée disponible</span>
        </div>
        @endif
    </div>
</div>

<script src="/js/pages/commande.js"></script>
@endsection
