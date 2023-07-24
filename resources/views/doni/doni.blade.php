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