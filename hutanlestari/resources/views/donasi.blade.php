<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  <div class="container-sm shadow-lg my-4 p-3">
    <div class="d-flex align-items-center justify-content-center">
        <h4 class="ml-3">donasi untuk campaign</h4>
    </div>
</div>
<form action="" method="post">
    @csrf
    @method('post')
    <div class="container-sm shadow-lg my-4 p-3">
        <h4 class="ml-3">Nominal Donasi</h4>
        <input type="number" name="nominal" class="form-control">
    </div>

    <div class="container-sm shadow-lg my-4 p-3">
        <h4 class="ml-3">Pesan Yang Ingin Di sampaikan</h4>
        <textarea name="pesan" class="form-control" placeholder="tulis dukungan anda disini">
        </textarea>
    </div>

    <div class="container-sm shadow-lg my-4 p-3">
      <button type="submit" class="btn btn-success w-100"> Donasikan </button>
    </div>

</form>
</body>
</html>