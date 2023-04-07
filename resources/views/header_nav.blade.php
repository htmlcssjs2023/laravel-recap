
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
            top: 0;
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
                    <a href="{{ url('home/course') }}">Couser</a>
                    <a href="#">Notice</a>
                    <a href="#">Result</a>
                    <a href="#">Contact Us</a>

                </li>
               </ul>
        </nav>
    </header>
</body>
</html>
