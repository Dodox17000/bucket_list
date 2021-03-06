
@extends('layouts.base')
@section('title')
Listes
@endsection
@section('contenu')
<div id="fix">
    <div class='row text-center mt-5'>
        <h3>Les Listes</h3>
    </div>
    <div class='row mt-5 mb-2'> 
        @forelse($listes as $list)
        <div style='margin-top:2.5rem'>
                <h3>{{ $list->title }}</h3>
                <p>{{ $list->description }}</p>
                <span>Catégorie : {{ $list->category->name}}</span>
                <br/>
                <span>Auteur : {{ $list->author }}</span>
                <span>réalisé le {{ $list->created_at }}</span>
                @empty
                <p>Il n'existe aucun souhait</p>
 
        </div>
        @endforelse   
    </div>
</div>
@endsection
