<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url("assets/css/form.css"); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
    <div class="container" style="margin-top: 2%; margin-bottom: 2%;">

        <div class="row">

            <div class="col-4 py-4">
                <div class="rounded mx-auto d-block">
                    <img src="https://papers.co/wallpaper/papers.co-no28-sea-tree-purple-sky-nature-29-wallpaper.jpg" alt="Dummy Image">
                </div>
                <div class="rounded mx-auto d-block" style="margin-top: 10%;">
                    <img src="https://c0.wallpaperflare.com/preview/894/78/555/sunrise-orange-sky-purple.jpg" alt="Dummy Image">
                </div>
            </div>

            <div class="col-8">
                <div class="justify-content-md-center">

                    <?php if (isset($validation)) { ?>
                        <div class="alert alert-warning" style="margin: 30px 0px;">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php } ?>

                    <div class="form shadow-cs rounded">
                        <div id="form1" class="py-5 rounded">
                            <center>
                                <h2>FORM PAGE</h2>
                            </center>
                        </div>

                        <div class="container w-15 px-4 py-2">

                            <form action="<?php echo base_url(); ?>submitForm" method="post" id=myform enctype="multipart/form-data">

                                <div class="row">

                                    <div class="col-6">
                                        <div class="px-3 py-2">
                                            <div class="mb-3">
                                                <h5>Name:</h5>
                                                <input type="text" name="Name" value="<?= set_value('Name') ?>" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <h5>Email:</h5>
                                                <input type="email" name="Email" id="email" value="<?= set_value('Email') ?>" class="form-control">

                                            </div>

                                            <div class=" mb-3">
                                                <h5>Mobile:</h5>
                                                <input type="text" name="Mobile" value="<?= set_value('Mobile') ?>" class="form-control">
                                            </div>

                                            <div class=" mb-3">
                                                <h5>Gender:</h5>
                                                <input class="form-check-input ms-2" type="radio" name="Gender" value="male" <?= (set_value('Gender') == 'male') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="male">Male</label>
                                                <input class="form-check-input ms-5" type="radio" name="Gender" value="female" <?= (set_value('Gender') == 'female') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>

                                            <div class=" mb-3">
                                                <h5> <label for="multiselect">Select Education:</label> </h5>
                                                <select id="multiselect" class="w-100" name="Education[]" multiple="multiple">

                                                    <option value="10th" <?= (in_array('10th', set_value('Education', []))) ? 'selected' : ''; ?>>10th</option>
                                                    <option value="12th" <?= (in_array('12th', set_value('Education', []))) ? 'selected' : ''; ?>>12th</option>
                                                    <option value="Diploma" <?= (in_array('Diploma', set_value('Education', []))) ? 'selected' : ''; ?>>Diploma</option>
                                                    <option value="UG" <?= (in_array('UG', set_value('Education', []))) ? 'selected' : ''; ?>>UG</option>
                                                    <option value="PG" <?= (in_array('PG', set_value('Education', []))) ? 'selected' : ''; ?>>PG</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="px-3 py-2">
                                            <div class="form-group mb-3">
                                                <h5>Hobbies:</h5>
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Football" <?= (in_array('Football', set_value('Hobbies', []))) ? 'checked' : ''; ?>>
                                                    Football
                                                </label>
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Cricket" <?= (in_array('Cricket', set_value('Hobbies', []))) ? 'checked' : ''; ?>>
                                                    Cricket
                                                </label>
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="Hobbies[]" value="Tennis" <?= (in_array('Tennis', set_value('Hobbies', []))) ? 'checked' : ''; ?>>
                                                    Tennis
                                                </label>
                                            </div>

                                            <div class="form-group mb-3">
                                                <h5>Description:</h5>
                                                <textarea name="Description" class="form-control" rows="2"><?= set_value('Description') ?></textarea>
                                            </div>

                                            <div class="form-group mb-5">
                                                <h5>Address:</h5>
                                                <textarea name="Address" class="form-control" rows="2"><?= set_value('Address') ?></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <h5> <label for="Profilephoto" class="form-label">Choose a profile photo:</label></h5>
                                                <input type="file" class="form-control" id="Profilephoto" name="Imagefile">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid px-3 py-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#multiselect').select2();
    });
</script>

</html>