<br><br><br>
<div class="container-fluid">
	<form action="" id="booking-form" class="col-md-12">
		<input type="hidden" name="id" value="">
		<input type="hidden" name="cab_id" value="">
		<div class="form-group">
			<label for="pickup_zone" class="control-label">Pickup Location</label>
			<textarea name="pickup_zone" id="pickup_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
		</div>
		<div class="form-group">
			<label for="drop_zone" class="control-label">Drop-off Location</label>
			<textarea name="drop_zone" id="drop_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
		</div>
	</form>
</div>
<div>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.345188268471!2d79.9145588098865!3d6.85023049498026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2507105492fab%3A0x5adc83492aee3910!2sMaharagama!5e0!3m2!1sen!2slk!4v1709736341640!5m2!1sen!2slk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<script>
	$(document).ready(function() {
		$('#booking-form').submit(function(e) {
			e.preventDefault();
			var _this = $(this)
			$('.err-msg').remove();
			start_loader();
			$.ajax({
				url: _base_url_ + "classes/Master.php?f=save_booking",
				data: new FormData($(this)[0]),
				error: err => {
					console.log(err)
					alert_toast("An error occured", 'error');
					end_loader();
				},
				success: function(resp) {
					if (typeof resp == 'object' && resp.status == 'success') {
						location.href = './?p=booking_list';
					} else if (resp.status == 'failed' && !!resp.msg) {
						var el = $('<div>')
						el.addClass("alert alert-danger err-msg").text(resp.msg)
						_this.prepend(el)
						el.show('slow')
						$("html, body").animate({
							scrollTop: _this.closest('.card').offset().top
						}, "fast");
						end_loader()
					} else {
						alert_toast("An error occured", 'error');
						end_loader();
						console.log(resp)
					}
				}
			})
		})
	})
</script>