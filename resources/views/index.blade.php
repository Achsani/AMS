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
        <div class="container"  align="center" style="margin-top: 12%">
            <img src="/AMS/public/image/AMS-2.png" alt="AMS Logo" style="margin-bottom: 3%" width="200" height="150">
            <h2 id="pUC" style="color: black">Search Unique Code</h2>
            <form method="post" style="margin-left: 38%" class="row" action="/AMS/public/search">
                <input id="iUC" type="text" style="margin-top: 1%" class="form-control col-sm-3" name="uniqueCode" placeholder="Insert unique code..." pattern="[A-Z][A-Z][A-Z][0-9][0-9][0-9]" required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" style="margin-left: 1%; margin-top: 1%" class="btn" value="Search">
            </form>
            <p style="width: 300px; color: red; margin-top: 1%;font-size: 12px">*Unique code terdiri dari tiga huruf besar dan dilanjutkan dengan tiga angka, contoh: ABC123</p>
        </div>
    </body>
</html>