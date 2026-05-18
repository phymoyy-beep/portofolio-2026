<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Muhammad Rafi Abdul Khalid Portfolio
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            overflow-x:hidden;
        }

        a{
            text-decoration:none;
            color:white;
        }

        section{
            padding:120px 8%;
        }

        /* ================= NAVBAR ================= */

        .navbar{
            width:100%;
            padding:25px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            position:fixed;
            top:0;
            z-index:1000;
            background:rgba(2,8,23,0.85);
            backdrop-filter:blur(12px);
            border-bottom:1px solid rgba(255,255,255,0.05);
        }

        .logo{
            font-size:26px;
            font-weight:700;
            color:#60a5fa;
        }

        .nav-links{
            display:flex;
            gap:35px;
        }

        .nav-links a{
            color:#cbd5e1;
            transition:0.3s;
            font-weight:500;
        }

        .nav-links a:hover{
            color:#60a5fa;
        }

        /* ================= HERO ================= */

        .hero{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
        }

        .hero h1{
            font-size:75px;
            line-height:1.2;
            margin-bottom:25px;
        }

        .hero h1 span{
            color:#3b82f6;
        }

        .hero p{
            max-width:700px;
            color:#94a3b8;
            line-height:1.8;
            font-size:18px;
            margin-bottom:40px;
        }

        .hero-btn{
            padding:18px 35px;
            border-radius:50px;
            background:linear-gradient(135deg,#2563eb,#3b82f6);
            font-weight:600;
            transition:0.3s;
        }

        .hero-btn:hover{
            transform:translateY(-5px);
        }

        /* ================= SECTION ================= */

        .section-title{
            font-size:48px;
            color:#60a5fa;
            margin-bottom:50px;
        }

        /* ================= PROJECT ================= */

        .projects-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
            gap:30px;
        }

        .project-card{
            background:#0f172a;
            border-radius:25px;
            overflow:hidden;
            border:1px solid rgba(255,255,255,0.08);
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
            font-size:24px;
        }

        .project-content p{
            color:#94a3b8;
            line-height:1.7;
            margin-bottom:20px;
        }

        .badge{
            display:inline-block;
            padding:10px 20px;
            border-radius:50px;
            background:#2563eb;
            margin-bottom:20px;
            font-size:14px;
        }

        .github-btn{
            display:inline-block;
            padding:12px 25px;
            border-radius:12px;
            border:1px solid rgba(255,255,255,0.08);
            transition:0.3s;
        }

        .github-btn:hover{
            background:#1e293b;
        }

        /* ================= CONTACT ================= */

        .contact-box{
            max-width:700px;
            margin:auto;
            background:#0f172a;
            padding:40px;
            border-radius:25px;
            border:1px solid rgba(255,255,255,0.08);
        }

        .contact-item{
            margin-bottom:30px;
            padding-bottom:25px;
            border-bottom:1px solid rgba(255,255,255,0.08);
        }

        .contact-item:last-child{
            border:none;
            margin-bottom:0;
            padding-bottom:0;
        }

        .contact-item a{
            color:#60a5fa;
            transition:0.3s;
        }

        .contact-item a:hover{
            color:white;
        }

        /* ================= FOOTER ================= */

        footer{
            padding:40px;
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.05);
            color:#94a3b8;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:768px){

            .hero h1{
                font-size:50px;
            }

            .nav-links{
                display:none;
            }

            .section-title{
                font-size:38px;
            }

        }

    </style>

</head>
<body>

    <!-- ================= NAVBAR ================= -->

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

    <!-- ================= HERO ================= -->

    <section class="hero" id="about">

        <h1>
            Muhammad Rafi <br>
            <span>Abdul Khalid</span>
        </h1>

        <p>
            Frontend Developer specializing in Laravel,
            Livewire, Filament, Blade, and responsive web applications.
        </p>

        <a href="#projects" class="hero-btn">
            View Projects
        </a>

    </section>

    <!-- ================= PROJECT ================= -->

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

                        <br>

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

    <!-- ================= CONTACT ================= -->

    <section id="contact">

        <h1 class="section-title">
            Contact Me
        </h1>

        <div class="contact-box">

            @if($contact)

                <div class="contact-item">

                    <strong>Email</strong>

                    <br><br>

                    <a href="mailto:{{ $contact->email }}">

                        {{ $contact->email }}

                    </a>

                </div>

                <div class="contact-item">

                    <strong>Instagram</strong>

                    <br><br>

                    <a
                        href="{{ $contact->instagram }}"
                        target="_blank"
                    >

                        {{ $contact->instagram }}

                    </a>

                </div>

                <div class="contact-item">

                    <strong>Github</strong>

                    <br><br>

                    <a
                        href="{{ $contact->github }}"
                        target="_blank"
                    >

                        {{ $contact->github }}

                    </a>

                </div>

            @else

                <p style="color:#94a3b8;">
                    Contact data not available.
                </p>

            @endif

        </div>

    </section>

    <!-- ================= FOOTER ================= -->

    <footer>
        © 2026 Muhammad Rafi Abdul Khalid — Portfolio Website
    </footer>

</body>
</html>