@extends('layouts.app')

@section("header")
    @include('partials.header-admin', array('title' => "Admin dashboard", 'menu' => true, 'url_back' => '/'))
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-perc-30-1">
               
                <br />
                <div class="admin-menu">
                    <ul>
                        <li><a href="{{ url('admin/artikels/overzicht') }}" class="button--menu">Artikels Overzicht</a></li>
                        <li><a href="{{ url('admin/bezienswaardigheden/overzicht') }}" class="button--menu">Bezienswaardigheden Overzicht</a></li>
                        <li><a href="{{ url('admin/scholen/overzicht') }}" class="button--menu">Scholen Overzicht</a></li>
                        <li><a href="{{ url('admin/links/overzicht') }}" class="button--menu">Link Overzicht</a></li>
                        <li><a href="{{ url('/admin/gebruikers/overzicht') }}" class="button--menu">Bekijk gebruikers</a></li>
                    </ul>
                </div>
                <br />
                <h3>Bezienswaardigheden</h3>
                @foreach($sights as $sight)
                    <div class="box box-admin">
                        <div class="box-content">
                            <h3>{{ $sight->name }}</h3>
                            <p>
                                {{ str_limit(strip_tags($sight->description), 100, '...') }}
                            </p>
                        </div>
                        <a class="box-button" href="{{ url('admin/bezienswaardigheden/' . $sight->id . '/bewerken') }}">Bekijk bezienswaardigheid</a>
                    </div>
                @endforeach

            </div>

            <div class="col-perc-40-1">
                <p></p>
                <h3>Artikels</h3>
                 @foreach($articles as $article)
                    <div class="box box-admin">
                        <div class="box-content">
                            <h3>{{ $article->title }}</h3>
                            <p>
                                {{ str_limit(strip_tags($article->body), 100, '...') }}
                            </p>
                        </div>
                        <a class="box-button" href="{{ url('admin/artikels/' . $article->id . '/bewerken') }}">Bekijk Artikel</a>
                    </div>
                @endforeach
            </div>

            <div class="col-perc-30-1">
                <h3>Scholen</h3>
                 @foreach($schools as $school)
                    <div class="box box-admin">
                        <div class="box-content">
                            <h3>{{ $school->name }}</h3>
                            <p>
                                {{ str_limit(strip_tags($school->description), 100, '...') }}
                            </p>
                        </div>
                        <a class="box-button" href="{{ url('admin/scholen/' . $school->id . '/bewerken') }}">Bekijk School</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
