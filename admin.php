<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylel.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <li><img src="image/dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="image/reading-book (1).png" alt="">&nbsp;<span>Students</span> </li>
            <li><img src="image/teacher2.png" alt="">&nbsp;<span>Teachers</span> </li>
            <li><img src="image/school.png" alt="">&nbsp;<span>Principal</span> </li>
            <li><img src="image/dashboard.png" alt="">&nbsp; <span><a href="Home.php">Log out</a></span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="image/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="image/notifications.png" alt="">
                    <div class="img-case">
                        <img src="image/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2022</h1>
                        <h3>academic Year </h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/schools.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent created account for teacher</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>year</th>
                        </tr>
                        <tr>
                            <td>Mr.Baca Alemayehu</td>
                            <td>civic</td>
                            <td>2021</td>

                        </tr>
                        <tr>
                            <td>Mr.Hanibal Sahilewu </td>
                            <td>Chemistry</td>
                            <td>2022</td>

                        </tr>
                        <tr>
                            <td>Mrs.Mahilet Adane</td>
                            <td>ICT</td>
                            <td>2019</td>
                        </tr>
                        <tr>
                            <td>Mr.Naod Dereje</td>
                            <td>English</td>
                            <td>2015</td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Section</th>
                        </tr>
                        <tr>
                            <td><img src="image/students.png" alt=""></td>
                            <td>Samson Tamire</td>
                            <td>10A</td>
                        </tr>
                        <tr>
                            <td><img src="image/students.png" alt=""></td>
                            <td>Girum Bonsa</td>
                            <td>10A</td>
                        </tr>
                        <tr>
                            <td><img src="image/students.png" alt=""></td>
                            <td>Efrem Hayal</td>
                            <td>10A</td>
                        </tr>
                        <tr>
                            <td><img src="image/students.png" alt=""></td>
                            <td>Kifle Kibrom</td>
                            <td>10A</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>