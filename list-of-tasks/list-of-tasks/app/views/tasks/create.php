//Creating an Entry

<?php include PATH . "partials/header.php" ?>
<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Create New Project</h2>

        <div class="mb-2">
            <label for="">Task Name</label>
            <input name="task_name" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Description</label>
            <input name="task_description" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Status</label>
            <input name="task_status" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Tasks Due</label>
            <input name="task_due" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>