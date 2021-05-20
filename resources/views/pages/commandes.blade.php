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
            <label>Budget</label>
            <div class="montant-wrap">
                <input class="w3-input" type="number">
                <input class="w3-input" type="number">
            </div>
        </div>
        <div class="w3-container w3-margin-top">
            <label>Avec Incidents </label>
            <input class="w3-input" type="text">
        </div>

        <div class="w3-container w3-margin-top w3-center">
            <button class="w3-btn">chercher</button>
        </div>
    </form>
    </div>

    <div class="c-container" >
        @if ($commandes->count())
        <table class="w3-table">
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Ville</td>
                <td>Dernier Status</td>
                <td>Date </td>
                <td>Ramasse </td>
            </tr>
            @foreach ($commandes as $item)
                <tr>
                    <td>  {{$item->NOM}}</td>
                    <td>  {{$item->PRENOM}}</td>
                    <td>  {{$item->VILLE}}</td>
                    <td>  {{$item->DERNIER_STATUT}}</td>
                    <td>  {{$item->DATE_CDE}}</td>
                    <td>  {{$item->RAMASSE_ID}}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>

<script src="/js/pages/commande.js"></script>
@endsection
