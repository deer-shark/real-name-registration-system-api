// Variable
var history_last = {};

// 初始化
function init() {
    console.log('initialize');
    tableInitialize();
    formListener();
    buttonListener();
}

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

// 資料填報總覽
function tableInitialize() {
    $('#table_register').bootstrapTable({
        dataType: "json",
        classes: "table table-bordered table-striped table-sm",
        striped: true,
        pagination: true,
        sortable: true,
        uniqueId: 'id',
        sortName: 'id',
        pageNumber: 1,
        pageSize: 10,
        search: true,
        showPaginationSwitch: true,
        columns: [{
            field: 'id',
            title: 'ID',
        }, {
            field: 'school',
            title: '學校'
        }, {
            field: 'student_id',
            title: '學號'
        }, {
            field: 'class',
            title: '班級'
        }, {
            field: 'seat',
            title: '座號'
        }, {
            field: 'name',
            title: '姓名'
        }, {
            field: 'created_at',
            title: '填報時間'
        }/*, {
            field: 'times',
            title: '刷入次數'
        }*/, {
            field: 'qrcode',
            title: 'QR Code',
            width: 70,
            formatter: '<button id="btn_register_qrcode" class="btn btn-info">顯示</button>',
            events: operateEvents
        }, {
            field: 'delete',
            title: '刪除',
            width: 70,
            formatter: '<button id="btn_register_delete" class="btn btn-danger">刪除</button>',
            events: operateEvents
        }]
    });

    $('#table_checkin').bootstrapTable({
        dataType: "json",
        classes: "table table-bordered table-striped table-sm",
        striped: true,
        pagination: true,
        sortable: true,
        sortOrder: 'desc',
        uniqueId: 'id',
        sortName: 'id',
        pageNumber: 1,
        pageSize: 10,
        search: true,
        showPaginationSwitch: true,
        columns: [{
            field: 'id',
            title: 'ID',
        }, {
            field: 'guest.id',
            title: '填報ID'
        }, {
            field: 'guest.school',
            title: '學校'
        }, {
            field: 'guest.student_id',
            title: '學號'
        }, {
            field: 'guest.class',
            title: '班級'
        }, {
            field: 'guest.seat',
            title: '座號'
        }, {
            field: 'guest.name',
            title: '姓名'
        }, {
            field: 'guest.hash',
            title: 'Hash',
        }, {
            field: 'operator.name',
            title: '刷入者'
        }, {
            field: 'created_at',
            title: '刷入時間'
        }, {
            field: 'delete',
            title: '刪除',
            width: 70,
            formatter: '<button id="btn_history_delete" class="btn btn-danger">刪除</button>',
            events: operateEvents
        }]
    });
}

window.operateEvents = {
    // e      Event
    // value  undefined
    // row    rowdata
    // index  row
    'click #btn_register_delete': function (e, value, row, index) {
        /*Swal.fire({
            title: '確定撤除填報紀錄嗎？',
            text: "如果發現有不合格的資料，請直接除回。\r\n目前正在撤除 「" + history_last.guest.student_id + ' ' + history_last.guest.name + "」 的紀錄",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '確定撤除',
            cancelButtonText: '取消'
        }).then((result) => {
            if (result.isConfirmed) {
                var res = request('DELETE', '/admission/' + history_last.id);
                if (res.code == 204) {
                    Toast.fire({
                        icon: 'success',
                        title: '撤除成功'
                    });
                }
            }
        });*/
    }, 'click #btn_history_delete': function (e, value, row, index) {
        Swal.fire({
            title: '確定撤除入場紀錄嗎？',
            text: "目前正在撤除 「" + row.guest.school + ' ' + row.guest.student_id + ' ' + row.guest.name + "」 的紀錄",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '確定撤除',
            cancelButtonText: '取消'
        }).then((result) => {
            if (result.isConfirmed) {
                var res = request('DELETE', '/admission/' + row.id);
                if (res.code == 204) {
                    Toast.fire({
                        icon: 'success',
                        title: '撤除成功'
                    });
                }
            }
        });
    },
};

// Help
function contact() {
    Swal.fire({
        title: "需要協助？",
        text: "請聯絡xx高中xxx負責人", //訊息內容(可省略)
        icon: "question" //圖示(可省略) success/info/warning/error/question
        // showConfirmButton: false,
    })
}

