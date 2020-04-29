<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= config('app.name','Lumen') ?></title>
    <link rel="stylesheet" href="<?= env('ASSET_URL') ?>/dist/app.css" />
</head>
<body>
    
    <div id="app">        
    </div>
    <script type="text/javascript"> 
    	var APP_ROOT = '/<?= env('APP_ROOT') ?>/';
        var APP_URL = '<?= env('APP_URL') ?>';
    </script>
    <script src="<?= env('ASSET_URL') ?>/dist/app.js"></script>
</body>
</html>