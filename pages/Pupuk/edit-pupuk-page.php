<?php 
  require '../../controllers/Pupuk/PupukController.php';
  $data = PupukController::detail($_GET['id']);
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
                            <div class="poppins-semibold" style="font-size: 18px; margin-bottom: 10px">EDIT PUPUK</div>
                            <div class="flex-col">
                                <form action="../../controllers/Pupuk/PupukController.php?action=update" method="POST">
                                    <div class="flex-col" style="gap: 7px">
                                        <label for="nama_pupuk" class="poppins-regular">Nama</label>
                                        <input type="text" name="nama_pupuk" id="nama_pupuk" value="<?= $data->nama_pupuk ?>">
                                        <label for="stok" class="poppins-regular">Stok</label>
                                        <input type="number" name="stok" id="stok" value="<?= $data->stok ?>">
                                        <label for="deskripsi" class="poppins-regular">Deskripsi</label>
                                        <input type="text" name="deskripsi" id="deskripsi" value="<?= $data->deskripsi ?>">
                                        <input type="hidden" value=<?= $data->id ?> name="id">
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
</body>
</html>