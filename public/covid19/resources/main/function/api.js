function request(httpMethod, route, dataObj, auth = true, progressBar = true) {
    var responses = null;
    $.ajax({
        url: config['backend_URL'] + route,
        data: JSON.stringify(dataObj),
        type: httpMethod,
        contentType: 'application/json; charset=UTF-8',
        beforeSend: function (xhr) {
            /*if (progressBar)
                pb.open();*/
            if (auth && $.cookie('access_token') != undefined)
                xhr.setRequestHeader("Authorization", 'Bearer ' + $.cookie('access_token'));
        },
        async: false,
        complete: function (xhr) {
            responses = xhr;
            /*if (progressBar)
                pb.close();*/
        }
    });
    if (Math.floor(responses.status / 100) == 5) {
        Swal.fire({
            icon: 'error',
            title: '伺服器錯誤',
            text: '系統發生錯誤!!請聯繫管理員'
        });
        /*$.alert({
            title: '錯誤',
            content: '系統發生錯誤!!請聯繫管理員',
            type: 'red',
            typeAnimated: true
        });*/
    }
    if (responses.status == 401 && !(httpMethod == 'POST' && route == '/auth/token') && !(httpMethod == 'DELETE' && route.match('/auth/token/') != null)) {
        Swal.fire({
            icon: 'error',
            title: '使用者驗證錯誤',
            text: '請重新登入'
        });
        /*$.alert({
            title: '錯誤',
            content: '使用者驗證錯誤!!請重新登入',
            type: 'red',
            typeAnimated: true
        });*/
    }
    if (responses.status == 403 &&
        !(httpMethod == 'POST' && route == '/auth/token') &&
        !(httpMethod == 'POST' && route == '/auth/verify') &&
        !(httpMethod == 'POST' && route == '/pswd/account') &&
        !(httpMethod == 'POST' && route == '/pswd/token') &&
        !(httpMethod == 'POST' && route == '/order')
    ) {
        Swal.fire({
            icon: 'error',
            title: '使用者驗證錯誤',
            text: '權限不足'
        });
        /*$.alert({
            title: '錯誤',
            content: '權限不足!!!',
            type: 'red',
            typeAnimated: true
        });*/
    }
    console.log(responses);
    var result = {'code': responses.status, 'data': responses.responseJSON};
    console.log(result);
    return result;
}