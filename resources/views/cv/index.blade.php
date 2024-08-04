<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section {
            width: 80%;
            max-width: 1200px;
            margin: 20px 0;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section:nth-of-type(odd) {
            background-color: #e9ecef;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-content {
            line-height: 1.6;
        }

        .section-content a {
            color: #007bff;
            text-decoration: none;
        }

        .section-content a:hover {
            text-decoration: underline;
        }

        /* Fade-in Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Profile Section -->
        <div id="profile" class="section fade-in">
            <h2 class="section-title">Profile</h2>
            <div class="section-content">
                @if($profile)
                    <p><strong>Name:</strong> {{ $profile->name }}</p>
                    <p><strong>Role:</strong> {{ $profile->role }}</p>
                    <p><strong>Gender:</strong> {{ $profile->gender }}</p>
                    <p><strong>Birthdate:</strong> {{ $profile->birthdate }}</p>
                    <p><strong>Nationality:</strong> {{ $profile->nationality }}</p>
                    <p><strong>Location:</strong> {{ $profile->location }}</p>
                    <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                    <p><strong>Email:</strong> <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                    <p><strong>Interests:</strong> {{ $profile->interests }}</p>
                @else
                    <p>Profile data not found.</p>
                @endif
            </div>
        </div>

        <!-- Experience Section -->
        <div id="experience" class="section fade-in">
            <h2 class="section-title">Experience</h2>
            @forelse($experiences as $experience)
                <div class="section-content">
                    <h3>{{ $experience->title }}</h3>
                    <p><strong>Organization:</strong> {{ $experience->organization }}</p>
                    <p><strong>Role:</strong> {{ $experience->role }}</p>
                    <p><strong>Dates:</strong> {{ $experience->start_date }} - {{ $experience->end_date }}</p>
                    <p><strong>Location:</strong> {{ $experience->location }}</p>
                </div>
            @empty
                <p>No experience data available.</p>
            @endforelse
        </div>

        <!-- Education Section -->
        <div id="education" class="section fade-in">
            <h2 class="section-title">Education</h2>
            @forelse($educations as $education)
                <div class="section-content">
                    <h3>{{ $education->degree }}</h3>
                    <p><strong>Field:</strong> {{ $education->field }}</p>
                    <p><strong>Institution:</strong> {{ $education->institution }}</p>
                    <p><strong>Dates:</strong> {{ $education->start_date }} - {{ $education->end_date }}</p>
                    <p><strong>Location:</strong> {{ $education->location }}</p>
                </div>
            @empty
                <p>No education data available.</p>
            @endforelse
        </div>

        <!-- Projects Section -->
        <div id="projects" class="section fade-in">
            <h2 class="section-title">Projects</h2>
            @forelse($projects as $project)
                <div class="section-content">
                    <h3>{{ $project->name }}</h3>
                    <p><strong>Description:</strong> {{ $project->description }}</p>
                    <p><strong>Frontend:</strong> {{ $project->frontend }}</p>
                    <p><strong>Backend:</strong> {{ $project->backend }}</p>
                    @if($project->details)
                        <p><strong>Details:</strong> {{ $project->details }}</p>
                    @endif
                </div>
            @empty
                <p>No project data available.</p>
            @endforelse
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).on('scroll', function() {
                $('.fade-in').each(function() {
                    var elementTop = $(this).offset().top;
                    var windowHeight = $(window).height();
                    if (elementTop < windowHeight - 100) {
                        $(this).addClass('visible');
                    }
                });
            }).trigger('scroll');
        });
    </script>
</body>
</html>
