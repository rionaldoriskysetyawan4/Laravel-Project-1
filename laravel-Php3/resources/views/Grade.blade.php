<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grade as $grade)
            <tr>
                <td>{{ $grade['id'] }}</td>
                <td>{{ $grade['class_id'] }}</td>
                <td>{{ $grade['scoring'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
