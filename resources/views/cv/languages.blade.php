<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .back-button {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Back Button -->
        <button class="btn btn-secondary back-button" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i> Back
        </button>

        <h1>Languages</h1>
        @foreach ($languages as $language)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $language->language }}</h5>
                    <!-- <p class="card-text">{{ $language->proficiency }}</p> -->
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- FontAwesome for back arrow icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
