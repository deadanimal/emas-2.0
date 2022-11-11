$(document).ready(function() {
    getUserList();


            $(document).on('click', '.active_deactive_user', function() {
                const thisRef = $(this);
                thisRef.text('processing');
                $.ajax({
                type: 'GET',
                url: '/ED/active_deactive_user/'+thisRef.attr('id'),
                success:function(response) {
                var response = JSON.parse(response);
                if(response == 'success') {
                    showAlert(200, 'Status Updated Successfully');
                    getUserList();
                } else if(JSON.parse(response) == 'failed') {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'red');
                    $('#notifDiv').text('Unable to deactivate employee');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                }
            }
        });
   });
});



function getUserList() {
    $.ajax({
        type: 'GET',
        url: '/ED/userFetchList',
        success: function (response) {
            var iteration = 1;

            var response = JSON.parse(response);
            $('#get_data').empty();
            $('#get_data').append(`<table class="table table-hover dt-responsive nowrap userList" id="example" style="width:100%">
            <thead>
                <tr>
                    <th>Bil.</th>
                    <th>ID Agensi/Bahagian/Kementerian</th>
                    <th>Nama Agensi/Bahagian/Kementerian</th>
                    <th>Email Pengguna</th>
                    <th>Status</th>
                </tr>
                </thead>
            <tbody>
        </tbody>
    </table>`);

                    response.forEach(element => {
                        $('.userList tbody').append(`<tr>
                        <td>` + iteration++ + `</td>
                        <td>${element.username}</td>
                        <td>${element.name}</td>
                        <td>${element.email}</td>
                        <td>
                        <button class="btn btn-primary btn-sm active_deactive_user" id="${element.id}">${element.status == 1 ? `Inactive` : `Active`}</button>
                        </td>
                </tr>`);
            });
        }
    })
}


function showAlert(code, message) {
	$('#notifDiv').css('background', (code === 200 ? 'green': 'red'));
	$('#notifDiv').fadeIn();
	$('#notifDiv').text(message);
	setTimeout(() =>{
		$('#notifDiv').fadeOut();
	}, 3000)
}
