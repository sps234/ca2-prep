<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>

<h2>Input Form</h2>

<!-- Display validation errors -->
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('processForm')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Old Input: Name Field -->
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    <br><br>

    <!-- File Upload Field -->
    <label for="photo">Photo:</label>
    <input type="file" name="photo" id="photo">
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
