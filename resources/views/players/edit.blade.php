<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player</title>
</head>

<body>
    <h1>Edit Player #{{ $player->id }}</h1>

    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $player->name) }}" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email', $player->email) }}" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $player->phone) }}" required>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="{{ old('password', $player->password) }}" required>

        <button type="submit">Save Changes</button>
        <a href="{{ route('players.index') }}">Cancel</a>
    </form>
</body>

</html>