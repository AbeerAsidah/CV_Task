<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .experience-card {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Back Button -->
        <button class="btn btn-secondary back-button" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i> Back
        </button>

        <h1 class="text-center">Experience</h1>
        @foreach ($experiences as $experience)
            <div class="experience-card">
                <h4>{{ $experience->title }}</h4>
                <p><strong>Organization:</strong> {{ $experience->organization }}</p>
                <p><strong>Role:</strong> {{ $experience->role }}</p>
                <p><strong>Start Date:</strong> {{ $experience->start_date }}</p>
                <p><strong>End Date:</strong> {{ $experience->end_date }}</p>
                <p><strong>Location:</strong> {{ $experience->location }}</p>
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
