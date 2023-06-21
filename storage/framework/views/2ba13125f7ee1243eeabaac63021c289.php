<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add a item</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NetGateLanka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
           
        </div>
      </nav>
    <div class="container mt-5 justify-center items-center flex container-fluid">
        <div class="col-sm-10 col-lg-4 flex" style="padding-left: auto; padding-right: auto;" >
            <form method="post" action="<?php echo e(route('item.store')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <div class="mb-3">
                  <label for="name" class="form-label">Agency Name</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address">
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date">
                  </div>
                  <div class="mb-3">
                    <label for="item_code" class="form-label">Item Code</label>
                    <input type="text" class="form-control" id="item_code">
                  </div>
                  <div class="mb-3">
                    <label for="item_name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="irem_name">
                  </div>
                  <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="qty">
                  </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /Users/apple/devalopment/laravel/agency-app/resources/views/item/create.blade.php ENDPATH**/ ?>