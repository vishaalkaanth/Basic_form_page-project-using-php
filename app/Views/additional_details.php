<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/form.css"); ?>">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="container w-15 p-4 my-5 border" id="profile">
                    <center>
                        <h2>FAMILY DETAILS</h2>
                    </center><br>
                    <form action="<?= site_url('reportpage'); ?>" method="post" onsubmit="return validateForm()">
                        <div class="form-group mb-3">
                            <span id="general_error" class="error"></span>
                        </div>

                        <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                        <div class="form-group mb-3">
                            <h5>Father's Name:</h5>
                            <input type="text" name="father_name" class="form-control" id="father_name">
                            <span id="father_name_error" class="error"></span>
                        </div>

                        <div class="form-group mb-3">
                            <h5>Mother's Name:</h5>
                            <input type="text" name="mother_name" class="form-control" id="mother_name">
                            <span id="mother_name_error" class="error"></span>
                        </div>

                        <div class="form-group mb-3">
                            <h5>Brother's Name</h5>
                            <input type="text" name="brother_name" class="form-control" id="brother_name">
                            <span id="brother_name_error" class="error"></span>
                        </div>

                        <div class="form-group mb-3">
                            <h5>Sister's Name</h5>
                            <input type="text" name="sister_name" class="form-control" id="sister_name">
                            <span id="sister_name_error" class="error"></span>
                        </div>

                        <div class="form-group mb-3">
                            <h5>Marital Status</h5>
                            <input class="form-check-input" type="radio" name="maritalStatus" value="single" onclick="showSpouseNameInput()">
                            <label class="form-check-label" for="maritalStatus1">Single</label>

                            <input class="form-check-input" type="radio" name="maritalStatus" value="married" onclick="showSpouseNameInput()">
                            <label class="form-check-label" for="maritalStatus">Married</label>
                        </div>

                        <div class="form-group mb-3 spouse-name" id="spouseNameInput">
                            <label for="spouseName">Spouse Name</label>
                            <input type="text" class="form-control" name="spouse_name">
                        </div>


                        <div class="form-group mb-3">
                            <center>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </center>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>

        function validateForm() {
            var fatherName = document.getElementById('father_name').value;
            var motherName = document.getElementById('mother_name').value;
            var brotherName = document.getElementById('brother_name').value;
            var sisterName = document.getElementById('sister_name').value;

            // Reset previous error messages
            document.getElementById('general_error').innerText = "";
            document.getElementById('father_name_error').innerText = "";
            document.getElementById('mother_name_error').innerText = "";
            document.getElementById('brother_name_error').innerText = "";
            document.getElementById('sister_name_error').innerText = "";

            
            if (fatherName === "" || motherName === "" || brotherName === "" || sisterName === "") {
                document.getElementById('general_error').innerText = "All fields are required";
                return false;
            }

            return true;
        }
    </script>

    <script>
        function showSpouseNameInput() {
            var marriedRadio = document.querySelector('input[name="maritalStatus"][value="married"]');
            var spouseNameInput = document.getElementById('spouseNameInput');

            if (marriedRadio.checked) {
                spouseNameInput.style.display = 'block';
            } else {
                spouseNameInput.style.display = 'none';
            }
        }
    </script>

</body>

</html>