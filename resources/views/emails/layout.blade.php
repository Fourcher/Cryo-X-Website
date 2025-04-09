<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'Cryo X Notification' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f4f6;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #51545E;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        /* Container */
        .email-wrapper {
            width: 100%;
            background-color: #f2f4f6;
            padding: 0;
            margin: 0;
        }
        .email-content {
            width: 100%;
            margin: 0;
            padding: 0;
        }
        /* Header */
        .email-header {
            padding: 25px 0;
            text-align: center;
            background-color: #6d46ed;
        }
        .email-header_logo {
            width: 150px;
            height: auto;
        }
        /* Body */
        .email-body {
            width: 100%;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .email-body_inner {
            width: 100%;
            max-width: 570px;
            margin: 0 auto;
            padding: 0;
        }
        .content-cell {
            padding: 35px;
        }
        /* Footer */
        .email-footer {
            width: 100%;
            text-align: center;
            padding: 25px 0;
            background-color: #f2f4f6;
            color: #6B6E76;
            font-size: 12px;
        }
        /* Typography */
        h1 {
            margin-top: 0;
            color: #333333;
            font-size: 22px;
            font-weight: bold;
            text-align: left;
        }
        p {
            margin-top: 0;
            color: #51545E;
            font-size: 16px;
            line-height: 1.5em;
            text-align: left;
        }
        /* Media Queries */
        @media only screen and (max-width: 600px) {
            .email-body_inner, .content-cell {
                padding: 20px;
            }
            h1 {
                font-size: 20px;
            }
            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <table class="email-wrapper" role="presentation">
        <tr>
            <td align="center">
                <table class="email-content" role="presentation">
                    <!-- Header -->
                    <tr>
                        <td class="email-header">
                            <a href="https://www.cryox.co" target="_blank">
                                <img src="https://www.cryox.co/main_logo.png" alt="Cryo X Logo" class="email-header_logo">
                            </a>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td class="email-body" width="100%">
                            <table class="email-body_inner" align="center" role="presentation">
                                <tr>
                                    <td class="content-cell">
                                        {!! $body !!}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td>
                            <table class="email-footer" align="center" role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">
                                        &copy; {{ date('Y') }} Cryo X. All rights reserved.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
