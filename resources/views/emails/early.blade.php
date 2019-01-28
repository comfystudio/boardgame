@include('partials.email-header')
    <tr>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="white" style="border-collapse: collapse;">
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" width="400" bgcolor="white" align="center">
                            <tr>
                                <td><h1 style = "color:#6a1b9a; font-family: Calibri,Arial,sans-serif; text-align: center;">Welcome to the {{SITE_NAME}}</h1></td>
                            </tr>

                            <tr>
                                <td style="padding: 10px;">
                                    <p style = "color:black; font-family: Calibri,Arial,sans-serif;  font-size:20px">
                                        Hi!
                                    </p>

                                    <p>
                                        Thank you for signing up to receive notifications from the {{SITE_NAME}}.
                                        Now you'll be the first to know when we publish a new post.
                                    </p>


                                    <p>
                                        We want to grow our community so if there is content you want to see or feed back you want
                                        to give, please get in touch by replying to this email or following us on social media:
                                    </p>

                                    <ul>
                                        <li><a href="{{FACEBOOK}}">Facebook</a></li>
                                        <li><a href="{{TWITTER}}">Twitter</a></li>
                                        <li><a href="{{INSTAGRAM}}">Instagram</a></li>
                                        <li><a href = "{{PINTEREST}}">Pinterest</a></li>
                                    </ul>

                                    <p>
                                        <i>AGENT O</i>
                                    </p>

                                    <p>
                                        <i>Orla</i>
                                    </p>

                                    <p  style = "color:black; font-family: Calibri,Arial,sans-serif;  font-size:10px">
                                        &copy; {{SITE_NAME}} {{date("Y")}}. All Rights Reserved. You are receiving this email because you opted in at our website
                                    </p>

                                    <p  style = "color:black; font-family: Calibri,Arial,sans-serif;  font-size:10px">
                                        <i><a href="{{env('APP_URL')}}/queries/unsub">Unsubscribe</a></i>
                                    </p>

                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
             </table>
        </td>
    </tr>
@include('partials.email-footer')