$('#myform').submit(function (event) {
    event.preventDefault();
    if ($('#myform')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        alery("insert");
        data = {
        "name": $('#name').val(),
        "dob": $('#dob').val(),
        "age": $('#age').val(),
        "address": $('#address').val(),
        "city": $('#city').val(),
        "state": $('#state').val()
    }
    $.ajax({
        url: 'insert.php',
        method: "POST",
        data: data,
        success: function (res) {
            // alert(res);
            $('#name').val('');
            $('#dob').val('');
            $('#age').val('');
            $('#address').val('');
            $('#city').val('');
            $('#state').val('');
            load_data();
        }
    })
    }
    $('#myform').addClass('was-validated');
});

//inserting data
$(document).on('click', "#formbtn", function (e) {
    e.preventDefault();
   
    if ($('#myform')[0].checkValidity() === false) {
        event.stopPropagation();
         // alert('success');
    }
    else{
    let data = {
        "name": $('#name').val(),
        "dob": $('#dob').val(),
        "age": $('#age').val(),
        "address": $('#address').val(),
        "city": $('#city').val(),
        "state": $('#state').val()
    }
    $.ajax({
        url: 'insert.php',
        method: "POST",
        data: data,
        success: function (res) {
            // alert(res);
            $('#name').val('');
            $('#dob').val('');
            $('#age').val('');
            $('#address').val('');
            $('#city').val('');
            $('#state').val('');
            load_data();
        }
    })
}
});
//Read Data
function load_data() {
    $.ajax({
        url: 'view.php',
        method: "GET",
        success: function (res, status) {
            if (status == "success") {
                $("#table").html(res);
            }
        }
    });


}

load_data();

//edit get data
$(document).on('click', '.edit', function () {
    let id_value = $(this).attr('id');
    // alert(id_value);
    $.ajax({
        url: 'edit.php',
        method: "POST",
        data: { id: id_value },
        success: function (res) {
            //parsing data from json to object
            let data = $.parseJSON(res);
            $('#name').val(data.name);
            $('#dob').val(data.dob);
            $('#age').val(data.age);
            $('#address').val(data.address);
            $('#city').val(data.city);
            $('#state').val(data.state);
            $('#dataid').val(data.id);
            $('#formbtn').text("Update Data").attr('id', "updatebtn").attr('type', '');
        }
    })
});


//update Data
$(document).on('click', "#updatebtn", function (e) {
    e.preventDefault();
    let data = {
        id: $('#dataid').val(),
        name: $('#name').val(),
        dob: $('#dob').val(),
        age: $('#age').val(),
        address: $('#address').val(),
        city: $('#city').val(),
        state: $('#state').val()
    }
    $.ajax({
        url: 'update.php',
        method: "POST",
        data: data,
        success: function (res) {
            $('#name').val('');
            $('#dob').val('');
            $('#age').val('');
            $('#address').val('');
            $('#city').val('');
            $('#state').val('');
            $('#updatebtn').text("Save Data").attr('id', "formbtn").attr('type', 'submit');
            load_data();
        }
    })
});

//delete data
$(document).on('click', '.delete', function () {
    let id_value = $(this).attr('id');
    $.ajax({
        url: 'delete.php',
        method: "POST",
        data: { id: id_value },
        success: function (res, status) {
            if (status == 'success') {
                load_data();
            }
        }
    })
});