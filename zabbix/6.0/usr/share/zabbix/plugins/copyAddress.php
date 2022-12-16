<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style> body {background-color: black;} </style>
</head>
<body>

<div class="modal fade" id="copyIP" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control" id="ipAddress" name="ipAddress" value="<?=$host['ip'];?>" readonly>
                    <button class="btn btn-danger" id="copyAddress" name="copyAddress"><i class="fa-solid fa-copy"></i></button>
                </div>

                <div class="mt-1 text-center">
                    <span id="textAlert"></span>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="plugins/copyAddress.js"> </script>

</body>
</html>