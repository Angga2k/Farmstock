<?php
    require_once("../../controller/Pupuk/PupukController.php");
    $controller = new PupukController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmstock | Dashboard</title>
    <link rel="stylesheet" href="../style/dash-style.css">
</head>
<body>
    <div class="poppins-regular">
        <div class="flex-row container">
            <?php include('../Components/Sidebar.php'); ?>
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
                            <div class="poppins-semibold" style="font-size: 18px; margin-bottom: 10px">TAMBAH PUPUK</div>
                            <div class="flex-col">
                                <form action="../../controller/Pupuk/insert.php" method="post">
                                    <div class="flex-col" style="gap: 7px">
                                        <label for="nama_pupuk" class="poppins-regular">Nama</label>
                                        <input type="text" name="nama_pupuk" id="nama_pupuk">
                                        <label for="stok" class="poppins-regular">Stok</label>
                                        <input type="number" name="stok" id="stok">
                                        <label for="deskripsi" class="poppins-regular">Deskripsi</label>
                                        <input type="text" name="deskripsi" id="deskripsi">
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
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($controller->select() as $key => $row) : ?>
                                <tr>
                                    <td><?= (int)$key + 1 ?></td>
                                    <td><?= $row['nama_pupuk'] ?></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td><?= $row['deskripsi'] ?></td>
                                    <td>
                                        <a href="">
                                            <button class="edit-button">Edit</button>
                                        </a>
                                        <button class="delete-button">Delete</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>