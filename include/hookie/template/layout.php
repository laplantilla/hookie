<!DOCTYPE html>
<html>
<head>
   <title><?php echo $title; ?></title>
   <style type="text/css">
        section {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            background-color: <?php echo $theme['bgcolor']; ?>;
            color: <?php echo $theme['text']; ?>;
            padding: 2%;
        }
   </style>
</head>
<body>

    <?php echo $header_content; ?>
    <?php echo $body_content; ?>
    <?php echo $footer_content; ?>

</body>
</html>