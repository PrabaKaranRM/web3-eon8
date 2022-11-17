<?php
session_start();
if (count($_POST) > 0) {
    if () {
        $to = "praba3024@gmail.com";
        $from = $_POST['praba3024@gmail.com'];
        $retfrom = "prabakaranrm48@gmail.com";
        $expectation = $_POST['expectation'];
        $about = $_POST['chose'];
        $email = $_POST['email'];
        $number = $_POST['number'];

        $subject = "Eon8 - Contact Form";

        $retmessage = "<div style='width:100%;height:100%;margin:10px auto;padding:0;background-color:#ffffff;font-family:Arial,Tahoma,Verdana,sans-serif;font-size:13px;text-align:center' bgcolor='#ffffff'>
            <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px; height:80px;'>
                <tbody>
                    <tr>
                        <td width='10' bgcolor='#027cd5' style='width:10px;background-color:#fff; border-left:solid 1px #e6e6e6; border-top:solid 1px #e6e6e6;'></td>
                        <td valign='middle' align='left' height='50' bgcolor='#fff' style='background-color:#fff;padding:0;margin:0; border-top:solid 1px #e6e6e6;'>
                            <a style='text-decoration:none;outline:none;color:#fff;font-size:13px' href='https://devserver.mindzmap.com/eon8/' target='_blank'> <img border='0' src='https://devserver.mindzmap.com/eon8/assets/img/logo/Logo.png' alt='eon8 logo' style='border:none; width: 100px;'> </a>
                        </td>
                        <td valign='middle' align='right' height='50' bgcolor='#fff' style='background-color:#fff;padding:0;margin:0; border-top:solid 1px #e6e6e6;'>
                            <strong>
                                <a style='text-decoration:none;outline:none;color:#565656;font-size:13px' href='tel:+91 90422 94007'>
                                    +91 90422 94007
                                </a>
                            </strong>
                        </td>
                        <td width='10' bgcolor='#fff' style='width:10px;background-color:#fff; border-right:solid 1px #e6e6e6; border-top:solid 1px #e6e6e6;'></td>
                    </tr>
                </tbody>
            </table>
            <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px;border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6'>
                <tbody>
                <tr>
                    <td align='left' valign='top' style='color:#2c2c2c;display:block;font-weight:300;margin:0 auto;clear:both;border-bottom:1px solid #e6e6e6;background-color:#f9f9f9;padding:20px' bgcolor='#F9F9F9'>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;font-size:13px'>Hello <strong>$email</strong>,</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:10px;font-size:13px'>Thank you for your interest in Eon8.</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>
                            Our representative will get back to you to complete the process. Your contact number is listed as <strong>$number</strong>. Please get back to us if this is incorrect.
                        </p>
                        <br />
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>
                            We specialise in providing complete Facility Management in your business. We look forward to a long-lasting and fulfilling relationship with you.
                        </p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:20px;font-size:13px'>
                            Warm Regards,
                            <br><b>Eon8</b><br />
                            <a href='https://devserver.mindzmap.com/eon8/' target='_blank' style='text-decoration:none; color:#565656;'>www.eon8.com</a>
                        </p>
                        <br>
                    </td>
                </tr>
            </tbody>
            </table>
                <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px;border:solid 1px #e6e6e6;border-top:none;border:solid 1px #e6e6e6;border-top:none'>
                    <tbody>
                        <tr>
                            <td valign='top' align='center' width='300' style='background-color:#f9f9f9'>
                                <br>
                                <table width='100%' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                        <tr>
                                            <td valign='top' align='left' style='padding:0 10px 15px 20px;margin:0;'>
                                                <p style='padding:0;margin:0 0 7px 0;font-size:11px;color:#565656'>
                                                    © 2022 EON8 WEB3 STUDIO ALL RIGHTS RESERVED.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td valign='top' align='center' width='300' style='background-color:#f9f9f9;'>
                                <br>
                                <table width='100%' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                        <tr>
                                            <td valign='top' align='Right' style='padding:0 10px 15px 20px;margin:0'>
                                                <p style='padding:0;margin:0 0 7px 0;font-size:11px;color:#565656'>
                                                    Design by <a href='https://mindzmap.com/' target='_blank'>MindzMap</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>";

        $message = "<div style='width:100%;height:100%;margin:10px auto;padding:0;background-color:#ffffff;font-family:Arial,Tahoma,Verdana,sans-serif;font-size:13px;text-align:center' bgcolor='#ffffff'>
            <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px; height:80px;'>
            <tbody>
                <tr>
                    <td width='10' bgcolor='#027cd5' style='width:10px;background-color:#fff; border-left:solid 1px #e6e6e6; border-top:solid 1px #e6e6e6;'></td>
                    <td valign='middle' align='left' height='50' bgcolor='#fff' style='background-color:#fff;padding:0;margin:0; border-top:solid 1px #e6e6e6;'>
                        <a style='text-decoration:none;outline:none;color:#fff;font-size:13px' href='https://devserver.mindzmap.com/eon8/' target='_blank'> <img border='0' src='https://devserver.mindzmap.com/eon8/assets/img/logo/Logo.png' alt='eon8 logo' style='border:none; width: 100px;'> </a>
                    </td>
                    <td valign='middle' align='right' height='50' bgcolor='#fff' style='background-color:#fff;padding:0;margin:0; border-top:solid 1px #e6e6e6;'>
                        <strong>
                            <a style='text-decoration:none;outline:none;color:#565656;font-size:13px' href='tel:+91 90422 94007'>
                                +91 90422 94007
                            </a>
                        </strong>
                    </td>
                    <td width='10' bgcolor='#fff' style='width:10px;background-color:#fff; border-right:solid 1px #e6e6e6; border-top:solid 1px #e6e6e6;'></td>
                </tr>
            </tbody>
            </table>
            <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px;border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6'>
            <tbody>
                <tr>
                    <td align='left' valign='top' style='color:#2c2c2c;display:block;font-weight:300;margin:0 auto;clear:both;border-bottom:1px solid #e6e6e6;background-color:#f9f9f9;padding:20px' bgcolor='#F9F9F9'>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;font-size:13px'>Hello,</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;font-size:13px'>Greetings!</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;font-size:13px'>Thank you for your interest in Eon8</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;font-size:13px'>Please find below my details</p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>Expectation - <strong>$expectation</strong></p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>About Brand - <strong>$about</strong></p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>Email Id - <strong>$email</strong></p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:18px;font-size:13px'>Mobile Number - <strong>$number</strong></p>
                        <br>
                        <p style='padding:0;margin:0;color:#565656;line-height:20px;font-size:13px'>
                             Warm Regards,
                            <br><strong>$email</strong>
                        </p>
                        <br>
                    </td>
                </tr>
            </tbody>
            </table>
            <table width='100%' cellspacing='0' cellpadding='0' style='max-width:600px;border:solid 1px #e6e6e6;border-top:none;border:solid 1px #e6e6e6;border-top:none'>
            <tbody>
                <tr>
                    <td valign='top' align='center' width='300' style='background-color:#f9f9f9'>
                        <br>
                        <table width='100%' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td valign='top' align='left' style='padding:0 10px 15px 20px;margin:0;'>
                                        <p style='padding:0;margin:0 0 7px 0;font-size:11px;color:#565656'>
                                            © 2022 EON8 WEB3 STUDIO ALL RIGHTS RESERVED.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td valign='top' align='center' width='300' style='background-color:#f9f9f9;'>
                        <br>
                        <table width='100%' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td valign='top' align='Right' style='padding:0 10px 15px 20px;margin:0'>
                                        <p style='padding:0;margin:0 0 7px 0;font-size:11px;color:#565656'>
                                            Design by <a href='https://mindzmap.com/' target='_blank'>MindzMap</a>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
            </table>
         </div>";
        // main header (multipart mandatory)
        $headers = "From: " . $fromname . " <" . $fromemail . ">" . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
        $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
        $headers .= "This is a MIME encoded message." . $eol;

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
        $headers .= "From:" . $from;

        $retheaders = 'MIME-Version: 1.0' . "\r\n";
        $retheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $retheaders .= "X-Priority: 1 (Highest)\n";
        $retheaders .= "X-MSMail-Priority: High\n";
        $retheaders .= "Importance: High\n";
        $retheaders .= "From:" . $retfrom;

        mail($to, $subject, $message, $headers); // to send admin
        mail($from, $subject, $retmessage, $retheaders); // to send user
        echo "0";
    } else {
        echo "1";
    }
}
