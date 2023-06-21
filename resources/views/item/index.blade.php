<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Returned Items</title>
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
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
    <div class="container-fluid col-10 ">
    <h1 class="mt-4">Returned Items</h1>
    <hr>
    <table class="table table-striped table-dark">
        <tr>
            <th>ID</th>
            <th>Agency Name</th>
            <th>Address</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>quantity</th>
            <th></th>
        </tr>

        @foreach($items as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->agency_name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->item_code}}</td>
            <td>{{$item->item_name}}</td>
            <td>{{$item->qty}}</td>
            <td><a href="{{route('item.edit', ['item' => $item])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>

        @endforeach
    </table>
    </div>
</body>
</html>