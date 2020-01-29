
@extends('layouts.master')
@section('contenu')
<form action="{{route('fiche_update',['id'=>$modif->id])}}" method="post">
@csrf
@method('patch')
<legend>Modification membre</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
        @if(session('success'))
         <div class="alert alert-success">{{session('success')}}</div>
        @endif      
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" name="name" value="{{$modif->name}}">
    </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" class="form-control" name="address" value="{{$modif->address}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">email</label>
    <input type="email" class="form-control" name="email" value="{{$modif->email}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label>
    <input type="number" class="form-control" name="phone" value="{{$modif->phone}}">
  </div>
   <input class="btn btn-primary" type="submit" value="enregistrer">
  
</form>
@endsection