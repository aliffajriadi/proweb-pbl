<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="p-8">
        <table class="border-2">
            <thead class="border-2">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    
                    <th>HARGA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                   <tr>
                    <td>{{$d['id']}}</td>
                    <td>{{$d['nama']}}</td>
                    <td>{{$d['harga']}}</td>
                </tr 
                @endforeach
                >
            </tbody>
        </table>

    </main>
    
</body>
</html>