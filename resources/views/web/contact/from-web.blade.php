{{-- TODO: Implement HTML EMAIL Template --}}
{{-- CONTAINER TABLE --}}
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>
            {{-- WRAPPER TABLE --}}
            <table border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td>
                        {{-- LOGO / PREHEADER --}}
                        <table bgcolor="#0A1C47" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr >
                                <td align="left">
                                    <img src="https://res.cloudinary.com/du3l28sfg/image/upload/v1613233229/_src/llcom/ll_logo_png.png"
                                         alt="Check out the site" height="40" border="0"
                                         style="display: block; padding: 10px 0 10px 10px;
                                                color:#FEFEFE; font-family: Arial, sans-serif;
                                                font-weight: bold; font-size: 20px;">
                                </td>
                                <td align="right">
                                   <span style="font-family: Arial, sans-serif; padding: 10px 10px 0 0;
                                                color:#FEFEFE">
                                        Message Sent From Web Contact Form
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- CONTENT --}}
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td align="left">
                                    <span style="font-family: Arial, sans-serif; display:block">Sender Information :</span>
                                </td>
                            </tr>
                            <tr width="100%">
                                <td width="45%" align="left">
                                    <span style="font-family: Arial, sans-serif; display:block">Name:</span>
                                    <span style="font-family: Arial, sans-serif; display:block">Response Email:</span>
                                    <span style="font-family: Arial, sans-serif; display:block">Subject:</span>
                                    <span style="font-family: Arial, sans-serif; display:block">Discipline:</span>
                                </td>
                                <td width="45%" align="right">
                                    <span style="font-family: Arial, sans-serif; display:block">{{ $data['name'] }}</span>
                                    <span style="font-family: Arial, sans-serif; display:block">{{ $data['email'] }}</span>
                                    <span style="font-family: Arial, sans-serif; display:block">{{ $data['subject'][0] }}</span>
                                    <span style="font-family: Arial, sans-serif; display:block">{{ $data['discipline'][0] }}</span>
                                </td>
                            </tr>
                            <tr width="100%">
                                <td>
                                    <span style="font-family: Arial, sans-serif; display:block">{{$data['message']}}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
