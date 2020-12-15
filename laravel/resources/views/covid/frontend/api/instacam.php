<video id="preview" style="width:100%;height:50%;"></video>
<!-- <textarea id="result" rows="4" cols="50"></textarea> -->
<script type="text/javascript">
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
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
