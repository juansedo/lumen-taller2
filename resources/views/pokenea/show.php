<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        .scale-up-top{animation:scale-up-top .4s cubic-bezier(.39,.575,.565,1.000) both}
        @keyframes scale-up-top{0%{transform:scale(.5);transform-origin:50% 0}100%{transform:scale(1);transform-origin:50% 0}}

    </style>
    <title>A random Pokenea</title>
</head>
<body>
    <div class="scale-up-top" style="display: flex; font-family: sans-serif; margin: 2rem; padding: 0.5rem; background-color: rgb(250,250,250); border-radius: 10px; box-shadow: 0px 1px 20px 1px rgb(0,0,0);">
        <div style="position: relative; width: 40%;">
            <img src="<?php echo $pokenea['image']; ?>" alt="<?php echo $pokenea['name']; ?>" width="100%" />
        </div>
        <div style="display flex; flex-direction: column; padding: 0rem 2rem;">
            <p style="font-family: 'Dancing Script', sans-serif; font-size: 30px; font-weight: 700;">
                <?php echo $pokenea['name']; ?>
            </p>
            <p>
                <?php echo $pokenea['phrase']; ?>
            </p>
            <i>
                <?php echo $docker_container; ?>
            </i>
        </div>
    </div>
</body>
</html>
