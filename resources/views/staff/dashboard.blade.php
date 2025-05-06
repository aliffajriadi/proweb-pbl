<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Staff - Schedu</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            border: 1px solid #aaa;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Dashboard Staff - Daftar Guru dan Murid</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
