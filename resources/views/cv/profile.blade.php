<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .profile-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .social-links a {
            margin-right: 10px;
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

        <div class="profile-card">
            <h1 class="text-center">{{ $profile->name }}</h1>
            <p class="text-center">Role: {{ $profile->role }}</p>
            <p class="text-center">Email: {{ $profile->email }}</p>
            <p class="text-center">Phone: {{ $profile->phone }}</p>
            <p class="text-center">Location: {{ $profile->location }}</p>
            <p class="text-center">Interests: {{ $profile->interests }}</p>
            <div class="text-center social-links">
                <a href="{{ $profile->social_links['facebook'] }}" class="btn btn-primary">Facebook</a>
                <a href="{{ $profile->social_links['linkedin'] }}" class="btn btn-primary">LinkedIn</a>
                <a href="{{ $profile->social_links['twitter'] }}" class="btn btn-primary">Twitter</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- FontAwesome for back arrow icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
