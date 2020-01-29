@extends("layouts.master")
@section('contenu')
<legend>Costumer</legend>
<a href="{{route('fiche_create')}}">
    <button class="btn btn-primary" type="button"><span class="badge ">+</span>Ajouter</button>
 </a>   
    <table class="table table-bordered table-light">
    <tbody>
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">address</th>
      <th scope="col-3">phone</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
    </tr>
    </thead>

  @foreach($liste as $key=>$list)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->address}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->email}}</td>
      <td>
         
          <form action="{{route('fiche_destroy',['id'=>$list->id])}}" method="post">
               @csrf
               @method('delete')
               <button type="button" class="btn btn-primary">
                  <span class="badge badge-light">
                     <a href="{{route('edit_list',['id'=>$list->id])}}">
                        <i class="far fa-edit"></i>
                      </a>
                  </span>
                <span class="sr-only">unread messages</span>
               </button> 
               
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                       <i class="fas fa-times"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       Voulez-vous reellement effectuer cette operation, elle est irreversible!!!   
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-danger">Oui</button>
                      </div>
                    </div>
                  </div>
                </div>
           </form>
         
       </td>
    </tr> 
    @endforeach 
    
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
     {{$liste->links()}} 
  </ul>
</nav>
@endsection
