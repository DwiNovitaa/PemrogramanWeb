<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--ajax dengan jquery-->
</head>
<body>
    <div class="nama"></div>
    <div class="email"></div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            let urlapi="https://webpro.ptov.my.id/api/curduser.php?aksi=get";

            $.ajax({
                url: urlapi,
                success: function(dta,status,xhr){
                    console.log(dta);
                    $(".nama").html(dta.isi[1][0]);
                    $(".email").html(dta.isi[1][1]);
                },
                error: function(xhr,status,ert){

                }
            });
        });
    </script>
</body>
</html>