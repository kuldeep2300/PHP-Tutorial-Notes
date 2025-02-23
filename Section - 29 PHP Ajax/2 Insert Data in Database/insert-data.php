<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax</title>
    <style>
        /* body {
            position: relative;
        }
 */
        #success-message {
            background: #DEF1D8;
            color: green;
            padding: 10px;
            margin: 10px;
            position: absolute;
            left: 355px;
            top: 10px;  
        }

        #error-message {
            background: #EFDCDD;
            color: red;
            padding: 10px;
            margin: 10px;
            position: absolute;
            left: 355px;
            top: 10px;
        }
    </style>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                    First Name : <input type="text" name="fname" id="fname"><br><br>
                    Last Name : <input type="text" name="lname" id="lname"><br><br>
                    <input type="submit" id="save-button" value="Save"><br><br>
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">

            </td>
        </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#success-message, #error-message').hide(); // Hide success and error messages on page load
            function loadTable() {
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();

            $('#save-button').on('click', function(e) {
                e.preventDefault();
                var fname = $('#fname').val();
                var lname = $('#lname').val();


                if (fname == "" || lname == "") {
                    $('#error-message').html("All Fields are required !").slideDown();
                    $('#success-message').slideUp();
                } else {
                    $.ajax({
                        url: "ajax-insert.php",
                        type: "POST",
                        data: {
                            first_name: fname,
                            last_name: lname
                        },
                        success: function(data) {
                            if (data) {
                                loadTable();
                                $('#addForm').trigger("reset");
                                $('#success-message').html("Data Inserted Successfully").slideDown();
                                $('#error-message').slideUp();
                            } else {
                                $('#error-message').html("Can't Save Data!").slideDown();
                                $('#success-message').slideUp();
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>