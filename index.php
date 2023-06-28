<?php 
    require_once './app.php';
    include_once  './templates/header.php'
?>
<main>
    <div class="container-fluid">
        <div class="row-12 d-flex justify-content-center">
            <div class="col-6">
                <form method="post" action="./modals/controllers/post_data.php">
                      <div class="mb-3">
                        <label for="camper" class="form-label">Camper:</label>
                        <input type="text" class="form-control" id="camper" name="nombrecamper" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                      </div>
                      <button type="submit" class="btn btn-success fs-3 w-100 border-black">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php 
    include_once  './templates/footer.php';
?>