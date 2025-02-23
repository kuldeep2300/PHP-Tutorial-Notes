<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax</title>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
              
            </td>
        </tr>
    </table>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#load-button').on('click', function() {
                $.ajax({
                    url : 'ajax-load.php',
                    type : "POST",
                    success : function(data) {
                        $('#table-data').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>