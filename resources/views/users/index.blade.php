<h1>Listagem dos usuários</h1>

@foreach ($users as $user)
    <ul>
        <li>
            {{ $user->name }} - {{ $user->email }} | <a href="{{ route('users.show', $user->id) }}">Ver</a>
        </li>
    </ul>
@endforeach
