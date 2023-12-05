
       
     

<!-- resources/views/csv/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>All CSV Data</title>
</head>
<body>

<h1>All CSV Data</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Column 1</th>
        <th>Column 2</th>
        <th>Column 3</th>
        <th>Column 4</th>
        <th>Column 5</th>
        <th>Column 6</th>
        <th>Column 7</th>
        <th>Column 8</th>
        <th>Column 9</th>
        <th>Column 10</th>
        <th>Column 11</th>
        <th>Column 12</th>
        <th>Column 13</th>
        <th>Column 14</th>
        <th>Column 15</th>
        <th>Column 16</th>
        <th>Column 17</th>
        

        <!-- Add other columns here (column3 to column12) -->
    </tr>
    @foreach($csvData as $csvData)
        <tr>
            <td>{{ $csvData->id }}</td>
          
            <td>{{ $csvData->column1 }}</td>
            <td>{{ $csvData->column2 }}</td>
            <td>{{ $csvData->column3 }}</td>
            <td>{{ $csvData->column4 }}</td>
            <td>{{ $csvData->column5 }}</td>
            <td>{{ $csvData->column6 }}</td>
            <td>{{ $csvData->column7 }}</td>
            <td>{{ $csvData->column8 }}</td>
            <td>{{ $csvData->column9 }}</td>
            <td>{{ $csvData->column10 }}</td>
    
            <td>{{ $csvData->column11 }}</td>
            <td>{{ $csvData->column12 }}</td>
            <td>{{ $csvData->column13 }}</td>
            <td>{{ $csvData->column14 }}</td>
            <td>{{ $csvData->column15 }}</td>
            <td>{{ $csvData->column16 }}</td>
    
            <td>{{ $csvData->column17 }}</td>
            <!-- Display other columns here (column3 to column12) -->
        </tr>
    @endforeach
</table>

</body>
</html>
