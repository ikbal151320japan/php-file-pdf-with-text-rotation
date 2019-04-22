<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HTML To PDF Converter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            .rot
                {
                    -webkit-transform: rotate(-90deg); 
                    -moz-transform: rotate(-90deg);    
                    width:100px;
                    height: 100px;
                    text-align: center;
                    position: relative;
                    left:30%;
                }
                th
                {
                    text-align: center;
                }
        </style>
    </head>
    <body>
        <div class="container" style='margin-top:10px;'>
        <a class='btn btn-primary bnt-sm' href='print_pdf.php' target='_blank'>PRINT PDF</a>
            <table class="table table-striped table-bordered" style='margin-top:10px;'>
                <thead>
                    <tr>
                        <th colspan='2'>
                            <div class="rot" style="-webkit-transform: rotate(-90deg); position: relative;top: 0%;">
                                <div align='center'>Daffodil International University</div>
                            </div>
                        </th>
                        <th rowspan='2'>Lastname</th>
                        <th rowspan='2'>
                            <div class="rot" style="-webkit-transform: rotate(-90deg); position: relative;top: 0%;">Daffodil International University</div>
                        </th>
                    </tr>
                    <tr>
                        <th>asdsad</th>
                        <th>asdsad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
