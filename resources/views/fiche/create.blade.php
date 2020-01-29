@extends('layouts.master')
@section('contenu')
<form action="{{route('fiche_store')}}" method="post">
@csrf
<legend>Ajout d'une nouvelle entree  </legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
        @if(session('success'))
         <div class="alert alert-success">{{session('success')}}</div>
        @endif 
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Adress</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
   <input class="btn btn-primary" type="submit" value="enregistrer">
  
</form>
@endsection
