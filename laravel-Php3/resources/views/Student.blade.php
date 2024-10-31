<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student->grade->class_id ?? 'N/A' }}</td>
                <td>{{ $student['email'] }}</td>
                <td>{{ $student['address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
