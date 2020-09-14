@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Patirtis</th>
            <th>Miestas kuriame gyvena</th>
            <th>Klube registruotas metais</th>
            <th>Žvejotinas telkinys</th>
        </tr>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->name }}</td>
            <td>{{ $member->surname }}</td>
            <td>{{ $member->experience }}</td>
            <td>{{ $member->live }}</td>
            <td>{{ $member->registered }}</td>
            <td>{{ $member->reservoir_id}}</td>
            <td>
                <form action={{ route('members.destroy', $member->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('members.edit', $member->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('members.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection