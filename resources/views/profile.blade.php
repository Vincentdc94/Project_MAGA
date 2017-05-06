@extends('layouts.app')

@section("header")
  @include('partials.header', array('title' => "Antwerpen De Beste Studentenstad"))
@endsection

@section("content")
	<div class="container">
		<input type='hidden' id="user-id" value='{{ Auth::user()->id }}'>
		<div class="row">
			<div class="col-2-gt-1">
				<div class='form-group'>
					<h1>Gebruikersdetails</h1>
					<label for='firstName'>Voornaam:</label>
					<input type='text' class='textbox' name='firstName' value='{{ $user->firstName }}'>
					<label for='lastName'>Achternaam:</label>
					<input type='text' class='textbox' name='lastName' value='{{ $user->lastName }}'>
					<label for='email'>E-mail:</label>
					<input type='email' class='textbox' name='email' value='{{ $user->email }}'>
					<br><br>
					<button type='submit' class='button--primary'>Update</button>
				</div>
			</div>
			<div class='col-2-gt-1'>
				<div class='form-group'>
					@if(Auth::user()->avatar === "" || Auth::user()->avatar === null)
						<img style='width: 50%' name='avatar' id="avatar-pic" src='https://museum.wales/media/40374/thumb_480/empty-profile-grey.jpg'>
					@else
						<img style='width: 50%' name='avatar' id="avatar-pic" src='{{ $user->avatar }}'>
					@endif
					<label for='avatar'>Gebruikersafbeelding</label>
					<p class="error" id="upload-pic-error"></p>
					<div class="button--secondary upload-holder">
						<div class="upload-value" id="upload-value">Upload Profielafbeelding</div>
						<input type="file" class="upload" id="profile-pic-file"/>
					</div>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-2-gt-1'>
				<div class='form-group'>
					<h1>Wachtwoord veranderen</h1>
					<label for='old_password'>Oud wachtwoord:</label>
					<input type='password' class='textbox' name='old_password' placeholder='Typ hier je oud wachtwoord'>
					<label for='new_password'>Nieuw wachtwoord:</label>
					<input type='password' class='textbox' name='new_password' placeholder='Typ hier je nieuw wachtwoord'>
					<label for='new_password_confirmation'>Nieuw wachtwoord bevestigen:</label>
					<input type='password' class='textbox' name='new_password_confirmation' placeholder='Typ opnieuw je nieuw wachtwoord'>
					<br><br>
					<button type='submit' class='button--primary'>Verander wachtwoord</button>
				</div>
			</div>
			<div class='col-2-gt-1'>
				<div class='form-group'>
					<h1>Get-a-Life scores</h1>
					<div class='row'>
						<div class='col-2-gt-1'>
							<h2>{{ 'PINTEN' }}</h2>
							<p>{{ '500' }}</p>
						</div>
						<div class='col-2-gt-1'>
							<h2>{{ 'SPORT' }}</h2>
							<p>{{ '30' }}</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-2-gt-1'>
							<h2>{{ 'UITGAAN' }}</h2>
							<p>{{ '265' }}</p>
						</div>
						<div class='col-2-gt-1'>
							<h2>{{ 'STUDIES' }}</h2>
							<p>{{ '66' }}</p>
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection