@extends('layouts.base')
@section('titre')
Éditer la liste
@endsection
@section('contenu')
<div id="fix" class='container'>
   <h1>Modifier la liste</h1>
   <form action="" method="POST">
       @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Modifier le Titre</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$list->titre}}" id="titre" placeholder="">
      </div>
      @error('title')
         <div class='alert alert-danger'>
            {{ $message}} 
         </div>
      @enderror
      <div class="mb-3">
        <label for="description" class="form-label">Modifier la description</label>
        <textarea name="description" class="form-control @error('description') is-invalid" @enderror id="description" rows="3">{{$list->description}}</textarea>
      </div>
      @error('description')
         <div class='alert alert-danger'>
            {{ $message}} 
         </div>
      @enderror
      <div class="mb-3">
         <label for="author" class="form-label">Modifier l'Auteur de la liste</label>
         <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{$list->author}}"" id="author" placeholder="">
      </div>
      @error('author')
         <div class='alert alert-danger'>
            {{ $message}} 
         </div>
      @enderror
      <div class="mb-3">
         <label for="cat" class="form-label">Catégorie</label>
         <select name='category' id="cat" class="form-select @error('category') is-invalid @enderror" aria-label="Default select example">
             @foreach($categories as $category)
               <option value="{{ $category->id}}" {{ ($list->category_id==$category->id)? "selected":"" }}>{{ $category->name }}</option>
             @endforeach
         </select>
     </div>
     @error("category")
      <div class="alert alert-danger">
            {{ $message }}
      </div>            
      @enderror  
      <button type="submit" class="btn btn-primary">Modifier</button>
   </form>
</div>