hello doni {{ $tanggal }}
<hr />

@foreach ($users as $key => $user)
    {{ $user->id }} {{ $key }}
    <br />
    {{ $user->name }} {{ $key }}
    <br />
    {{ $user->email }} {{ $key }}
    <br />
@endforeach

@if (sizeof($users) === 1)
    Jumlah user 1
@elseif (sizeof($users) === 2)
    Jumlah user 2
@elseif (sizeof($users) === 3)
    Jumlah user 3
@else
    Jumlah user kurang dari 1 atau lebih dari 3
@endif

<hr />

{{ sizeof($users) === 1 ? 'Jumlah user 1' : (sizeof($users) === 2 ? 'Jumlah user 2' : (sizeof($users) === 3 ? 'Jumlah user 3' : 'Jumlah user kurang dari 1 atau lebih dari 3')) }}

<hr />

<a href="{{ url('doni/create') }}">Create City</a>

@foreach ($cities as $keyCity => $city)
    <li>{{ $city->name }}</li>
@endforeach