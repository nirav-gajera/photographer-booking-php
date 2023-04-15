 <?php include("header.php");
 require_once("../config/connection.php");
 ?>   
 <?php 
$oid=$_GET['id'];
$sql="select * from `user_order` o join `order detail for user` ot join product p where o.User_Order_Id=ot.User_Order_Id and ot.PROD_ID=p.PROD_ID and O.User_Order_Id='".$oid."'";
$result=mysqli_query($conn,$sql);
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'microcenter.hardware@gmail.com'; //Business Email

?> 
 
 
 
     <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Checkout</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li><span class="la la-folder-open-o"></span>Returning customer? <a href="login.php">Click here to login</a></li>

                
            </ul>
            
            <!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="http://html.efforttech.com/html/adjustfor/checkout.html">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h3>Billing Details</h3>
                            </div>

                            <div class="row clearfix">
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        
                                        <option>India</option>
										
                                    </select>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="field-name" value="" placeholder="Apartment,suite,unit etc. (optional)">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create An Account?</label>
                                    <div class="text">Create an account by entering the information below. if you are a returning custoer please login at the top of the page.</div>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label"><span>Account Password</span></div>
                                    <input type="password" name="field-name" value="" placeholder="Password">
                                </div>
                                
                            </div>
                        </div>
                        <!--Column-->
                        
                </form>
            </div>
            <!--End Checkout Details-->
            
            <!--Order Box-->
            <div class="order-box">
                <div class="sec-title">
                    <h2>Your Order</h2>
                </div>
                <div class="title-box clearfix">
                    <div class="col">PRODUCT</div>
                    <div class="col">TOTAL</div>
                </div>
                <ul>
									<?php
													while($row=mysqli_fetch_array($result))
													{
													
													?>
                    <li class="clearfix"><strong><?php echo $row['Order_Qty'];?></strong><span><?php echo $row['PROD_Name'];?></span></li>
													<?php
													}
													?>													
					
                    <li class="clearfix">SUBTOTAL<span>Rs.<?php echo $_GET['amt']?></span></li>
                    <li class="clearfix">SHIPPING<span class="free">Free Shipping</span></li>
                    <li class="clearfix">TOTAL<span>Rs.<?php echo $_GET['amt']?></span></li>
                </ul>
            </div>
            <!--End Order Box-->
            
            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">
                    
                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                          
                            
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-4">
                                    <label for="payment-4"><strong>PayPal</strong><span class="image"><img src="images/resource/paypal.jpg" alt="" /></span></label>
                                    <a href="#" class="what-paypall">What is PayPal?</a>
                                </div>
								
								<form action="<?php echo $paypalURL; ?>" method="post">
    
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $_SESSION['First_Name']; ?>">
		<input type="hidden" name="amount" value="<?php echo $_GET['amt']; ?>">
          <input type="hidden" name="currency_code" value="INR">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/demo/Paypal/cancel.php'>
		
        <input type='hidden' name='return' value='http://localhost:81/microcenter/Coustmer/myorder.php?id=<?php echo $_GET['id']?>'>
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
	
	
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="lower-box text-right">
                    <a href="#" class="theme-btn btn-style-one">Place Order</a>
                </div>
            </div>
            <!--End Payment Box-->
            
        </div>
    </div>
    <!--End CheckOut Page-->


    <!--Clients Section-->
    
    <!--End Clients Section-->

    <!-- Main Footer -->
<?php include("footer.php")?>