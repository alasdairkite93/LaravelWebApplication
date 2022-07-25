<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel-TeeMill File Conversion</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <p>This page is a welcome to Laravel</p>
        <p>The <u><b>php</b></u> file that you want converted is:</p>
        <?php
        use Illuminate\Support\Str;
        $arr = array(

            "action: Added; quantity: 1; item_code: RNA1; product_name: Mens Organic T-shirt; colour: White; size: XL",

            "action: Subtracted; quantity: 7; item_code: RNC1; product_name: Kids Basic T-shirt; colour: Denim Blue; size: 3-4y",

            "action: Added; quantity: 20; item_code: RNV1; product_name: Gift Voucher; style: Mens; value: £20",);

            for( $i = 0; $i < count($arr); $i++) {
                $val = explode(';' , strval($arr[0]), -1);
                $collection = Str::of($arr[0])->explode(';');
                echo "$collection[0]";
            }

        ?>
    </body>
</html>
