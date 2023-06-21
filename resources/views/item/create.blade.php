<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />

    <title>Add a item</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">NetGateLanka</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="container mt-5 justify-center items-center flex container-fluid"
    >
    <h1 class="col-11 col-md-4 text-center" >Insert</h1>
    <div class="col-11 col-md-4">
      @if($errors->any())

      <ul>

        @foreach($errors->all() as $error)

          <li>
            <div class="alert alert-danger" role="alert">
              {{$error}}
            </div>
          </li>

        @endforeach
      </ul>

      @endif
    </div>
      <div
        class="col-11 col-md-4 flex position-absolute top-50 start-50 translate-middle" >
        <form method="post" action="{{route('item.store')}}">
          @csrf @method('post')
          <div class="mb-3">
            <label for="agency_name" class="form-label">Agency Name</label>
            <input
              type="text"
              class="form-control"
              id="agency_name"
              name="agency_name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              name="address"
              required
            />
          </div>
          <div class="mb-3">
            <label for="item_code" class="form-label">Item Code</label>
            <input
              type="text"
              class="form-control"
              id="item_code"
              name="item_code"
              required
            />
          </div>
          <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="qty" name="qty" required/>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
