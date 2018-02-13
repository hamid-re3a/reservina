$(document).ready(function () {

    $('[href="#"]').click(function (e) {
        e.preventDefault();
    });

    $('#login').submit(function (e) {
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.get('http://server.reservina.ir/mobile?username='+username+'&password='+password)
            .success(function (result) {
            console.log(result);
            var response = result.data;
            setCookie('access_token',response.access_token,response.expires_in);
        })
    });

    $('#register').submit(function (e) {
        e.preventDefault();
        var email = $('#email').val();
        var gender = $('#gender').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        var dataString = 'email='+email+'&gender='+gender+'&password='+password+'&password_confirmation='+password_confirmation;
        $.ajax({
            url: 'http://server.reservina.ir/users',
            type: 'post',
            data: dataString,
            cache: false
        }).success(function (result) {
            console.log(result);
            var response = result.data;
            setCookie('access_token',response.access_token,response.expires_in);
        })
    });

    function setCookie(cname, cvalue, cexpires) {
        var d = new Date();
        d.setTime(d.getTime() + cexpires);
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
});