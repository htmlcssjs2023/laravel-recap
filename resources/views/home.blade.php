
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        ul{
            background:#30336b;
            position: fixed;
            width: 100%;
        }
       li {
        list-style: none;
       }
       ul li a {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        color: #fff;

       }
       ul li a:hover{
        background: #535c68;
       }
       .welcome{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: orange;
            width: 80%;
            margin: 0 auto;
            top: 40vh;
            height: 40vh;
            border-radius: 10px;
       }
       .welcome h1{
        font-size: 4rem;
       }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('student') }}">List Of Student</a>
                    <a href="{{ url('home/department') }}">Department</a>
                    <a href="{{ url('home/course') }}">Course</a>
                    <a href="#">Notice</a>
                    <a href="#">Result</a>
                    <a href="#">Contact Us</a>

                </li>
               </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="welcome">
                <h1>Welcome To Our Demo Session !</h1>
            </div>
        </section>
    </main>
</body>
</html>
