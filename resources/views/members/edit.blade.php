@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime žvejo informaciją</div>
                <div class="card-body">
                <form method="POST" action="{{route('members.update', $member->id)}}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Vardas</label>
                            <input type="text" name="name" class="form-control" value="{{ $member->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pavardė</label>
                            <input type="text" name="surname" class="form-control" value="{{ $member->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Patirtis metais</label>
                            <input type="number" name="experience" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Miestas kuriame gyvena</label>
                            <input type="text" name="live" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Klube registruotas metais</label>
                            <input type="number" name="registered" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Žvejotino telkinio numeris</label>
                            <input type="number" name="experience" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
