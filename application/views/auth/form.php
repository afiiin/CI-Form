
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
    <body>
    <div class="box">
        <div class="top">
            <div class="title">Daftar</div>
        </div>
        <div class="bottom">
            <form action="<?= base_url('auth/index'); ?>" method="POST">
            <div class="group">
                <label for="Name" class="bold">Nama</label>
                <input type="text" name="name" class="name" value="<?= set_value('name')?>"><br>
                <?= form_error('name', '<small class="name" style="color:red;">', '</small>', '<br>')?>
            </div>
            <div class="group">
                <label for="Email" class="bold">Email</label>
                <input type="text" name="email" class="email" value="<?= set_value('email')?>"><br>
                <?= form_error('email', '<small class="name" style="color:red;">', '</small>', '<br>')?>
            </div>
            <div class="Gender">
                <h4>Gender</h4>
                <input type="radio" name="gender" class="radio" value="Male">
                <label>Male</label>
                <input type="radio" name="gender" class="radio" value="Female">
                <label>Female<label><br>
                <?= form_error('gender', '<small class="name" style="color:red;">', '</small>', '<br>')?>
            </div>
            <div class="kota">
                <h4>Kota</h4>
                <select name="kota" class="combo">
                    <option value="Solo">Solo</option>
                    <option value="Karanganyar">Karanganyar</option>
                    <option value="Sukoharjo">Sukoharjo</option>
                    <option value="Sragen">Sragen</option>
                    <option value="Wonogiri">Wonogiri</option>
                </select><br>
                <?= form_error('kota', '<small class="name" style="color:red;">', '</small>', '<br>')?>
            </div>
            <div class="status">
            <h4>Status</h4>
                <input type="checkbox" name="status" value="Pelajar">
                <label>Pelajar</label>
                <input type="checkbox" name="status" value="Kerja">
                <label>Kerja</label>
                <input type="checkbox" name="status" value="Menikah">
                <label>Menikah</label><br>
                <?= form_error('status', '<small class="name" style="color:red;">', '</small>', '<br>')?>
            </div>
                <div class="kirim">
                    <button type="submit" value="Register" class="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    <html>