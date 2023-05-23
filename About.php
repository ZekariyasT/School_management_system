<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/New folder2/bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        body {
            background: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7));
        }
        
        div {
            color: rgb(212, 218, 223);
        }
        
        div p {
            font-size: 1.4em;
        }
        
        .abt1 {
            margin: 5em;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .abt1 h2 {
            text-align: center;
        }
        
        .abt2 {
            margin: 7em;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .abt2 p,
        .abt2 h1 {
            margin-left: 19em;
        }
        
        .abt3 {
            margin: 7em;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .abt3 .abth {
            margin-top: 3em;
        }
        
        .abt3 li {
            font-size: 1.4em;
        }
        
        h1,
        h2 {
            color: #fff;
        }
        
        @media(max-width:700px) {
            .r {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm  navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Communty School</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#me" aria-controls="me" aria-expanded="false" aria-label="me">
                <span class="navbar-toggler-icon"></span>
 </button>
            <div class="collapse navbar-collapse" id="me">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> <a href="Home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"> <a href="" class="nav-link">History</a></li>
                    <li class="nav-item"> <a href="About.php" class="nav-link">About Us </a></li>
                    <li class="nav-item"> <a href="contact.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"> <a href="index.php" class="nav-link">Login</a></li>
                    <form action="">
                        <input type="text" placeholder="Search..." style="margin-left:30px ;color:gray;background-color: rgba(0, 0, 0, 0.445); border-radius:10px;">
                    </form>

            </div>
        </div>
    </nav>



    <div class="r">
        <div class="abt1">
            <img src="img/stu.jpg" style="width: 30em; float:right; position: relative;">
            <h2>ABOUT US</h2>
            <h1>The roots of education are bitter, but the fruit is sweet</h1>
            <p class="par1">Arbaminch Comunity School encourages students to set high standards and develop skills and attitudes to compete and challenge themselves at their own pace, allowing them to build confidence, and reach their full potential. Our educational
                specialists are able to match your child's specific educational needs through assessment and evaluation.</p>
            <a href=""></a>
        </div>
        <div class="abt2">
            <img src="img/girl.jpg" style="width: 30em; float:left;">

            <h1 class="h1">The Best Education Place</h1>
            <p class="par2">Arbaminch Comunity School provides high quality education to local students. Our dedicated team of professionals and highly educated and experienced teachers are ready to help all students to reach their full potential by providing them individual
                attention. We equip our students with knowledge and provide them resources and guidance to achieve their academics goals. Likewise, we fully support and help them to excel in their studies and succeed in their academic career. Moreover,
                our dedicated and caring staff make sure that our students can apply the skills what they have learnt to solve real-world problems with confidence and courage. This kind of attitude is very beneficial for them since they needed these skills
                to build and enhance their future careers.</p>
            <a href=""></a>
        </div>

        <div class="abt3">
            <h1 class="abth">What makes our school stand out is a clear vision to offer a good quality education.</h1>
            <h1>Our Programs</h1>
            <h2>Arbaminch Comunity School offers the following programs:</h2>
            <ol>
                <li>Kindergarten (KG 1-3)</li>
                <li>Primary school Students (Grade 1 - 8)</li>
                <li>Secondary school Students (Grade 9 and 10)</li>
                <li>Preparatory school Students (Grade 11 and 12)</li>
            </ol>
            <p class="par3">Arbaminch Comunity School provides high quality education to local students. Our dedicated team of professionals and highly educated and experienced teachers are ready to help all students to reach their full potential by providing them individual
                attention. We equip our students with knowledge and provide them resources and guidance to achieve their academics goals. Likewise, we fully support and help them to excel in their studies and succeed in their academic career. Moreover,
                our dedicated and caring staff make sure that our students can apply the skills what they have learnt to solve real-world problems with confidence and courage. This kind of attitude is very beneficial for them since they needed these skills
                to build and enhance their future careers.</p>
            <p>At Arbaminch community school, we offer full day program for grade 1-8 and high school credit courses towards the Ontario Secondary School Diploma at day, night and the weekend school. In addition, we provide tutoring services for all grades.</p>

            <h2>The benefits of enrolling students in our private school include, but not limited to the following:</h2>
            <ul>
                <li>Good quality education with experienced and dedicated professionals</li>
                <li>Small class sizes with the opportunity for one-on-one attention</li>
                <li>High level of success and achievement with individual attention and focused approach</li>
                <li>Full-time primary schooling credit courses</li>
                <li>Positive climate for students with diverse backgrounds and needs</li>
                <li>Dedicated and caring staff</li>
                <li>Flexible class times and schedules</li>
                <li>STEM-based learning</li>
            </ul>
            <h2>Teachers use practices and procedures that:</h2>
            <ul>
                <li>are fair, transparent, and equitable for all students;</li>
                <li>support all students equally;</li>
                <li>are carefully planned to relate to the curriculum expectations and learning goals;</li>
                <li>are communicated clearly to students and parents throughout the school year or course;</li>
                <li>are ongoing, varied in nature, and administered over a period of time to provide multiple opportunities for students to demonstrate the full range of their learning;</li>
                <li>provide ongoing descriptive feedback that is clear, specific, meaningful, and timely to support improved learning and achievement;</li>
                <li>develop students self-assessment skills to enable them to assess their own learning, set specific goals, and plan next steps for their learning.</li>

            </ul>

        </div>

    </div>


    <script src="/New folder2/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>

</html>