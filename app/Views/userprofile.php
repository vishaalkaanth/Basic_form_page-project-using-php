<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/form.css"); ?>">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">

                <a href="http://localhost:8080/reportpage" class="btn" id="edit" style="float:right">
                    Report <i class="fa"></i>
                </a>
                <div class="container w-15 p-4 my-5 border" id="profile">
                    <center>
                        <h2>USER PROFILE</h2>
                    </center><br>

                    <form>
                        <div style="width: 120px; display: inline-block;"><b>Name:</b></div> <?= $user_data['Name'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Email:</b></div> <?= $user_data['Email'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Mobile:</b></div> <?= $user_data['Mobile'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Gender:</b></div> <?= $user_data['Gender'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Education:</b></div> <?= $user_data['Education'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Hobbies:</b></div> <?= $user_data['Hobbies'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Description:</b></div> <?= $user_data['Description'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;"><b>Address:</b></div> <?= $user_data['Address'] ?><br>
                        <br>
                        <div style="width: 120px; display: inline-block;">
                            <b><label for="Profilephoto" class="form-label text-dark">Profile Photo:</label></b>
                        </div>
                        <img src="<?= base_url('assets/profile_images/' . $user_data['Imagefile']); ?>" alt="Profile Photo">
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>