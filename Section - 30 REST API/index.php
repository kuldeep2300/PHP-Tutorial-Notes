<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Ajax & JSON</title>
    <style>
        table, tr, th {
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="main">
        <div id="header">
            <h1>PHP with Ajax & JSON</h1>
        </div>
        <div id="load-data">
            <table id="load-table" border="1" cellpadding="10px" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        //? This is using $.ajax() function
        $.ajax({
            url: "01_fetch-json.php",
            type: "POST",
            data: {
                id: 5
            }, // To see a particular id data use only this line.
            dataType: "JSON",
            success: function(data) {
                $.each(data, function(key, value) {
                    $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.student_name + "</td><td>" + value.age + "</td><td>" + value.city + "</td></tr>");
                })
            }
        });

        //? This is using $.getJSON
        /* $.getJSON(
            "01_fetch-json.php",
            function(data) {
                $.each(data, function(key, value) {
                    $("#load-data").append(value.id + " " + value.student_name + " " + value.age + " " + value.city + "<br>");
                })
            }
        ); */
    </script>
</body>

</html>