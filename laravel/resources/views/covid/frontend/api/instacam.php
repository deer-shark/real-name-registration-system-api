<video id="preview" style="width:100%;height:50%;"></video>
<!-- <textarea id="result" rows="4" cols="50"></textarea> -->
<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
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
            function Reject() {
                Swal.fire({
                    title: '確定撤回簽到紀錄嗎？',
                    text: "如果掃到非外校生的QR Code，請直接撤回。<br>目前正在撤回"+ guest.student_id+' '+guest.name +"的紀錄",
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
    Instascan.Camera.getCameras().then(function (cameras){
                    if(cameras.length>0){
                        scanner.start(cameras[0]);
                        $('[name="options"]').on('change',function(){
                            if($(this).val()==1){
                                if(cameras[0]!=""){
                                    scanner.start(cameras[0]);
                                    scanner.mirror=true;
                                }else{
                                    alert('No Front camera found!');
                                }
                            }else if($(this).val()==2){
                                if(cameras[1]!=""){
                                    scanner.start(cameras[1]);
                                    scanner.mirror=false;
                                }else{
                                    alert('No Back camera found!');
                                }
                            }
                        });
                    }else{
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
