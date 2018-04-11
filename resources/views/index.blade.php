<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Unique Code </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            #uc {
                margin-top: 25%; 
            }

            #iUC {
                text-align: : center;
                color: grey;
                background: white;
                font-size: 15px; 
            }

            #pUC {
                text-align: : center; 
                color: grey;
                font-size: 24px; 
            }
        </style>
    </head>
    <body>
        <div id="uc" class="container" align="center">
            <h2 id="pUC">Search Unique Code</h2><br  />
            <form method="post" action="/AMS/public/search">
                <input id="iUC" type="text" name="uniqueCode" placeholder="Unique Code">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn" value="Search">
            </form>
        </div>
    </body>
</html>