<!-- <?php
require_once('./config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `booking_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}

?>


<br><br><br><br><br>
<div class="container-fluid">
    <form action="" id="booking-form">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
        <input type="hidden" name="cab_id" value="<?= isset($_GET['cid']) ? $_GET['cid'] : (isset($cab_id) ? $cab_id : "") ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pickup_zone" class="control-label">Pickup Location</label>
                <textarea name="pickup_zone" id="pickup_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="drop_zone" class="control-label">Drop-off Location</label>
                <textarea name="drop_zone" id="drop_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="distance" class="control-label">Distance (in km)</label>
                <input type="text" name="distance" id="distance" class="form-control form-control-sm rounded-0" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="total_fare" class="control-label">Total Taxi Fare (in Rs.)</label>
                <input type="text" name="total_fare" id="total_fare" class="form-control form-control-sm rounded-0" readonly>
            </div>
        </div>
        <div class="col-auto mt-4">
			<a class="btn btn-warning btn-lg rounded-0" href="register.php"><b>Book Now</b></a>
		</div>
    </form>
</div><br>

<div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.345188268471!2d79.9145588098865!3d6.85023049498026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2507105492fab%3A0x5adc83492aee3910!2sMaharagama!5e0!3m2!1sen!2slk!4v1709736341640!5m2!1sen!2slk" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#booking-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_booking",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = './?p=booking_list';
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                            end_loader()
                    }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
				}
			})
		})
	})
</script>
 -->
 <?php
require_once('./config.php');

// Function to calculate distance and fare
function calculateDistanceAndFare($pickup, $dropoff, $ratePerKm = 100) {
    // Distance matrix
    $distances = array(
        "nugegoda" => array("maharagama" => 10),
        "panadura" => array("bambalapitiya" => 25),
        "avissawella" => array("pettah" => 70),
        "homagama" => array("dehiwala" => 20)
    );

    // Fare calculation
    $fare = 0;
    if (isset($distances[$pickup][$dropoff])) {
        $distance = $distances[$pickup][$dropoff];
        $fare = $distance * $ratePerKm;
    }

    return array("distance" => $distance ?? 0, "fare" => $fare);
}

if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `booking_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>
<br><br><br><br><br><br>
<div class="container-fluid">
    <form action="" id="booking-form">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
        <input type="hidden" name="cab_id" value="<?= isset($_GET['cid']) ? $_GET['cid'] : (isset($cab_id) ? $cab_id : "") ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pickup_zone" class="control-label">Pickup Location</label>
                <textarea name="pickup_zone" id="pickup_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="drop_zone" class="control-label">Drop-off Location</label>
                <textarea name="drop_zone" id="drop_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="distance" class="control-label">Distance (in km)</label>
                <input type="text" name="distance" id="distance" class="form-control form-control-sm rounded-0" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="total_fare" class="control-label">Total Taxi Fare (in Rs.)</label>
                <input type="text" name="total_fare" id="total_fare" class="form-control form-control-sm rounded-0" readonly>
            </div>
        </div>
        <div class="form-group col-md-12 mt-4">
            <button type="button" class="btn btn-warning btn-lg rounded-0" id="bookNow"><b>Book Now</b></button>
        </div>
    </form>
</div>
<div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.345188268471!2d79.9145588098865!3d6.85023049498026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2507105492fab%3A0x5adc83492aee3910!2sMaharagama!5e0!3m2!1sen!2slk!4v1709736341640!5m2!1sen!2slk" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
<script>
    $(document).ready(function(){
        // Function to calculate distance and fare
        function calculateDistanceAndFare(pickup, dropoff, ratePerKm = 100) {
            // Distance matrix
            var distances = {
                "nugegoda": {"maharagama": 10},
                "panadura": {"bambalapitiya": 25},
                "avissawella": {"pettah": 70},
                "homagama": {"dehiwala": 20}
            };

            // Fare calculation
            var fare = 0;
            if (distances[pickup] && distances[pickup][dropoff]) {
                var distance = distances[pickup][dropoff];
                fare = distance * ratePerKm;
            }

            return {"distance": distance || 0, "fare": fare};
        }

        // Event listener for the "Book Now" button click
        $('#bookNow').click(function() {
            var pickup = $('#pickup_zone').val().toLowerCase();
            var dropoff = $('#drop_zone').val().toLowerCase();

            // Calculate distance and fare
            var fareData = calculateDistanceAndFare(pickup, dropoff);

            // Set the values of distance and total fare fields
            $('#distance').val(fareData.distance);
            $('#total_fare').val(fareData.fare);
        });
    });
</script>
