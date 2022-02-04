<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Siswa</title>
</head>
<body>

    <h1 class="text-center" style="margin-top:150px;">Form Edit Siswa</h1>
    <div class="container">
    <div class="card card-body rounded position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
    <form action="<?php echo base_url('index.php/siswa/action_edit/'.$data['id']) ?>" method="post">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>" required><br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label><br>
        <input class="form-control" type="text" name="email" value="<?php echo $data['email'] ?>" required><br>
    </div>
    <div class="mb-3">
        <label class="form-label"for="">Password</label><br>
        <input class="form-control" type="password" id="pass" name="password" value="<?php echo $data['password'] ?>" required><br>
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Simpan</button><br>
    </div>
    </form>
    <a herf=" <?php echo base_url('index.php/siswa') ?> ">
    <div class="d-grip gap-2">
    </div>
    </a>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>