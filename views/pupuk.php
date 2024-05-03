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
            <?php include 'views/Components/Sidebar.php' ?>
            <div class="dashboard">
                <div class="say-welcome flex-row">
                    <div class="flex-col">
                        <div class="work-sans gradient-text text-3xl" style="font-size: 30px;">Welcome, User!</div>
                        <div class="poppins-light gradient-text">Here's your dashboard.</div>
                    </div>
                </div>
                <div class="dash-content">
                    <div class="flex-col">
                        <div class="flex-col">
                            <div class="poppins-semibold" style="font-size: 18px; margin-bottom: 10px">TAMBAH PUPUK</div>
                            <div class="flex-col">
                                <form action="/Farmstock/pupuk" method="POST" enctype="multipart/form-data">
                                    <div class="flex-col" style="gap: 7px">
                                        <label for="nama_pupuk" class="poppins-regular">Nama</label>
                                        <input type="text" name="nama_pupuk" id="nama_pupuk" required>
                                        <label for="stok" class="poppins-regular">Stok</label>
                                        <input type="number" name="stok" id="stok" required>
                                        <label for="deskripsi" class="poppins-regular">Deskripsi</label>
                                        <input type="text" name="deskripsi" id="deskripsi" required>
                                        <label for="image" class="poppins-regular">Gambar Pupuk</label>
                                        <input type="file" name="image" id="image">
                                    </div>
                                    <button type="submit" class="submit-button">Tambah</button>
                                    <button type="reset" class="reset-button">Reset</button>
                                </form>
                            </div>
                        </div>
                        <div class="poppins-semibold" style="font-size: 18px; margin-top: 20px">DAFTAR PUPUK</div>
                        <div class="data-table">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar Pupuk</th>
                                    <th>Action</th>
                                </tr>
                                <?php if (count($data) === 0) : ?>
                                    <tr>
                                        <td colspan="6">Data kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <?php for ($i=0; $i < count($data); $i++) { ?>
                                    <tr>
                                        <td><?= (int)$i + 1 ?></td>
                                        <td><?= $data[$i]['nama_pupuk'] ?></td>
                                        <td><?= $data[$i]['stok'] ?></td>
                                        <td><?= $data[$i]['deskripsi'] ?></td>
                                        <td><img src="views/uploads/<?= $data[$i]['image']?>" alt="" class="image-list"></td>
                                        <td>
                                            <a href="/Farmstock/pupukupdate/<?= $data[$i]['id']; ?>">
                                                <button class="edit-button">Edit</button>
                                            </a>
                                            <a href="/Farmstock/deletepupuk/<?= $data[$i]['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <button class="delete-button">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>