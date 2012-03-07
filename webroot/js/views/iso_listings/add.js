$(document).ready(function() {
	$('#AddressStateId').change(function() {
		console.log($(this).val());
		console.log(Isos.basePath + '/iso_listings/getCities/' + $(this).val());
		var options;
		$.getJSON(
			Isos.basePath + '/iso_listings/getCities/' + $(this).val() + '.json',
			function(data) {
				$('#AddressCityId').select().empty();
				$.each(data.Cities, function(id, name) {
					$('#AddressCityId').select().append('<option value="' + id + '">' + name + '</option>');
			});
		});
	});
});