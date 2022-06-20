@extends('layouts.base')
@section('titre')
    La Liste
@endsection
@section('contenu')
<div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
<div id='fix' class='container'>
   <div data-aos="fade-up"  data-aos-delay="50" class="container">
     <h3 style='text-align:center;'>{{ $wish->title }}</h3>
        <p class='detail' >
          {{ $wish->description}} 
 
        </p>
        <span>Catégorie : -{{ $wish->category->name }}</span>
      <br/>
        <span>Auteur : {{ $wish->author}}</span>
    </div>
</div>


@endsection