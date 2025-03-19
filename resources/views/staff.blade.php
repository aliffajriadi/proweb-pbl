<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    thead {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

<table>
    <thead>
        <tr>
            <th>
                ID Guru
            </th>
            <th>
                Nama
            </th>
            <th>
                Mata Pelajaran
            </th>
            <th>
                email
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_guru as $guru)
        <tr>
            <td>
                {{ $guru['id_guru'] }}
            </td>
            <td>
                {{ $guru['nama'] }}
            </td>
            <td>
                {{ $guru['mata_pelajaran'] }}
            </td>
            <td>
                {{ $guru['email'] }}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<br>
<br>

<table>
    <thead>
        <tr>
            <th>
                ID Murid
            </th>
            <th>
                Nama
            </th>
            <th>
                Jurusan
            </th>
            <th>
                email
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data_murid as $murid)
        <tr>
            <td>
                {{ $murid['id_murid'] }}
            </td>
            <td>
                {{ $murid['nama'] }}
            </td>
            <td>
                {{ $murid['kelas'] }}
            </td>
            <td>
                {{ $murid['email'] }}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>



