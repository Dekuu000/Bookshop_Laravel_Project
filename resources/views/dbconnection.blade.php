<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & My  Databse Connection</title>
</head>
<body>
    <div>
        <?php
                if(DB::connection()->getPDO()){
                    echo "Successfully Connected to Database ".DB::connection()->getDatabaseName();
                }
        ?>
    </div>
</body>
</html>