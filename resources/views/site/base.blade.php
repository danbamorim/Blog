<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
            h1 {
                color: #800000;
                text-align: center;
            }

            h2 {
                color: black;
            }

            h4 {
                color: black;
                text-align: center;
                font-size: 1.4em;
            }

            p { 
                text-align: center;
                font-size: 1.8em;
            }

            body {
                background-color: #f4f9fc;
            }
        </style>
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">

                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <h2><span class="fs-4">blog</span></h2>

                </a>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal"style="font-family: FreeMono, monospace">Poemas</h>
            </div>
        </header>
        </br>

        <h4 style="font-family: FreeMono, monospace">3/02/2022</h4> 
        </br>
        </br>
        @yield('conteudo')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>