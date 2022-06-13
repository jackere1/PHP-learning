<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZg_vGv1FN6bldcM3v2MMbPCbEsNuQL82PXwFol1pYghexc1PLLdX3Htypb2_YJnmLOvo&usqp=CAU"/>
    <title>Respond</title>
</head>
<body>
    <h1>
    <?php
        echo "Welcome ${_POST['input1']}. YOUR password is ${_POST['pass']}.";
    ?>
    </h1>
</body>
</html>