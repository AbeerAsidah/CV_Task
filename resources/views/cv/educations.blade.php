<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .education-card {
            background-color: #f8f9fa;
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

        <h1 class="text-center">Education</h1>
        @foreach ($educations as $education)
            <div class="education-card">
                <h4>{{ $education->degree }}</h4>
                <p><strong>Institution:</strong> {{ $education->institution }}</p>
                <p><strong>Field of Study:</strong> {{ $education->field_of_study }}</p>
                <p><strong>Start Date:</strong> {{ $education->start_date }}</p>
                <p><strong>End Date:</strong> {{ $education->end_date }}</p>
                <p><strong>Location:</strong> {{ $education->location }}</p>
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
