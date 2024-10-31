<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grade as $index => $grade)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $grade->class_id }}</td>
                <td>                @foreach ($grade->students as $student)
                            <li>{{ $student->name }}</li>
                @endforeach
            </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
