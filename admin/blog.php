<?php 
    require "inc/header.php";
?>

<div class="main-card mb-3 card">
    <div class="card-body">
        <!-- <h5 class="card-title">Grid</h5> -->
        <form id="publish_blog">
            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="title" cols="30" rows="5" placeholder="Enter a title"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group"><label for="exampleText"
                    class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <div id="summernote"></div>
                </div>
            </div>
            <div class="position-relative row ">
                <div class="col-lg-10 offset-lg-2 d-flex align-items-center">
                    <button type="submit" class="btn btn-secondary">Publish</button>
                    <div class="error_msg"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require "inc/footer.php"; ?>
