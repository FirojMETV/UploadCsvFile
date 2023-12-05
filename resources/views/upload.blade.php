<!-- resources/views/upload.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>CSV Upload</title>
</head>
<body>

<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" accept=".csv">
    <button type="submit">Upload</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
{{-- @foreach($csvData as $csvData)
    <p>
        <a href="{{ route('csv.show', ['id' => $csvData->id]) }}">
            View Details for Row {{ $csvData->id }}
        </a>
    </p>
@endforeach --}}
</body>
</html>
