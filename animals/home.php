
<?php 
require './header.php';
include './includes/env.php'
?>
<div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center mb-5">Animals API App</h1>

        <div class="d-flex justify-content-center mb-5">
            <button id="refresh" class="btn btn-success">
                Refresh
            </button>
        </div>

        <div class="card m-auto" style="width: 18rem;">
            <img id="a-image" src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 id="a-name" class="card-title"></h5>
                <p id="a-diet" class="card-text"></p>
            </div>
            <ul id="a-data-list" class="list-group list-group-flush">
            </ul>
        </div>
    </div>

<?php require './footer.php';
?>