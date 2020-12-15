// 右上角小小提示
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    // timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});


// Help
function contact() {
    Swal.fire({
        title: "需要協助？",
        text: "請聯絡xx高中xxx負責人", //訊息內容(可省略)
        icon: "question" //圖示(可省略) success/info/warning/error/question
        // showConfirmButton: false,
    })
};

// Resgister
$('#form-register').submit(function(){
    alert('Sent');
    var m_school=$('#form-register-school').val();
    var m_studentid=$('#form-register-studentid').val();
    var m_class=$('#form-register-class').val();
    var m_seat=$('#form-register-seat').val();
    var m_name=$('#form-register-name').val();

    if(m_school!=null && m_studentid!='' && m_class!='' && m_seat!='' && m_name!=''){
        var data={
            "school":m_school,
            "student_id":m_studentid,
            "class":m_class,
            "seat":m_seat,
            "name":m_name
        };
        var res=request('POST', '/register', data);
        if (res.code == 201) {
            Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: 'https://unsplash.it/400/200',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
        }
    }else{
        // TODO 資料不完整
    }
    return false;
});

// Login
$('#form-login').submit(function(){
    var input_acc = $('#form-login-account').val();
    var input_pw = $('#form-login-password').val();
    if (input_acc == null || input_pw == null) {
        Toast.fire({
            icon: 'error',
            title: '帳號或密碼空白，請重新輸入'
        });
        return false;
    }
    var data = {
        account: input_acc,
        password: input_pw
    };
    var res = request('POST', '/auth/token', data, false);
    if (res.code == 200) {
        $.cookie('access_token', res.data.access_token, {expires: res.data.expires_in / 3600 / 24, path: '/'});
        var user = jwt_decode(res.data.access_token)['user'];
        Toast.fire({
            icon: 'success',
            title: user['name'] + ' 歡迎回來 ❤️',
        }).then(result => {
            // setTimeout(function () {
            location.replace("../../");
            // }, 4000)
        });
        
        return false;
    } else if (res.code == 401) {
        Toast.fire({
            icon: 'error',
            title: '帳號或密碼有誤'
        });
        return false;
    }else{
        Toast.fire({
            icon: 'error',
            title: 'SERVER ERROR!!!'
        });
        return false;
    }
    return false;
});

// Logout
function Logout() {
    var res = request('DELETE', '/auth/token');
    if (res.code == 204) {
        $.cookie("access_token", '', {expires: -1});
        Toast.fire({
            icon: 'success',
            title: '您已登出'
        }).then(result => {
            // setTimeout(function () {
            location.replace("");
            // }, 4000)
        });
    }else{
        Toast.fire({
            icon: 'error',
            title: '登出失敗'
        });
    }
}

// Instascan
scanner.addListener('scan', function (content) {
    var res = request('GET',`/register/hash/${content}`);
    if(res.code==200){
        Toast.fire({
            icon: 'success',
            title: '刷入成功 at'+dayjs().format('HH:mm:ss')
        });
        //$("#recently").prepend(`<div class="alert alert-danger stu-in"><i class="fas fa-id-card-alt"></i> ${res.data.guest} <span class="text-dark">已在 20201105 19:30:31 刷入</span></div>`);
        var guest=res.data[0];
        $("#stu-name").text(guest.student_id+' '+guest.name);
        $("#stu-class").val(guest.class);
        $("#stu-seat").val(guest.seat);
        // 駁回簽到
        function Reject() {
            Swal.fire({
                title: '確定撤回簽到紀錄嗎？',
                text: "如果掃到非外校生的QR Code，請直接撤回。<br>目前正在撤回的紀錄",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            })
        }

    }else
        alert('Error!!!');
});

