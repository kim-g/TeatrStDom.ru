
$(document).ready(function () {
    $('#play_id').change(function () {
          var play_id = $(this).val();
        if (play_id == '0') {
            $('#subplay_id').html('<option>- выберите спектакль -</option>');
            $('#subplay_id').attr('disabled', true);
            return(false);
        }
        $('#subplay_id').attr('disabled', true);
        $('#subplay_id').html('<option>загрузка...</option>');
         var url = 'get_sp.php';
        $.get(
            url,
            "play_id=" + play_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#subplay_id').html(options);
                    $('#subplay_id').attr('disabled', false);
				}
            },
            "json"
        );
		
	    var subplay_id = $(this).val();
        if (subplay_id == '0') {
            $('#char_id').html('<option>- выберите сюжет -</option>');
            $('#char_id').attr('disabled', true);
            return(false);
        }
        $('#char_id').attr('disabled', true);
        $('#char_id').html('<option>загрузка...</option>');
         var url = 'get_char.php';
        $.get(
            url,
            "subplay_id=" + subplay_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#char_id').html(options);
                    $('#char_id').attr('disabled', false);
                }
            },
            "json"
        );
    });
	
	$('#subplay_id').change(function () {
          var subplay_id = $(this).val();
        if (subplay_id == '0') {
            $('#char_id').html('<option>- выберите сюжет -</option>');
            $('#char_id').attr('disabled', true);
            return(false);
        }
        $('#char_id').attr('disabled', true);
        $('#char_id').html('<option>загрузка...</option>');
         var url = 'get_char.php';
        $.get(
            url,
            "subplay_id=" + subplay_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#char_id').html(options);
                    $('#char_id').attr('disabled', false);
                }
            },
            "json"
        );
    });
	
	$('#char_id').change(function () {
          var char_id = $(this).val();
        if (char_id == '0') {
            $('#person_id').attr('disabled', true);
            return(false);
        }
        $('#person_id').attr('disabled', false);
    });
	
	$('#submit_id').click(function() 
	{
		var url = 'add_role_a.php';
		$.get(
            url,
            {
				play: $('#play_id').val(),
				subplay: $('#subplay_id').val(),
				charachter: $('#char_id').val(),
				person: $('#person_id').val(),
				year: $('#year_id').val()
			},
            function (result) {
                 
                    alert(result);
					return(true);
            },
            "json"
        );
	});
	
	$('#submit_2_id').click(function() 
	{
		var url = 'add_subplay_a.php';
		$.get(
            url,
            {
				play: $('#play_2_id').val(),
				subplay: $('#subplay_add_id').attr("value")
				
			},
            function (result) {
                 
                    alert(result);
					return(true);
            },
            "json"
        );
	});
	
    $('#play_3_id').change(function () {
          var play_3_id = $(this).val();
        if (play_3_id == '0') {
            $('#subplay_3_id').html('<option>- выберите спектакль -</option>');
            $('#subplay_3_id').attr('disabled', true);
            return(false);
        }
        $('#subplay_3_id').attr('disabled', true);
        $('#subplay_3_id').html('<option>загрузка...</option>');
         var url = 'get_sp.php';
        $.get(
            url,
            "play_id=" + play_3_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#subplay_3_id').html(options);
                    $('#subplay_3_id').attr('disabled', false);
				}
            },
            "json"
        );
    });
	
	$('#submit_3_id').click(function() 
	{
		var url = 'add_new_role_a.php';
		$.get(
            url,
            {
				play: $('#play_3_id').val(),
				subplay: $('#subplay_3_id').val(),
				charachter: $('#role_add_id').attr("value")
			},
            function (result) {
                 
                    alert(result);
					return(true);
            },
            "json"
        );
		var play_id = $('#play_id').val();
        if (play_id == '0') {
            $('#subplay_id').html('<option>- выберите спектакль -</option>');
            $('#subplay_id').attr('disabled', true);
            return(false);
        }
        $('#subplay_id').attr('disabled', true);
        $('#subplay_id').html('<option>загрузка...</option>');
         var url = 'get_sp.php';
        $.get(
            url,
            "play_id=" + play_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#subplay_id').html(options);
                    $('#subplay_id').attr('disabled', false);
				}
            },
            "json"
        );
		
	    var subplay_id = $('#subplay_id').val();
        if (subplay_id == '0') {
            $('#char_id').html('<option>- выберите сюжет -</option>');
            $('#char_id').attr('disabled', true);
            return(false);
        }
        $('#char_id').attr('disabled', true);
        $('#char_id').html('<option>загрузка...</option>');
         var url = 'get_char.php';
        $.get(
            url,
            "subplay_id=" + subplay_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#char_id').html(options);
                    $('#char_id').attr('disabled', false);
                }
            },
            "json"
        );
    });
	
	$('#subplay_id').change(function () {
          var subplay_id = $(this).val();
        if (subplay_id == '0') {
            $('#char_id').html('<option>- выберите сюжет -</option>');
            $('#char_id').attr('disabled', true);
            return(false);
        }
        $('#char_id').attr('disabled', true);
        $('#char_id').html('<option>загрузка...</option>');
         var url = 'get_char.php';
        $.get(
            url,
            "subplay_id=" + subplay_id,
            function (result) {
                 if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.regions).each(function() {
                         options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('title') + '</option>';
                    });
                    $('#char_id').html(options);
                    $('#char_id').attr('disabled', false);
                }
            },
            "json"
        );
		
	});

});