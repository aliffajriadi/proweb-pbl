<!-- resources/views/admin-create-staff.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Buat Akun Staff</title>
</head>
<body>
    <h1>Form Buat Akun Staff</h1>

    <form method="POST" action="#">
        @csrf
        <label>Nama Staff:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Buat Akun</button>
    </form>
</body>
</html>
