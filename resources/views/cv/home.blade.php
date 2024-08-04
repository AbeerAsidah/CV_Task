<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Abeer Asidah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }
        .profile-header {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #007bff; /* Add border color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-header h1 {
            font-size: 38px;
            color: #333;
            margin-top: 20px;
        }
        .profile-header h2 {
            font-size: 20px;
            font-weight: normal;
            color: #666;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .profile-card p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #333;
        }
        .profile-card .social-links a {
            margin: 0 15px;
            font-size: 28px; /* Size of the icons */
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .profile-card .social-links a:hover {
            color: #007bff; /* Hover color */
        }
        .nav-buttons {
            margin-top: 20px;
            text-align: center;
        }
        .nav-buttons a {
            margin: 0 10px;
            font-size: 16px;
            color: #ffffff;
            background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            transition: background 0.3s ease;
        }
        .nav-buttons a:hover {
            background: linear-gradient(90deg, #0056b3 0%, #003d79 100%);
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Profile Header -->
        <div class="profile-header text-center">
            <img src="images/photo_2024-06-27_13-08-48 (3).jpg" alt="Abeer Asidah">
            <h1>{{ $profile->name }}</h1>
            <h2>{{ $profile->role }}</h2>
        </div>

        <!-- Profile Card -->
        <div class="profile-card text-center">
            <p><strong>Email:</strong> {{ $profile->email }}</p>
            <p><strong>Phone:</strong> {{ $profile->phone }}</p>
            <p><strong>Location:</strong> {{ $profile->location }}</p>
            <p><strong>Interests:</strong> {{ $profile->interests }}</p>
            <div class="social-links">
                <a href="{{ $profile->social_links['facebook'] }}" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ $profile->social_links['linkedin'] }}" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="{{ $profile->social_links['twitter'] }}" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="nav-buttons">
            <a href="{{ route('experience') }}">Experience</a>
            <a href="{{ route('education') }}">Education</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('languages') }}">Languages</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
