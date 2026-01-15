<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List</title>
</head>

<body>
    <h1>Players Database</h1>

    <p><a href="/">Add New Player</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->email }}</td>
                <td>{{ $player->phone }}</td>
                <td>{{ $player->password }}</td>
                <td>{{ $player->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('players.edit', $player) }}">Edit</a>

                    <form action="{{ route('players.destroy', $player) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this player?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align: center;">No players found. Add some players first.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>