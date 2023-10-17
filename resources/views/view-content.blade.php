<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Content</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Background color for the entire page */
        }

        .container {
            background-color: #fff; /* Background color for the content container */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-body {
            font-size: 18px;
        }

        .card-footer {
            background-color: #f8f9fa; /* Background color for the card footer */
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Saved Content</h1>
        <a href="{{ route('editor') }}" class="btn btn-primary m-3">Go to Editor</a>
        
        @foreach ($contents as $content)
            <div class="card">
                <div class="card-body">
                    <p class="card-text">{!! $content->content !!}</p>
                </div>
                <div class="card-footer">
                    Created at: {{ $content->created_at }}
                </div>
            </div>
        @endforeach
    </div>

    <!-- Include Bootstrap JS and jQuery (optional) if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
