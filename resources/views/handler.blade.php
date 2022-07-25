<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
    <h1>Output</h1>
        <p>Using print_r method</p>
    <div>

        {{print_r($list)}}
    </div>
    </body>
</html>
