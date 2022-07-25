<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
        <form action="{{url('handler')}}" method="post">
            @csrf <!-- {( csrf_field() }} -->
                <label>
                    <textarea rows="2" cols="20" name="somedata" wrap="hard" style="width: 350px; height: 200px;">action: Added; quantity: 1; item_code: RNA1; product_name: Mens Organic T-shirt; colour: White; size: XL,

                    action: Subtracted; quantity: 7; item_code: RNC1; product_name: Kids Basic T-shirt; colour: Denim Blue; size: 3-4y,

                    action: Added; quantity: 20; item_code: RNV1; product_name: Gift Voucher; style: Mens; value: £20"</textarea>
{{--                    <input type="text" name="somedata" value="/>--}}
                </label>
                <button type="submit">Submit</button>
        </form>
    </body>
</html>
