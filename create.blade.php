<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="height: 100vh">

    <div class="position-absolute top-50 start-50 translate-middle" style="width: 600px">

        <div class="text-center">
            <h4>Shopping Cart</h4>
        </div>

        <hr>

        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <div class="d-flex align-items-center gap-3">
                <input name="item" type="text" class="form-control p-2 border rounded-0 fs-6" placeholder="e.g Botol">
                <button type="submit" class="p-2 border rounded-0 bg-white fs-6"><i class="bi bi-bag-plus-fill"></i></button>
            </div>
        </form>

        <hr>

        <div class="d-grid gap-3">
            <table class="table">
                <thead>
                    <tr>
                        <th class="fw-normal p-3">ID</th>
                        <th class="fw-normal p-3 w-100">ITEM</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $data)
                        <tr>
                            <td class="p-3">{{ $data->id }}</td>
                            <td class="p-3">{{ $data->item }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
