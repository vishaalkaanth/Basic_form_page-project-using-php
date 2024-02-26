<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iUNZMOYVBp1MZfLEFfGEQtxlBD+8eTAd9gwnfOjCCb5qWdD3/fSL68I1d" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border">S.No</th>
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Email</th>
                        <th scope="col" class="border">Mobile</th>
                        <th scope="col" class="border">Gender</th>
                        <th scope="col" class="border">Education</th>
                        <th scope="col" class="border">Hobbies</th>
                        <th scope="col" class="border">Description</th>
                        <th scope="col" class="border">Address</th>
                        <th scope="col" class="border">Image</th>
                        <th scope="col" class="border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sno = 1;
                    foreach ($users_data as $user_data) { ?>
                        <tr>
                            <th scope="row"><?= $sno ?></th>
                            <td class="border"><?= $user_data['Name'] ?></td>
                            <td class="border"><?= $user_data['Email'] ?></td>
                            <td class="border"><?= $user_data['Mobile'] ?></td>
                            <td class="border"><?= $user_data['Gender'] ?></td>
                            <td class="border"><?= $user_data['Education'] ?></td>
                            <td class="border"><?= $user_data['Hobbies'] ?></td>
                            <td class="border"><?= $user_data['Description'] ?></td>
                            <td class="border"><?= $user_data['Address'] ?></td>
                            <td class="border">
                                <img src="<?= base_url() . 'assets/profile_images/' . $user_data['Imagefile']; ?>" alt="Profile Photo" width="80px" height="auto">
                            </td>
                            <td class="border">
                                <a href="<?= base_url('edituserprofile/' . $user_data['id']); ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('userprofile/' . $user_data['id']); ?>" title="View"><i class="fa fa-eye"></i></a>
                                <a href="<?= base_url('reportpage/' . $user_data['id']); ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('additional_details/' . $user_data['id']); ?>" title="Add"><i class="fa fa-plus"></i></a>

                            </td>
                        </tr>
                    <?php
                        $sno++;
                    } ?>
                </tbody>


            </table>
        </div>
    </div>
</body>

</html>