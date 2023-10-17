<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyMCE Editor</title>

    <!-- Load TinyMCE from CDN -->
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        form {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        #editor {
            width: 100%;
            height: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>

    <script>
        tinymce.init({
            selector: 'textarea#editor', // Use a textarea element with the id "editor"
            plugins: 'autolink lists link image',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            height: 300
        });
    </script>
</head>

<body>
    <h1>TinyMCE Editor</h1>
    <form method="POST" action="{{ route('save-content') }}">
        @csrf
        <label for="editor" class="text-center">Editor Content:</label>
        <textarea id="editor" name="content"></textarea>
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('view-content') }}" class="btn btn-primary">Go to list</a>
    </form>

</body>

</html>