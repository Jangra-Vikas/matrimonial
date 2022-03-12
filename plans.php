<?php require_once('header.php'); ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<div class="grid_3">
		<div class="container">
			<p style="text-align: center;font-size: 40px;font-weight: bold;">Select Your Package</p>
			<?php
			$sql=$conn->query('SELECT * FROM plans WHERE status="Active"');
			while ($plan=$sql->fetch_assoc()) { ?>
			<div class="col-md-4">
				<div class="card-header">
        			<p><?php echo $plan['name']; ?></p>
        		</div>
				<div class="card-body">
					<div class="row">
						<p><img class="img-responsive" src="dashboard/assets/img/<?php echo $plan['package_image']; ?>" /></p>
						<br>
						 <p style="text-align: center;">Contact view: <?php echo $plan['contact_view']; ?></p>
						<hr>
						<p style="font-weight:bold;font-size:35px;text-align:center;">Rs<?php echo $plan['price']; ?></p>
						<p style="color:#c32143;text-align:center;">Valid Days: <?php echo $plan['validity']; ?></p>
						<br>
					    <center>
                            <?php
                            if (!empty($logged_user['id'])){
                                echo '<button type="button" data-plan="'.$plan["id"].'" data-price="'.$plan['price'].'" data-name="'.$plan["name"].'" class="btn_1 submit payBtn">Purchase This package</button>';
                            } else {
                                echo '<button type="button" data-toggle="modal" data-target="#loginModal" class="btn_1 submit">Login To Purchase package</button>';
                            }
                            ?>
					    </center>
					</div>
				</div>
			</div>
            <?php } ?>
		</div>
	</div>
	<script>
	$('.payBtn').click(function(e){
		id = $(this).data('plan');
		name = $(this).data('name');
		price = $(this).data('price');
		var options = {
		    "key": "rzp_test_WgqpDKMAn339lX", // Enter the Key ID generated from the Dashboard
		    "amount": price*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
		    "currency": "INR",
		    "name": "Neo Vivah",
		    "description": id+'-'+name,
		    "image": "https://example.com/your_logo",
		    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
		    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
		    //"customer_id": "<?php echo $logged_user['id']; ?>",
		    "prefill": {
		        "name": "<?php echo $logged_user['full_name']; ?>",
		        "email": "<?php echo $logged_user['email']; ?>",
		        "contact": "<?php echo $logged_user['mobile']; ?>"
		    },
		    "notes": {
		        "address": "Razorpay Corporate Office"
		    },
		    "theme": {
		        "color": "#3399cc"
		    },
		    "handler": function (response){
			    alert(response.razorpay_payment_id);
			    alert(response.razorpay_order_id);
			    alert(response.razorpay_signature)
			},
		};

		var rzp1 = new Razorpay(options);
		rzp1.on('payment.failed', function (response){
	        alert(response.error.code);
	        alert(response.error.description);
	        alert(response.error.source);
	        alert(response.error.step);
	        alert(response.error.reason);
	        alert(response.error.metadata.order_id);
	        alert(response.error.metadata.payment_id);
		});
		rzp1.open();
    	e.preventDefault();

	});

</script>
<?php require_once('footer.php'); ?>