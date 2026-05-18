<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Muhammad Rafi Abdul Khalid
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @livewireStyles

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
            scroll-behavior:smooth;
        }

        body{
            background:#020817;
            color:white;
        }

        a{
            text-decoration:none;
        }

        section{
            padding:120px 8%;
        }

        .navbar{
            width:100%;
            padding:25px 8%;
            position:fixed;
            top:0;
            display:flex;
            justify-content:space-between;
            align-items:center;
            background:rgba(2,8,23,0.9);
            backdrop-filter:blur(10px);
            z-index:999;
            border-bottom:1px solid rgba(255,255,255,0.05);
        }

        .logo{
            font-size:24px;
            font-weight:700;
            color:#60a5fa;
        }

        .nav-links{
            display:flex;
            gap:30px;
        }

        .nav-links a{
            color:#cbd5e1;
            transition:0.3s;
        }

        .nav-links a:hover{
            color:#60a5fa;
        }

        .hero{
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            flex-direction:column;
        }

        .hero h1{
            font-size:72px;
            margin-bottom:20px;
        }

        .hero span{
            color:#3b82f6;
        }

        .hero p{
            color:#94a3b8;
            max-width:700px;
            line-height:1.8;
            margin-bottom:40px;
        }

        .btn{
            padding:16px 35px;
            border-radius:50px;
            background:linear-gradient(135deg,#2563eb,#3b82f6);
            color:white;
            font-weight:600;
            display:inline-block;
        }

        .section-title{
            font-size:45px;
            color:#60a5fa;
            margin-bottom:50px;
        }

        .projects-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
            gap:30px;
        }

        .project-card{
            background:#0f172a;
            border:1px solid rgba(255,255,255,0.08);
            border-radius:25px;
            overflow:hidden;
            transition:0.3s;
        }

        .project-card:hover{
            transform:translateY(-10px);
            border-color:#3b82f6;
        }

        .project-image{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .project-content{
            padding:25px;
        }

        .project-content h2{
            margin-bottom:15px;
        }

        .project-content p{
            color:#94a3b8;
            line-height:1.7;
            margin-bottom:20px;
        }

        .badge{
            display:inline-block;
            padding:10px 20px;
            background:#2563eb;
            border-radius:50px;
            margin-bottom:20px;
        }

        .github-btn{
            display:inline-block;
            padding:12px 25px;
            border-radius:12px;
            border:1px solid rgba(255,255,255,0.1);
            color:white;
            transition:0.3s;
        }

        .github-btn:hover{
            background:#1e293b;
        }

        .contact-box{
            max-width:700px;
            margin:auto;
            background:#0f172a;
            padding:40px;
            border-radius:25px;
            border:1px solid rgba(255,255,255,0.08);
        }

        .contact-item{
            margin-bottom:25px;
        }

        .contact-item a{
            color:#60a5fa;
        }

        footer{
            padding:40px;
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.05);
            color:#94a3b8;
        }

        @media(max-width:768px){

            .hero h1{
                font-size:50px;
            }

            .nav-links{
                display:none;
            }

        }

    </style>

</head>
<body>

    <nav class="navbar">

        <div class="logo">
            Rafi Portfolio
        </div>

        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>

    </nav>

    <section class="hero" id="about">

        <h1>
            Muhammad Rafi <span>Abdul Khalid</span>
        </h1>

        <p>
            Frontend Developer specializing in Laravel,
            Livewire, Filament, and responsive web applications.
        </p>

        <a href="#projects" class="btn">
            View Projects
        </a>

<section id="projects">

    <h1 class="section-title">
        My Projects
    </h1>

    <div class="projects-grid">

        @foreach($projects as $project)

            <div class="project-card">

                @if($project->image)

                    <img
                        src="{{ asset('storage/' . $project->image) }}"
                        class="project-image"
                    >

                @endif

                <div class="project-content">

                    <h2>
                        {{ $project->title }}
                    </h2>

                    <p>
                        {{ $project->description }}
                    </p>

                    <div class="badge">
                        {{ $project->status }}
                    </div>

                    <br><br>

                    <small style="color:#94a3b8;">
                        {{ $project->tech_stack }}
                    </small>

                    <br><br>

                    @if($project->github_link)

                        <a
                            href="{{ $project->github_link }}"
                            target="_blank"
                            class="github-btn"
                        >
                            View Github
                        </a>

                    @endif

                </div>

            </div>

        @endforeach

    </div>

</section>

    <section id="contact">

        <h1 class="section-title">
            Contact Me
        </h1>

        <div class="contact-box">

            <div class="contact-item">
                <strong>Email:</strong><br>
                <a href="mailto:deliaggkwkw@gmail.com">
                    deliaggkwkw@gmail.com
                </a>
            </div>

            <div class="contact-item">
                <strong>Instagram:</strong><br>
                <a href="https://instagram.com/imphyy4" target="_blank">
                    @imphyy4
                </a>
            </div>

            <div class="contact-item">
                <strong>Github:</strong><br>
                <a href="https://github.com/phymoyy-beep" target="_blank">
                    github.com/phymoyy-beep
                </a>
            </div>

        </div>

    </section>

    <footer>
        © 2026 Muhammad Rafi Abdul Khalid — Portfolio Website
    </footer>

    @livewireScripts

</body>
</html>