<html>
<head>
    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">
    <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Email Alert</title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
    <style>
        * {
            font-family: sans-serif !important;
        }
    </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]>
    <style>
        @font-face {
            font-family: 'Whitney-Bold';
            src: url('../css/fonts/WhitneyHTF-Bold.woff2') format('woff2'),
            url('../css/fonts/WhitneyHTF-Bold.woff') format('woff'),
            url('../css/fonts/WhitneyHTF-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Whitney-SemiBold';
            src: url('../css/fonts/WhitneyHTF-SemiBold.woff2') format('woff2'),
            url('../css/fonts/WhitneyHTF-SemiBold.woff') format('woff'),
            url('../css/fonts/WhitneyHTF-SemiBold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Whitney-Medium';
            src: url('../css/fonts/WhitneyHTF-Medium.woff2') format('woff2'),
            url('../css/fonts/WhitneyHTF-Medium.woff') format('woff'),
            url('../css/fonts/WhitneyHTF-Medium.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

    </style>
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset -->
    <style>
        /* What it does: Allows for our custom font-family "Whitney" */

        @font-face {
            font-family: 'Whitney-Bold';
            src: url('../css/fonts/WhitneyHTF-Bold.woff2') format('woff2'), url('../css/fonts/WhitneyHTF-Bold.woff') format('woff'), url('../css/fonts/WhitneyHTF-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Whitney-SemiBold';
            src: url('../css/fonts/WhitneyHTF-SemiBold.woff2') format('woff2'), url('../css/fonts/WhitneyHTF-SemiBold.woff') format('woff'), url('../css/fonts/WhitneyHTF-SemiBold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Whitney-Medium';
            src: url('../css/fonts/WhitneyHTF-Medium.woff2') format('woff2'), url('../css/fonts/WhitneyHTF-Medium.woff') format('woff'), url('../css/fonts/WhitneyHTF-Medium.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        /* What it does: Stops email clients resizing small text. */

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        /* What it does: Centers email on Android 4.4 */

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        /* What it does: Stops Outlook from adding extra spacing to tables. */

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        table table table {
            table-layout: auto;
        }
        /* What it does: Uses a better rendering method when resizing images in IE. */

        img {
            -ms-interpolation-mode: bicubic;
        }
        /* What it does: A work-around for iOS meddling in triggered links. */

        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: underline !important;
        }

        .button-sm {
            margin: 0 auto;
            max-width: 7em;
        }

    </style>

    <!-- Progressive Enhancements -->
    <style>
        /* What it does: Hover styles for buttons */

        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }

        .button-a:hover {
            background: #659c1e !important;
            border-color: #659c1e !important;
        }

        /* Media Queries */

        @media screen and (max-width: 240px) {
            .logo-td {
                width: 100% !important;
            }
        }

        @media screen and (max-width: 480px) {
            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }

        /* What it does: Allows for smaller buttons on larger screens */
        @media screen and (min-width: 481px) {
            .button-td-sm {
                display: inline-block !important;
                /* margin-left: 5px !important; */
            }
            .button-sm {
                min-width: 7em !important;
                width: auto !important;
            }
        }

    </style>

</head>

<body width="100%" bgcolor="#dddddd" style="margin: 0;">
<center align="left" style="width: 100%; background: #dddddd;">

    <!-- Visually Hidden Preheader Text : BEGIN -->
    <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">

    </div>
    <!-- Visually Hidden Preheader Text : END -->

    <!--
  Set the email width. Defined in two places:
  1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
  2. MSO tags for Desktop Windows Outlook enforce a 680px width.
  Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I've found that 680px is a good width. Change with caution.
-->
    <div style="max-width: 680px; margin: auto;">
        <!--[if mso]>
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="left">
            <tr>
                <td>
        <![endif]-->

        <!-- Email Header : BEGIN -->
        <table role="presentation" bgcolor="#ffffff" cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width: 680px;">
            <tr>
                <td style="padding: 30px;" class="logo-td">
                    <img src="#" width="125" height="" alt="in2Marketplace.com" border="0" style="background: none; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; max-width: 100%; min-width: 100px;">
                </td>
                <td style="padding: 30px; text-align: right;">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/97621/icon-alert-orange.png" width="65" height="" alt="alert icon" border="0" style="background: none; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 0; color: #555555;">
                </td>
            </tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width: 680px;">

            <!-- Header : BEGIN -->
            <tr>
                <td bgcolor="#ffab1e" style="background-color: #ffab1e; padding: 0 30px 20px; text-align: left;">
                    <h2 style="color: #ffffff; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 28px; margin-bottom: 0;">Alert Message!</h2>
                </td>
            </tr>
            <!-- Header : END -->

            <!-- Sub Header : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" style="color: #999999; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 16px; letter-spacing: 1px; padding: 30px 30px 15px; text-transform: uppercase;">Sub Header</td>
            </tr>
            <!-- Sub Header : END -->

            <!-- Border Spacer : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" style="background-color: #ffffff; font-size: 0; line-height: 0; padding: 0 30px;">
                    <span style="border-bottom: 1px solid #dddddd; display:block; margin: 0 auto;">&nbsp;</span>
                </td>
            </tr>
            <!-- Border Spacer : END -->

            <!-- Text Row : BEGIN -->
            <tr>
                <!-- dir=ltr is where the magic happens. This can be changed to dir=rtl to swap the alignment on wide while maintaining stack order on narrow. -->
                <td dir="ltr" bgcolor="#ffffff" align="left" height="100%" valign="top" width="100%" style="padding: 30px 20px;">
                    <!--[if mso]>
                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="left" width="660">
                        <tr>
                            <td align="left" valign="top" width="660">
                    <![endif]-->
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="left" width="100%" style="max-width:660px;">
                        <tr>
                            <td align="left" valign="top" style="font-size:0;">

                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td dir="ltr" style="font-family: 'Whitney-Medium', Helvetica, sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 0; text-align: left !important;"
                                            class="center-on-narrow">
                                            <strong style="color:#111111; display: inline-block; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 24px; line-height: 28px; margin-bottom: 10px;">{{$stock->product_name}} is out of reach</strong>
                                            <br>
                                            <br><br>
                                            <!-- Button : Begin -->
{{--                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">--}}
{{--                                                <tr>--}}
{{--                                                    <td style="text-align: center;" class="button-td">--}}
{{--                                                        <a href="http://www.in2marketplace.com" style="background: #8bc63f; border-radius: 35px; border: 15px solid #8bc63f; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 17px; line-height: 1.1; text-align: center; text-decoration: none; display: block; font-weight: bold;" class="button-a">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">Email Button</span>&nbsp;&nbsp;&nbsp;&nbsp;</a>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
                                            <!-- Button : END -->
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Text Row : END -->

            <!-- Thumbnail Left, Text Right : BEGIN -->
            <tr>
                <!-- dir=ltr is where the magic happens. This can be changed to dir=rtl to swap the alignment on wide while maintaining stack order on narrow. -->
                <td dir="ltr" bgcolor="#ffffff" align="left" height="100%" valign="top" width="100%" style="padding: 15px 20px 30px;">
                    <!--[if mso]>
                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="left" width="660">
                        <tr>
                            <td align="left" valign="top" width="660">
                    <![endif]-->
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="left" width="100%" style="max-width:660px;">
                        <tr>
                            <td align="left" valign="top" style="font-size:0;">
                                <!--[if mso]>
                                <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="left" width="660">
                                    <tr>
                                        <td align="left" valign="top" width="220">
                                <![endif]-->
                                <div style="display:inline-block; margin: 0 -2px; max-width: 33.33%; min-width: 120px; vertical-align:top; width:100%;" class="stack-column">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td dir="ltr" style="padding: 0 20px 20px 10px;" class="thumb-td">
                                                <img src="{{asset('storage/' .$stock->image)}}" width="200" height="" border="0" alt="alt_text" class="center-on-narrow" style="width: 100%; margin: 0 !important; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                <td align="left" valign="top" width="440">
                                <![endif]-->
                                <div style="display:inline-block; margin: 0 -2px; max-width: 66.66%; vertical-align:top;" class="stack-column">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td dir="ltr" style="font-family: 'Whitney-Medium', Helvetica, sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 0; text-align: left !important;"
                                                class="center-on-narrow">
                                                <strong style="color:#111111; display: inline-block; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 24px; line-height: 28px; margin-bottom: 10px;">{{$stock->product_name}} is out of reach</strong>
                                                <br> "The stock inventory reveals a mere {{$stock->stock}} units available, emphasizing the rarity and exclusivity of the product. Try to fill up."
                                                <br><br>
                                                <!-- Button : Begin -->
{{--                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">--}}
{{--                                                    <tr>--}}
{{--                                                        <td style="text-align: center;" class="button-td">--}}
{{--                                                            <a href="http://www.in2marketplace.com" style="background: #8bc63f; border-radius: 35px; border: 15px solid #8bc63f; font-family: 'Whitney-SemiBold', Helvetica, sans-serif; font-size: 17px; line-height: 1.1; text-align: center; text-decoration: none; display: block; font-weight: bold;" class="button-a">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">Email Button</span>&nbsp;&nbsp;&nbsp;&nbsp;</a>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                </table>--}}
                                                <!-- Button : END -->
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!--[if mso]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
            <!-- Thumbnail Left, Text Right : END -->

        </table>
        <!-- Email Body : END -->

        <!-- Email Footer : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="left" width="100%" style="max-width: 680px;">
            <tr>
                <td style="padding: 40px 30px; width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                    <a href="" style="color:#777777; text-decoration:underline; font-weight: bold;">View as a Web Page</a>
                    <br><br> Ashar Alo Shop<br><span class="mobile-link--footer">Doripara, Jamalpur Sadar, Jamalpur</span><br>
                    <span class="mobile-link--footer">+88 01706821156</span>
                    <br><br>
                    <a href="#" style="color:#888888; text-decoration:underline;">help center</a> &nbsp;&bull;&nbsp; <a href="#" style="color:#888888; text-decoration:underline;">contact us</a> &nbsp;&bull;&nbsp; <a href="#" style="color:#888888; text-decoration:underline;">unsubscribe</a>
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

        <!--[if mso]>
        </td>
        </tr>
        </table>
        <![endif]-->
    </div>
</center>
</body>
</html>
