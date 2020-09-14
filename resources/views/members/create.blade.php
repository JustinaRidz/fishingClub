@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime :</div>
               <div class="card-body">
               <form action="{{route('members.store')}}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Vardas: </label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Pavardė: </label>
                           <input type="text" name="surname" class="form-control"> 
                       </div>
                       <div class="form-group">
                           <label>Patirtis metais: </label>
                           <input type="number" id="mce" name="experience" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Miestas kuriame gyvena: </label>
                           <input type="text" name="live" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Klube registruotas metais: </label>
                           <input type="number" name="registered" class="form-control">
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
