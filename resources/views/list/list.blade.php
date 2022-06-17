
@extends('layouts.base')
@section('title')
Gestion des listes
@endsection

@section('contenu')
<div id="fix">
<div class='row text-center mt-5'>
    <h3>Gestion des Listes</h3>
</div>
<div class='text-center mt-2'>
    <a href="{{route('liste_add')}}" class="btn btn-outline-success">
        <i class="fa-regular fa-square-plus"></i>&nbsp;Ajouter une Liste
    </a>
</div>
<div class='row mt-5'> 
    <div class="col-8 offset-2">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titres</th>
            <th scope="col">Descriptions</th>
            <th scope="col">Auteurs</th>
            <th scope="col">Catégories</th>
            <th scope="col">Publier le :</th>
            <th scope="col">Voir</th>
            <th scope="col">Éditer</th>
            <th scope="col">Supp</th>
        </tr>
        </thead>
        <tbody>
            @forelse($listes as $list)
          <tr>
            <th scope="row">{{$list->id }}</th>
            <td>{{ $list->title }}</td>
            <td>{{ Str::limit($list->description,10) }}</td>
            <td>{{ $list->author }}</td>
            <td>{{ $list->category->name  }}</td>
            <td>{{ $list->created_at }}</td>
            <td>
                <a href="{{route('detail', ['id' =>$list->id])}}"class="btn btn-outline-primary">
                    <i class="fa-solid fa-eye"></i>
                </a>
            </td>
            <td>
                <a href="{{route('liste_editer', ['id' =>$list->id])}}" class="btn btn-outline-success">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td>
                <a onclick="return confirm('Voulez-vous vraiment supprimer cette Liste ?')" href="{{ route('liste_supprimer', ['id' =>$list->id]) }}" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
            </td>
          </tr>
          @empty
              <tr><td colspan='5' style="text-align:center"> Il n'existe aucun souhait </td></tr>
          @endforelse
        </tbody>
      </table>        
    </div>
</div>
</div>
@endsection
