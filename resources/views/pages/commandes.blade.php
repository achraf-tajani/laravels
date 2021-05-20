@extends('layouts.default')
@section('main')
<link rel="stylesheet" type="text/css" href="/css/pages/commandes.css" />


<h1>Commande</h1>

<div class="c-wrap">

    <div class="c-filter">
        <h4>Filter</h4>
        <div class="w3-container">
            <label>Id commande</label>
            <input class="w3-input" type="text">
        </div>
        <div class="w3-container w3-margin-top">
            <label>Nom Client</label>
            <input class="w3-input" type="text">
        </div>
        <div class="w3-container w3-margin-top">
            <label>Nom Client</label>
            <div class="date-wrap">
                <input class="w3-input" type="date">
                <input class="w3-input" type="date">
            </div>
        </div>
        <div class="w3-container w3-margin-top">
            <label>Nom Client</label>
            <div class="montant-wrap">
                <input class="w3-input" type="number">
                <input class="w3-input" type="number">
            </div>
        </div>
        <div class="w3-container w3-margin-top">
            <label>Avec Incidents </label>
            <input class="w3-input" type="text">
        </div>



    </div>
    <div class="c-container"></div>
</div>





<script src="/js/pages/commande.js"></script>
@endsection
