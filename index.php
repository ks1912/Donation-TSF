<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DONATION Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        .container { margin-top: 100px; }
        .list-group-item { padding: 5px; border: 0px; }
        .price { font-size: 72px; }
        .currency {
            font-size:25px;
            position: relative;
            top: -30px;
        }
        .card { width: 350px; }
        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>$$<span class="currency">$</span></h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                            DONATION
                        </div>
                        <ul class="list-group">
                            
                            <li class="list-group-item">WHY TO DONATE ?</li>
                            <li class="list-group-item">FOR HELPING HOMELESS PEOPLE</li>
                            <li class="list-group-item">FOR HELPING OLD AGE HOME</li>
                            <li class="list-group-item">FOR HELPING ORPHANAGES</li>
                            <li class="list-group-item">AND MANY MORE...</li>
                        </ul>
                        <br><br>
                       <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
                       <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
