$(document).ready(function() {
	function populateRadioDetails(id) {
		var radioId = { type: 'binary', value: id };
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/searchRadios.php',
			data: {radioId: radioId},
			success: function(ajaxValues) {
				if(ajaxValues.success) {
					var result = ajaxValues.result[0];
					for(var key in result) {
						if(result.hasOwnProperty(key)) {
							$('#'+key).val(result[key]);
						}
					}
				}
			},
			error: function(e) {
				console.log(e.message);
			}
		});
	}

	$('.radioRow').on('click', function() {
		var id = $(this).attr('id');
		$('#radio-details-tab').click();
		populateRadioDetails(id);
	});

	$('#radioSaveBtn').on('click', function() {
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/updateRadio.php',
			data: $('#radio-details-form').serialize(),
			success: function(ajaxValues) {
				if(ajaxValues.success) {
					$('#radioList').load(location.href+" #radioList>*","");
					alert("Radio Saved.");
				}
			},
			error: function(e) {
				console.log(e);
			}
		});
	});

	$('#radioCancelBtn').on('click', function() {
		var id = $('#radioId').val();
		populateRadioDetails(id);
	});

	$('#newRadio').on('click', function() {
		$('#radio-details-form').trigger('reset');
		$('#newRadioSaveBtn').removeClass('hidden');
		$('#newRadioCancelBtn').removeClass('hidden');
		$('#radioSaveBtn').addClass('hidden');
		$('#radioCancelBtn').addClass('hidden');
		$('#newRadio').addClass('hidden');
	});

	$('#newRadioSaveBtn').on('click', function() {
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/newRadio.php',
			data: $('#radio-details-form').serialize(),
			success: function(ajaxValues) {
				if(ajaxValues.success) {
					populateRadioDetails(ajaxValues.id);
					$('#radioList').load(location.href+" #radioList>*","");
					$('#newRadioSaveBtn').addClass('hidden');
					$('#newRadioCancelBtn').addClass('hidden');
					$('#radioSaveBtn').removeClass('hidden');
					$('#radioCancelBtn').removeClass('hidden');
					$('#newRadio').removeClass('hidden');
					alert("Radio Saved.");
				}
			},
			error: function(e) {
				console.log(e);
			}
		});
	});

	$('#newRadioCancelBtn').on('click', function() {
		
		$('#newRadioSaveBtn').addClass('hidden');
		$('#newRadioCancelBtn').addClass('hidden');
		$('#radioSaveBtn').removeClass('hidden');
		$('#radioCancelBtn').removeClass('hidden');
		$('#newRadio').removeClass('hidden');
	});
});
	