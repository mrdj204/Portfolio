<?php
include "include.php";
$content = "<h3>Sheri S. - Deltona City Hall</h3>
<p>“I just wanted to let you know what a GREAT service TCC Valet Services provides to the City’s employees and how much I appreciate you allowing them to continue this service to us.  As you know, I have had two weddings in as many years to sew for.  Every one of the outfits I made was cleaned and pressed by TCC.  They not only went above and beyond to get my clothing cleaned and pressed, they accommodated my schedule, even making special trips to pick up or drop something off so I would have it in time.  I find that so many people are cost conscious today they forget about customer service.  Fortunately, TCC provides a cost conscious service and EXECELS in the customer service arena.”</p>

<h3>C.B. - Island Estates</h3>
<p>“Thank you for taking such good care of us! I really appreciate the fact you packaged my clothes and my husband’s clothes separately that helps me so much. I love the fact that you don’t use safety pins to fasten the tags to the clothes, that’s Awesome!  I also love the fact that you don’t use TONS of twist ties to group everything together. Between the pins and twist ties, it used to take me forever to undo the dry cleaning! The shirts looked great to me. Once again, thank you”</p>

<h3>A.T. - Halifax Health - Patient Business & Financial Services</h3>
<p>“Awesome!!  Thank you for everything that you do for us it is greatly appreciated!”</p>

<h3>C.L. - Gary Yeoman’s Ford</h3>
<p>“Thank you as always great service!

<h3>M. Garrison</h3>
<p>“We have used The Cleaners Consultants - TCC on a repeat basis and cannot say enough about the friendly staff and the quality of work provided. The Cleaners Consultants -TCC sets the standard in this industry and has a superior business model to any of its competitors. The focus is on client satisfaction and reliable services. We are happy to recommend there services to anyone. Top qualities: Great Results, Expert, Good Value”</p>

<h3>B. Wells</h3>
<p>“James and Beth are both very professional, conscientious and always friendly. Their service level is outstanding; * Pick-up & delivery of your orders to your home or office * Consistently timely and dependable service * Perfect packaging of your order when delivered * The ability to track your invoice and payments on iDryClean. I highly recommend them.”</p>

<h3>S. Morcom</h3>
<p>“James runs a highly efficient business. Many of us at John Knox Village use his company for our dry cleaning. He is also a vendor at John Knox for several of our departments. He is always cheerful and displays professionalism.”</p>

<h3>K. Dye</h3>
<p>“James provides a great value for his services and the work is consistently good. I would recommend his services to all. Top qualities: Personable, Good Value, High Integrity”</p>

<h3>T. Owens</h3>
<p>“TCC is the best delivery and pick-up Dry Cleaning Service that I have used. Great Communication! I have been a client for almost 4 yrs now.”</p>

<h3>E. Lachcik</h3>
<p>“James provides an attention to detail and reliability that is refreshing in this day and age. I reccomend James and his crew at TCC very highly.”</p>

<h3>B.W.</h3>
<p>“Couldn't be happier with your service or the quality of the work! The job on the shirts was the best I've ever had, ever! Thanks for the continued follow-up; I look forward to being a customer of yours.”</p>

<h3>C.B.</h3>
<p>“Great job on fixing the shirt.  Thank you very much.”</p>

<h3>J.P.</h3>
<p>“You two are the best. :-)”</p>";
$output =  str_replace("<a href='testimonials.php' class='button'>", "<a href='testimonials.php' class='button active'>", $output);
$output =  str_replace("{content}", $content, $output);
echo $output;
?>