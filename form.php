<html>
<head>
            <title>Contact Form</title>
</head>
<body>

<?php

$mailTo = "email@exampledomain.co.nz"; // <----- YOUR EMAIL ADDRESS GOES HERE

if ($HTTP_POST_VARS['message']) {
$mailSubject = "Contact Form";
$mailHeaders = "From:" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['name'])) . " <" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['email'])) . ">\r\nX-Mailer: PHP/" . phpversion() . "\r\n";
$mailParams = "-f" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['email']));
$mailBody = ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['message']));
mail($mailTo,$mailSubject,$mailBody,$mailHeaders,$mailParams);
?>

Thank you for contacting us.<br />

<?php } else { ?>

Contact Form<br /><br />

<form action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>" method="post">
<table cellpadding="3" cellspacing="0" border="0">
<tr>
    <td class="content" valign="top">
        Your Name<br />
    </td>
    <td>
        <input class="input" name="name" type="text" size="20" />
    </td>
</tr>
<tr>
    <td class="content" valign="top">
        Your Email<br />
    </td>
    <td>
        <input class="input" name="email" type="text" size="20" />
    </td>
</tr>
<tr>
    <td class="content" valign="top">
        Your Message<br />
    </td>
    <td>
        <textarea class="input" name="message" cols="30" rows="8"></textarea><br />
    </td>
</tr>
    <tr>
        <td colspan="2" align="right">
                <input class="button" type="submit" value="Send Message" />
        </td>
    </tr>
    </table>
</form>

<?php } ?>

</body>
</html>