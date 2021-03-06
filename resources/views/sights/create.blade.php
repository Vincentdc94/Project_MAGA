@extends('layouts.app')

@section("header")
    @include('modals.mediabrowser')
    @include('partials.header-admin', array('title' => "Bezienswaardigheid Aanmaken", 'menu' => false, 'url_back' => '/admin/bezienswaardigheden/overzicht'))
@endsection

@section("content")

<div class="container">
    {{ csrf_field() }}

    @include('layouts.errors')

    <div class="form-group">
        <label for="sight-name">Naam Bezienswaardigheid</label>
        <input type="text" class="textbox" name="sight-name" id="sight-name" placeholder="Typ de naam van de bezienswaardigheid hier">
    </div>

    <div class="form-group">
        <label for="sight-description">Beschrijving bezienswaardigheid</label>
        <textarea id="sight-description" class="richtext textarea" id="sight-description" name="sight-description" cols="30" rows="15" placeholder="Typ een beschrijving van de bezienswaardigheid hier"></textarea>
    </div>

    <div class='form-group'>
    	<label for='sight-address'>Adres:</label>
    	<input type='text' class='textbox' name='sight-address' id='sight-address' placeholder='Typ het adres van de bezienswaardigheid hier'>
    </div>
    <div class='form-group'>
    	<label for='sight-email'>E-mail:</label>
    	<input type='text' class='textbox' name='sight-email' id='sight-email' placeholder='Typ het e-mailadres van een contactpersoon van de bezienswaardigheid hier'>
    </div>
    <div class='form-group'>
    	<label for='sight-tel'>Telefoonnummer:</label>
    	<input type='text' class='textbox' name='sight-tel' id='sight-tel' placeholder='Typ het telefoonnummer van een contactpersoon van de bezienswaardigheid hier'>
    </div>
</div>

@include('partials.media')

<div class="container">
    <div class="row">
        <div class="col-perc-25-gt-2"><a id="make-sight" class="button--primary button--block gt-20">Publiceren</a></div>
    </div>
</div>

</div>
@endsection
