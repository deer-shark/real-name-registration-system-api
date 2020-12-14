$('#form-login').submit(function(){
    return false;
});

function a5() {
    console.log('test');
    var input_acc = $('#form-login-account').val();
    var input_pw = $('#form-login-password').val();
    if (input_acc == "" || input_pw == "") {
        alert("錯誤：帳號或密碼未輸入!!請再試一次");
        return false;
    }
    var data = {
        account: input_acc,
        password: input_pw
    };
    var res = request('POST', '/auth/token', data, false);
    if (res.code == 200) {
        $.cookie('access_token', res.data.access_token, {expires: res.data.expires_in / 3600 / 24});
            alert("LOGIN SUCCESS");
            setTimeout(function () {
                location.replace("../../")
            }, 1000);
            return false;
    } else if (res.code == 401) {
        alert("帳號或密碼錯誤!!請再試一次");
        
        return false;
    }else{
        alert("SERVER ERROR");
        return false;
    }
    return false;
}