@extends('layouts.base')
@section('titre')
    Ajout d'une liste
@endsection
@section('contenu')
<div id="fix" class='container'>
   <h1>Ajout d'une Liste</h1>
   <form action="" method="POST">
       @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titre</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    @error('title')
    <div class='alert alert-danger'>
      {{ $message}} 
    </div>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Contenu de la liste</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    @error('description')
    <div class='alert alert-danger'>
      {{ $message}} 
    </div>
    @enderror
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Auteur de la liste</label>
      <input type="text" value='{{old('author')}}' name="author" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    @error('author')
    <div class='alert alert-danger'>
      {{ $message}} 
    </div>
    @enderror
    <div class="mb-3">
        <select name='category' class="form-select" aria-label="Default select example">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button style='float:right;'type="submit" class="btn btn-primary">Ajouter</button>
   </form>
</div>
@endsection