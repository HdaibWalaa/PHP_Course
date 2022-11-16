<?php
require './header.php';
include './includes/env.php'
?>
<div class="container">
    <form action="./home.php" method="POST" class="d-flex flex-column justify-content-center">
        <legend>FILL YOUR RESUME:</legend>
        <section class=" mb-3 ">
            <div class="mb-3">
                <label for="PHOTO" class="form-label">PHOTO</label>
                <input type="file" id="FULLNAME" class="form-control">
            </div>
            <div class="mb-3">
                <label for="FULLNAME" class="form-label">FULL NAME</label>
                <input type="text" id="FULLNAME" class="form-control" placeholder="your full name">
            </div>
            <div class="mb-3">
                <label for="major" class="form-label">profition</label>
                <input type="text" id="major" class="form-control" placeholder="your profition">
            </div>
            <div class="mb-3">
                <label for="about" class="form-label">ABOUT</label>
                <textarea id="about" name="about" class="form-control" placeholder="About me" rows="4" cols="50"></textarea>
            </div>
        </section>
        <section class="mb-3 ">
            <h3>Presonal information:</h1>
                <div class="mb-3">
                    <label for="DOB" class="form-label">DOB</label>
                    <input type="date" id="DOB" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="male female">Gender</label><br>
                    <input type="radio" id="male" value="male" name="gender">
                    <label for="male">male</label>
                    <input type="radio" id="female" value="female" name="gender">
                    <label for="female">female</label>
                </div>
                <div class="mb-3">
                    <label for="single married">Marital state</label><br>
                    <input type="radio" id="single" value="single" name="Marital state">
                    <label for="single">single</label>
                    <input type="radio" id="married" value="married" name="Marital state">
                    <label for="married">married</label>
                </div>
                <div class="mb-3">
                    <label for="Nationality" class="form-label">Nationality</label>
                    <input type="text" id="Nationality" class="form-control" placeholder="Your Nationality">
                </div>
        </section>
        <section>
            <h3>Education:</h3>
            <div class="input-group mb-3">
                <input type="text" id="edu" class="form-control" placeholder="education" aria-label="education" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#10010</button>
            </div>
        </section>
        <section>
            <h3>Certifications and Licenses:</h3>
            <div class="input-group mb-3">
                <input type="text" id="edu" class="form-control" placeholder="Certifications a n d Licenses" aria-label="Certifications a n d Licenses" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#10010</button>
            </div>
        </section>
        <section>
            <h3>TRAINING:</h3>
            <div class="input-group mb-3">
                <input type="text" id="edu" class="form-control" placeholder="TRAINING" aria-label="TRAINING" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#10010</button>
            </div>
        </section>
        <section>
            <h3>LANGUAGE:</h3>
            <div class="input-group mb-3">
                <input type="text" id="edu" class="form-control" placeholder="LANGUAGE" aria-label="LANGUAGE" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#10010</button>
            </div>
        </section>
        <section>
            <h3>SKILLS:</h3>
            <div class="input-group mb-3">
                <input type="text" id="edu" class="form-control" placeholder="SKILLS" aria-label="SKILLS" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#10010</button>
            </div>
        </section>
        <section>
            <h3>CONTACT:</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label>
                <input type="text" id="number" class="form-control" placeholder="your phone number">
            </div>
        </section>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php require './footer.php';
?>