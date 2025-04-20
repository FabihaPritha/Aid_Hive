@extends('layouts.app')

@section('content')
<h2>All Sectors</h2>

<a href="{{ route('sectors.create') }}">Add Sector</a>

<ul>
@foreach($sectors as $sector)
    <li>{{ $sector->name }}
        <a href="{{ route('sectors.edit', $sector) }}">Edit</a>
        <form action="{{ route('sectors.destroy', $sector) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
