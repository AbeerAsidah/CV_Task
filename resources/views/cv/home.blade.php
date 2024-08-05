<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="{{ asset('images/photo_2024-08-05_23-12-31.jpg') }}" alt="{{ $profile->name }}">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">{{ explode(' ', $profile->name)[0] }}</span>
            <span class="profile_name_lastName">{{ explode(' ', $profile->name)[1] }}</span>
          </h1>
          <p class="profile_title">{{ $profile->role }}</p>
          <p class="description profile_description">
            {{ $profile->interests }}
          </p>
          <a class="downloadBtn" href="{{ asset('pdf/Resume_cv_task.pdf') }}" download="Resume.pdf">Download Resume</a>
        </div>
      </div>
    </div>

    <div class="group-1">
     

      <div class="languages">
        <h3 class="title">Languages</h3>
        <ul class="languages_list description">
          @foreach($languages as $language)
            <li>{{ $language->language }}</li>
          @endforeach
        </ul>
      </div>

      <div class="skills">
        <h3 class="title">Skills</h3>
        <ul class="skills_list description">
          @foreach($skills as $skill)
            <li>{{ $skill->skill }}</li>
          @endforeach
        </ul>
      </div>

     

      <div class="interest">
        <h3 class="title">Interest</h3>
        <div class="interest_items">
        @foreach($interests as $interest)
        <div class="interest_item">
              <i data-feather="heart"></i>
              <!-- <h2 class="item_title">{{ $interest->name }}</h2> -->
              <!-- <span>{{ $interest->description }}</span> -->
              <p class="item_subtitle">{{ $interest->description }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <!-- <div class="interest">
        <h1 class="title">My Interests</h1>
        <div class="interests_list">
            @foreach($interests as $interest)
                <div class="interest_item">
                    <h2 class="item_title">{{ $interest->name }}</h2>
                    <p class="description">{{ $interest->description }}</p>
                </div>
            @endforeach
        </div>
    </div> -->

    </div>

    <div class="group-2">

    <div class="edu">
        <h3 class="title">Education</h3>
        @foreach($educations as $education)
          <div class="edu_item">
            <p class="item_preTitle">{{ $education->start_date }} - {{ $education->end_date }}</p>
            <h4 class="item_title">{{ $education->degree }}</h4>
            <p class="item_subtitle">{{ $education->institution }}</p>
            <p class="item_location">{{ $education->location }}</p>
          </div>
        @endforeach
      </div>

      <div class="exp">
        <h3 class="title">Experience</h3>
        @foreach($experiences as $experience)
          <div class="exp_item">
            <p class="item_preTitle">{{ $experience->start_date }} - {{ $experience->end_date }}</p>
            <h4 class="item_title">{{ $experience->title }}</h4>
            <p class="item_subtitle">{{ $experience->organization }}</p>
            <!-- <p class="description">{{ $experience->role }}</p> -->
            <p class="item_location">{{ $experience->location }}</p>
          </div>
        @endforeach
      </div>

      <div class="projects">
        <h3 class="title">Projects</h3>
        @foreach($projects as $project)
          <div class="project_item">
            <h4 class="item_title">{{ $project->name }}</h4>
            <p class="description">{{ $project->description }}</p>
            <p class="item_tech">Frontend: {{ $project->frontend }}, Backend: {{ $project->backend }}</p>
            <p class="description">{{ $project->details }}</p>
          </div>
        @endforeach
      </div>
      

    </div>

    <hr>

    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">{{ $profile->location }}</p>
          <p class="description">{{ $profile->phone }}</p>
          <p class="description">{{ $profile->email }}</p>
        </div>
      </div>

      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          @php
            $socialLinks = is_string($profile->social_links) ? json_decode($profile->social_links, true) : $profile->social_links;
          @endphp
          @foreach($socialLinks as $platform => $link)
            <a href="{{ $link }}" target="_blank" class="social_item">
              <i data-feather="{{ $platform }}"></i>
              <span>{{ ucfirst($platform) }}</span>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>
