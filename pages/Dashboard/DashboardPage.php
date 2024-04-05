<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmstock | Dashboard</title>
    <link rel="stylesheet" href="../../style/dash-style.css">
</head>
<body>
    <div class="poppins-regular">
        <div class="flex-row container">
            <?php include('./../Components/Sidebar.php');?>
            <div class="dashboard">
                <div class="say-welcome flex-row">
                    <div class="flex-col">
                        <div class="work-sans gradient-text" style="font-size: 30px">Welcome, User!</div>
                        <div class="poppins-light gradient-text">Here's your dashboard.</div>
                    </div>
                </div>
                <div class="dash-content">
                    <div class="flex-col">
                        <div class="poppins-semibold" style="font-size: 15px; margin-bottom: 10px">Overview</div>
                        <div class="grid">
                            <div class="card">
                                <div class="poppins-regular" style="font-size: 15px">Total Pupuk</div>
                                <div class="poppins-semibold" style="font-size: 20px">11</div>
                            </div>
                            <div class="card">
                                <div class="poppins-regular" style="font-size: 15px">Total Hasil Pertanian</div>
                                <div class="poppins-semibold" style="font-size: 20px">11</div>
                            </div>
                            <div class="card">
                                <div class="poppins-regular" style="font-size: 15px">Total Supplier</div>
                                <div class="poppins-semibold" style="font-size: 20px">11</div>
                            </div>
                            <div class="card">
                                <div class="poppins-regular" style="font-size: 15px">Total Supplier</div>
                                <div class="poppins-semibold" style="font-size: 20px">11</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>