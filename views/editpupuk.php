<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmstock | Dashboard</title>
    <link rel="stylesheet" href="/Farmstock/views/style/dash-style.css">
</head>
<body>
    <div class="poppins-regular">
        <div class="flex-row container">
            <?php include 'Components/Sidebar.php' ?>
            <div class="dashboard">
                <div class="say-welcome flex-row">
                    <div class="flex-col">
                        <div class="work-sans gradient-text" style="font-size: 30px">Welcome, User!</div>
                        <div class="poppins-light gradient-text">Here's your dashboard.</div>
                    </div>
                </div>
                <div class="dash-content">
                    <div class="flex-col">
                        <div class="flex-col">
                            <div class="poppins-semibold" style="font-size: 18px; margin-bottom: 10px">EDIT PUPUK</div>
                            <div class="flex-col">
                                <form action="/Farmstock/updatepupuk/<?= $data[0]['id'] ?>" method="POST">
                                    <div class="flex-col" style="gap: 7px">
                                        <label for="nama_pupuk" class="poppins-regular">Nama</label>
                                        <input type="text" name="nama_pupuk" id="nama_pupuk" value="<?= $data[0]['nama_pupuk'] ?>">
                                        <label for="stok" class="poppins-regular">Stok</label>
                                        <input type="number" name="stok" id="stok" value="<?= $data[0]['stok'] ?>">
                                        <label for="deskripsi" class="poppins-regular">Deskripsi</label>
                                        <input type="text" name="deskripsi" id="deskripsi" value="<?= $data[0]['deskripsi'] ?>">
                                        <label for="image" class="poppins-regular">Gambar Pupuk</label>
                                        <input class="input" name="image" id="image" type="file" value="<?= $data[0]['image'] ?>">
                                        <p>Preview gambar : </p>
                                        <img id="img-preview" width="150" src="/Farmstock/views/uploads/<?= $data[0]['image'] ?>" alt="">
                                        <input type="hidden" value=<?= $data[0]['id'] ?> name="id">
                                    </div>
                                    <button type="submit" class="submit-button">Update</button>
                                    <button type="reset" class="reset-button">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const input_gambar = document.querySelector('#image')
    const preview = document.querySelector('#img-preview')

    input_gambar.addEventListener('change', () => {
        if (input_gambar.files && input_gambar.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            preview.src = e.target.result;
        }
            reader.readAsDataURL(input_gambar.files[0]);
        }
    })
    </script>
</body>
</html>