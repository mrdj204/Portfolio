<?php
include "include.php";
$content = "<table><tr><td style='padding-right: 10px;'>
<h3>3 Easy Steps to Get Started</h3>
<ol>
<li>Register on the form to the right and pick ups will start on the next available day.
<br /><center>or</center>
Call <a href='contact.php'>customer service</a> to schedule a pick-up and enclose <a href='TCC_Registration_Form.pdf'>THIS FORM</a> in your first bag.</li>
<br /><li>Call Customer Service to make payment arrangements. The easiest method is have your credit card charged. There is nothing more to do or think about. Truly worry-free.</li>
<br /><li>Place your bag in the pre-determined location on your pick-up day. Our driver will be there between 8am and 6pm to pick-up and/or deliver your garments.</li>
</ol></td><td>
	<iframe id=\"frame_touchcontrol\" style=\"width:500px; height:325px; background-color:#D3D3D3; float: top;\" src=\"http://207.182.130.82:81/webServiceLogin.aspx?id=TCC-1022\" marginheight=\"12\" name=\"portal\" scrolling=\"yes\" class=\"auto-style13\"></iframe>
</td></tr></table>
";
$output =  str_replace("<a href='pickup.php' class='button'>", "<a href='pickup.php' class='button active'>", $output);
$output =  str_replace("{content}", $content, $output);
echo $output;
?>