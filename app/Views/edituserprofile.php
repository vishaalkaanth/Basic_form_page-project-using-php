<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/css/form.css"); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="container w-15 p-4 my-5 border text-black" id="profile">
                    <center>
                        <h2>EDIT USER PROFILE</h2>
                    </center><br>

                    <form action="<?= base_url('updateprofile') ?>" method="post" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" name="id" value="<?= $user_data['id'] ?>">

                        <div class="mb-3">
                            <b> <label for="name" class="form-label text-black">Name:</label></b>
                            <input type="text" class="form-control" name="Name" value="<?= $user_data['Name'] ?>">
                        </div>

                        <div class="mb-3">
                            <b> <label for="email" class="form-label text-black">Email:</label></b>
                            <input type="text" class="form-control" name="Email" value="<?= $user_data['Email'] ?>">
                        </div>

                        <div class="mb-3">
                            <b> <label for="mobile" class="form-label text-black">Mobile:</label></b>
                            <input type="text" class="form-control" name="Mobile" value="<?= $user_data['Mobile'] ?>">
                        </div>

                        <div class="mb-3">
                            <b>
                                <p>Gender:</p>
                            </b>
                            <input class="form-check-input" type="radio" name="Gender" value="male" <?= ($user_data['Gender'] == 'male') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="male">Male</label><br>
                            <input class="form-check-input" type="radio" name="Gender" value="female" <?= ($user_data['Gender'] == 'female') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="female">Female</label><br>
                        </div>

                        <div class="mb-3">
                            <b>
                                <p> <label for="multiselect" id="select">Select Education:</label> </p>
                            </b>
                            <select id="multiselect" class="form-control" name="Education[]" multiple="multiple">
                                <option value="10th" <?= in_array('10th', explode(',', $user_data['Education'])) ? 'selected' : ''; ?>>10th</option>
                                <option value="12th" <?= in_array('12th', explode(',', $user_data['Education'])) ? 'selected' : ''; ?>>12th</option>
                                <option value="Diploma" <?= in_array('Diploma', explode(',', $user_data['Education'])) ? 'selected' : ''; ?>>Diploma</option>
                                <option value="UG" <?= in_array('UG', explode(',', $user_data['Education'])) ? 'selected' : ''; ?>>UG</option>
                                <option value="PG" <?= in_array('PG', explode(',', $user_data['Education'])) ? 'selected' : ''; ?>>PG</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <b>
                                <p>Hobbies:</p>
                                
                            </b>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Football" <?= in_array('Football', explode(',', $user_data['Hobbies'])) ? 'checked' : ''; ?>>
                                Football
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Cricket" <?= in_array('Cricket', explode(',', $user_data['Hobbies'])) ? 'checked' : ''; ?>>
                                Cricket
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Tennis" <?= in_array('Tennis', explode(',', $user_data['Hobbies'])) ? 'checked' : ''; ?>>
                                Tennis
                            </label>
                        </div>

                        <div class="mb-3">
                            <b> <label for="description" class="form-label text-black">Description:</label></b>
                            <textarea class="form-control" name="Description" rows="4"><?= $user_data['Description'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <b> <label for="address" class="form-label text-black">Address:</label></b>
                            <textarea class="form-control" name="Address" rows="4"><?= $user_data['Address'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <b> <label for="Profilephoto" class="form-label text-black">Profile Photo:</label><br> </b>
                            <?php if ($user_data['Imagefile']) : ?>
                                <img src="<?= base_url('assets/profile_images/' . $user_data['Imagefile']); ?>" alt="Profile Photo"><br>
                                <div class="col-md-10 text-left">
                                    <a href="<?= base_url('assets/profile_images/' . $user_data['Imagefile']); ?>" download>
                                        <br> <button type="button" class="text-light bg-dark "><i class="fa fa-download"></i>
                                            Download Profile Photo
                                        </button>
                                    </a>
                                </div>
                            <?php else : ?>
                                <span>No photo uploaded</span>
                            <?php endif; ?>
                            <br> <input type="file" class="form-control" id="Profilephoto" name="Imagefile">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#multiselect').select2();
        });
    </script>
</body>

</html>