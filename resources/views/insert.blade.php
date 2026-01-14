<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<link rel="stylesheet" href="add.css">

<body>
    <h1>Insert into Database</h1>

    <p>Inserting into <b>unittest</b></p>
    <form action="/insert" method="POST">
        @csrf

        <label for="Name">Name: </label>
        <input type="text" name="name" id="Name" required>
        <br><br>
        <label for="Email">Email: </label>
        <input type="email" name="email" id="Email" required>
        <br><br>
        <label for="Phone">Phone: </label>
        <input type="tel" name="phone" id="Phone" required>
        <br><br>
        <label for="Password">Password: </label>
        <input type="password" name="password" id="Password" required>
        <br><br>
        <button type="submit">Submit Data</button>




    </form>
</body>

</html>