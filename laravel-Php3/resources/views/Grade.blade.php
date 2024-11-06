<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Department</th>
                <th>Kelas</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grade as $index => $singleGrade)
            <tr>
                <td>{{ $index + 1 }}</td>
                <!-- Assuming 'department' is related to 'grade' model -->
                <td>{{ $singleGrade->department->deskripsi ?? 'N/A' }}</td> <!-- 'deskripsi' for department name -->

                <!-- Assuming 'students' is related to 'grade' model -->
                <td>
                    <ul>
                        @foreach ($singleGrade->students as $student)
                            <li>{{ $student->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
