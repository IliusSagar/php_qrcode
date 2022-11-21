<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>

</head>
<body>

    <div class="container">
        <div class="table-responsive"><br><br>
            <h3 align="center">QR Generation Form</h3><br><br><br>

            <div class="card" style="padding: 10px;">
                <form action="qrcode.php" method="post">

                <div class="form-group">
                    <label><b>QR Text</b></label>
                    <input type="text" name="qrtext" id="qrtext" placeholder="Enter QR Text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control mt-2">
                </div> <!--  form-group -->

                <div class="form-group mt-2">
                    <input type="submit" name="sbt-btn" value="QR Generate" class="btn btn-success">
                </div>

                </form>
            </div> <!--  box -->
        </div> <!--  table-responsive -->
    </div> <!--  container -->
    
</body>
</html>