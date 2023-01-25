<h1>Listagem dos usuários</h1>

@foreach ($users as $user)
    <ul>
        <li>{{ $user->name }} - {{ $user->email }}</li>
    </ul>
@endforeach
