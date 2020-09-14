@extends('layouts.app')
@section('content')
{{-- <script>
      tinymce.init({
        selector: '#mce'
      });
    </script> --}}

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime :</div>
               <div class="card-body">
               <form action="{{route('reservoirs.store')}}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Pavadinimas: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Plotis: </label>
                           <input type="number" name="area" class="form-control"> 
                       </div>
                       <div class="form-group">
                           <label>Aprašymas: </label>
                           <textarea id="mce" name="about" class="form-control"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