function formListener() {
    // Resgister
    $('#form-register').submit(function () {
        var m_school = $('#form-register-school').val();
        var m_studentid = $('#form-register-studentid').val();
        var m_class = $('#form-register-class').val();
        var m_seat = $('#form-register-seat').val();
        var m_name = $('#form-register-name').val();

        if (m_school != null && m_studentid != '' && m_class != '' && m_seat != '' && m_name != '') {
            var data = {
                "school": m_school,
                "student_id": m_studentid,
                "class": m_class,
                "seat": m_seat,
                "name": m_name
            };
            var res = request('POST', '/register', data);
            if (res.code == 201) {
                Swal.fire({
                    title: '填報完成！',
                    html: '<div id="qrcode" class="d-flex justify-content-center"></div>',
                    footer: '<ol><li>請妥善保存您的 QR Code 以供入場查驗用。</li></ol>',
                    keydownListenerCapture: true
                });
                $('#qrcode').qrcode({
                    render: 'table',
                    colorDark: "#000000",
                    colorLight: "rgba(0,0,0,0)",
                    text: res.data.hash
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: '填報資料有誤',
                    text: '填報內容的格式可能有誤，請重新確認。'
                });
            }
        } else {
            Toast.fire({
                icon: 'error',
                title: '尚有欄位未填寫，請再次確認'
            });
        }
        return false;
    });

    // Login
    $('#form-login').submit(function () {
        var input_acc = $('#form-login-account').val();
        var input_pw = $('#form-login-password').val();
        if (input_acc == '' || input_pw == '') {
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
                location.replace("../a/overview");
                // }, 4000)
            });

            return false;
        } else if (res.code == 401) {
            Toast.fire({
                icon: 'error',
                title: '帳號或密碼有誤'
            });
            return false;
        } else {
            Swal.fire({
                icon: 'error',
                title: '伺服器錯誤',
                text: '500 ERROR!請聯繫管理員'
            });
            return false;
        }
        return false;
    });

    // Scan KSHS 學號
    $('#form-scan').submit(function () {
        var input_stuid = $('#form-stu-id').val();
        if (input_stuid == '') {
            Toast.fire({
                icon: 'warning',
                title: '學號資訊空白，請重新輸入'
            });
            return false;
        }
        var res = request('POST', `/admission`, {"student_id": input_stuid});
        if (res.code == 201) {
            if (res.data.times > 1) {
                var guest = res.data.guest;
                Swal.fire({
                    icon: 'error',
                    title: '重複刷入',
                    text: guest.student_id + ' ' + guest.name + '已刷入第' + res.data.times + '次',
                    timer: 3000,
                    timerProgressBar: true
                });
            } else {
                Toast.fire({
                    icon: 'success',
                    title: '刷入成功 @ ' + dayjs().format('HH:mm:ss')
                });
                //$("#recently").prepend(`<div class="alert alert-danger stu-in"><i class="fas fa-id-card-alt"></i> ${res.data.guest} <span class="text-dark">已在 20201105 19:30:31 刷入</span></div>`);
                var guest = res.data.guest;
                history_last = res.data;
                $("#stu-name").text(guest.school + ' ' + guest.name);
                $("#stu-id").val(guest.student_id);
                $("#stu-school").val(guest.school);
                $("#stu-class").val(guest.class);
                $("#stu-seat").val(guest.seat);
                $("#form-stu-id").val("");
            }
        } else if (res.code == 404) {
            Swal.fire({
                icon: 'error',
                title: '學號有誤',
                timer: 3000,
                timerProgressBar: true
            });
        }
        return false;
    });

}

function buttonListener() {
    // Reject-btn
    $('#reject-btn').click(function () {
        console.log("A");
        if (history_last == {})
            return false;
        Swal.fire({
            title: '確定撤回簽到紀錄嗎？',
            text: "如果掃到非外校生的QR Code，請直接撤回。\r\n目前正在撤回 「" + history_last.guest.student_id + ' ' + history_last.guest.name + "」 的紀錄",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '確定撤回',
            cancelButtonText: '取消'
        }).then((result) => {
            if (result.isConfirmed) {
                var res = request('DELETE', '/admission/' + history_last.id);
                if (res.code == 204) {
                    Toast.fire({
                        icon: 'success',
                        title: '撤回成功'
                    });
                }
            }
        });
        return false;
    });
}

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
            location.replace("../a/login");
            // }, 4000)
        });
    } else {
        Toast.fire({
            icon: 'error',
            title: '登出失敗'
        });
    }
}

async function getRegisterList() {
    var res = request('GET', '/register');
    return res.data;
}

async function getHistoryList() {
    var res = request('GET', '/admission');
    res.data.forEach(function (item, index) {
        res.data[index].guest.hash = item.guest.hash.substr(0, 6);
    })
    return res.data;
}



