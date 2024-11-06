<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
    <table class="table-simple">
    <thead>
        <tr>
            <th>No</th>
            <th>Departemen</th>
            <th>Deskripsi</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $index => $department)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $department->department_id }}</td>
            <td>{{ $department->clade_id ?? 'n/a' }}</td>
            <td>{{ $department->deskripsi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    </table>
</x-layout>
