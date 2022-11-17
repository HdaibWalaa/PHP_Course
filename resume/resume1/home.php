<?php
require './header.php';
include './includes/env.php';
require './function.php'
?>
<div class='head'>
    <img src="img/me.JPG" alt="personalphoto" id="phpto">
    <h1><?= $FullName; ?></h1>
    <h4><?= $profition; ?></h4>
</div>
<hr>
<div class='page'>
    <div class='left-col'>
        <h1>ABOUT ME</h1>
        <p>Creative and technical web development professional with the ability to design websites professionally and use programming languages efficiently, looking for a position where I can enhance my knowledge of design principles and grow with the
            organization.
        </p>
        <h1>PERSONAL INFORMATION</h1>
        <ul>
            <li>Date of birth:14/01/2000</li>
            <li>Marital state: single</li>
            <li>Gender: Female</li>
            <li>Nationality:Jordanian</li>
        </ul>
        <h1>TRAINING</h1>
        <ul>
            <li>CBMIS - 7/June/2022 - until now</li>
        </ul>
        <h1>LANGUAGE</h1>
        <ul>
            <li><?= $LANGUAGE; ?></li>
            <li>English:Fluent</li>
        </ul>
        <h1>CONTACT</h1>

        <div class="contant">
            <p> <img src="img/phone.png" alt="phone"><?= $phone; ?></p>
            <p> <img src="img/email.png" alt="email"><?= $email; ?></p>
            <p><img src="img/linkedin.png" alt="linkedin"><a href="https://www.linkedin.com/in/walaa-hdaib-3911a317b/">LinkedIn</a></p>
            <p><img src="img/github.webp" alt="linkedin"><a href="https://github.com/HdaibWalaa">Github</a></p>
        </div>
    </div>
    <div class='right-col'>
        <div class="inner">

            <h1>EDUCATION</h1>
            <h4>University of Jordan</h4>
            <p>Bachelor's degree in Computer Science August 2018 - June 2022
            <ul>
                <li>Graduation project <a href="http://ec2-18-221-175-154.us-east-2.compute.amazonaws.com:3000/">(Psychological I HeaIth website)</a></li>
            </ul>
            </p>

            <h1>Certifications and Licenses</h1>
            <ul>
                <li>MVC Asp .NET 6 core</li>
                <li>Data structure and algorithm</li>
            </ul>
            <h1>SKILLS</h1>
            <ul>
                <li><?= $SKILLS; ?></li>
                <li>CSS</li>
                <li>JAVA SCRIPT</li>
                <li>BOOTSTRABE</li>
                <li>ASP.NET Core</li>
                <li>MVC</li>
                <li>C++</li>
                <li>C#</li>
                <li>Python</li>
                <li>UI</li>
                <li>MongoDB</li>
                <li>Mysql</li>
                <li>Nodejs</li>
                <li>GraphQl</li>
                <li>Expressjs</li>
            </ul>
        </div>
    </div>
</div>
</body>