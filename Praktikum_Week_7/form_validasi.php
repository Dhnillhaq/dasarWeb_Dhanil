<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <h1>Form input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red"></span>
        <br>
        
        <label for="email">Password: </label>
        <input type="password" id="pw" name="pw">
        <span id="pw-error" style="color: red"></span>
        <br>
        
        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red"></span>
        <br>

        <input type="submit" value="Submit">

        <div id="hasil"></div>


    </form>


    <!--Script Validasi menggunakan jquery biasa 
    <!-- <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (!valid) {
                    event.preventDefault(); // Hentikan pengiriman form jika validasi gagal
                }
            });
        });

    </script> -->
    <!--Script Validasi menggunakan Ajax  -->
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();

                var formData = $("#myForm").serialize();

                $.ajax({
                    url:"proses_validasi.php",
                    type:"post",
                    data:formData,
                    
                    success:function(response){
                      $("#hasil").html(response);
                    }
                })
            })
        })
    </script>

</body>

</html>