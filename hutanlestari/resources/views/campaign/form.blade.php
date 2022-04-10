<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Campaign</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="container">
            <h2 class="text-center text-success my-5">
                Form Campaign
            </h2>
            
            <div class="card rounded shadow-sm bg-card">
                <div class="card-body p-5">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="nama">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc">Description</label>
                            <textarea name="desc" class="form-control" style="height: 130px"> </textarea>
                        </div>

                        <div class="form-group mb-3 p-2">
                            <label for="desc">Type</label>
                            <div class="form-check ml-2">
                                <input class="form-check-input" type="checkbox" name="donasi" value="1" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Donasi</label>
                            </div>
                            <div class="form-check ml-2">
                                <input class="form-check-input" type="checkbox" name="volunteer" value="1" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Volunteer</label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc">Start Date</label>
                            <input type="date" name="startdate" class="form-control">
                        </div>

                        <p class="mb-3 mt-2 text-black-50 text-center">Until</p>

                        <div class="form-group mb-3">
                            <label for="desc">End Date</label>
                            <input type="date" name="enddate" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc">Target</label>
                            <input type="number" name="target" class="form-control">
                        </div>

                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>

                        <button class="btn btn-success w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>