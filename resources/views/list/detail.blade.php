@extends('layouts.base')
@section('titre')
    La Liste
@endsection
@section('contenu')
<div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
<div id='fix' class='container'>
   <div data-aos="fade-up"  data-aos-delay="50" class="container">
     <h3 style='text-align:center'>{{ $detail->title }}</h3>
        <p class='detail' >
          {{ $detail->description}} 
 
        </p>
        <span>Catégorie : -{{ $detail->category->name }}</span>
      <br/>
        <span>Auteur : {{ $detail->author}}</span>
    </div>
</div>


@endsection