<video id="preview" style="width:100%;height:50%;"></video>
<!-- <textarea id="result" rows="4" cols="50"></textarea> -->
<script type="text/javascript">
    let scanner = new Instascan.Scanner({video: document.getElementById('preview'), refractoryPeriod: 2000});
    scanner.addListener('scan', function (content) {
        var res = request('POST', `/admission`, {"hash": content});
        if (res.code == 201) {
            if (res.data.times > 1){
                var guest = res.data.guest;
                Swal.fire({
                    icon: 'error',
                    title: '重複刷入',
                    text: guest.student_id + ' ' + guest.name + '已刷入第'+ res.data.times +'次',
                    timer: 3000,
                    timerProgressBar: true
                });
            }else{
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
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'QR Code 有誤',
                timer: 3000,
                timerProgressBar: true
            });
    }});
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
            $('[name="options"]').on('change', function () {
                if ($(this).val() == 1) {
                    if (cameras[0] != "") {
                        scanner.start(cameras[0]);
                        scanner.mirror = true;
                    } else {
                        alert('No Front camera found!');
                    }
                } else if ($(this).val() == 2) {
                    if (cameras[1] != "") {
                        scanner.start(cameras[1]);
                        scanner.mirror = false;
                    } else {
                        alert('No Back camera found!');
                    }
                }
            });
        } else {
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function (e) {
        console.error(e);
    });
</script>
<div class="btn-group btn-group-toggle mb-5 d-flex justify-content-center" data-toggle="buttons">
    <label class="btn btn-primary active">
        <input type="radio" name="options" value="1" autocomplete="off" checked>自拍鏡頭
    </label>
    <label class="btn btn-secondary">
        <input type="radio" name="options" value="2" autocomplete="off">攝影鏡頭
    </label>
</div>
