
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='css/style.css'  type="text/css">  
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <div id="main">
        @include('homes/header')
        @if (isset($hiragana))
            @include('hiragana')
        @else
           @include('homes/body')
        @endif
        @include('homes/footer')
    </div>

</body>
</html>