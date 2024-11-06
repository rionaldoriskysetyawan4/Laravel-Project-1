<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Department</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <!-- Menampilkan Kelas, assuming grades relationship is set up correctly -->
                <td>{{ $student->department->deskripsi ?? 'N/A' }}</td>
                <!-- Menampilkan Department, assuming department relationship is set up correctly -->
                <td>{{ $student->department ? $student->department->department_id : 'N/A' }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
