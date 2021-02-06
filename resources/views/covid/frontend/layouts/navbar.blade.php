<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <div class="container">
        {{-- <span class="navbar-brand"></span> --}}
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarrrrr"
                aria-controls="navbarrrrr" aria-expanded="false" aria-label="Toggle navigation"
                style="width:100%;border-color:#FFF;">
            {{-- <span class="navbar-toggler-icon text-white"></span> --}}
            <i class="fas fa-bars"></i> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarrrrr">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> 首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('basicform') }}"><i class="far fa-edit"></i> 一般身分填報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('query') }}"><i class="far fa-id-badge"></i> 通行證查詢</a>
                </li>
                {{--  <li class="nav-item">
                    <a class="nav-link" href="{{ route('basicform') }}">一般身分填報</a>
                </li>  --}}

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="A1" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-barcode"></i> 現場刷入
                    </a>
                    <div class="dropdown-menu" aria-labelledby="A1">
                        <a class="dropdown-item" href="{{ route('live.authcard') }}"><i class="far fa-id-badge"></i>
                            刷入識別證</a>
                        <a class="dropdown-item" href="{{ route('live.id') }}"><i class="far fa-id-card"></i> 刷入身分證</a>
                        <a class="dropdown-item" href="{{ route('live.stu') }}"><i class="fas fa-id-card-alt"></i> 刷入學生證</a>
                        <a class="dropdown-item" href="{{ route('live.scan') }}"><i class="fas fa-qrcode"></i> 掃入QR
                            ID</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="A2" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs"></i> 填報管理
                    </a>
                    <div class="dropdown-menu" aria-labelledby="A2">
                        <a class="dropdown-item" href="{{ route('data.manage') }}"><i class="fas fa-tasks"></i>
                            填報資料管理</a>
                        <a class="dropdown-item" href="{{ route('data.export') }}"><i
                                class="fas fa-cloud-download-alt"></i> 匯出資料</a>
                        <a class="dropdown-item" href="{{ route('data.import') }}"><i
                                class="fas fa-cloud-upload-alt"></i> 匯入資料</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="A4" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-toggle-on"></i> 系統管理
                    </a>
                    <div class="dropdown-menu" aria-labelledby="A4">
                        <a class="dropdown-item" href="{{ route('setting.events') }}"><i class="fas fa-tools"></i> 活動管理</a>
                        <a class="dropdown-item" href="{{ route('setting.function') }}"><i
                                class="fas fa-mouse-pointer"></i> 功能管理</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="A4" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-alt"></i> 嗨！xx高中。
                    </a>
                    <div class="dropdown-menu" aria-labelledby="A4">
                        <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> 登入</a>
                        <a class="dropdown-item" href="{{ route('account') }}"><i class="far fa-user-circle"></i> 修改組織資料</a>
                        <a class="dropdown-item" href="{{ route('account.pwd') }}"><i class="fas fa-key"></i> 修改登入密碼</a>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}">登出 <i class="fas fa-sign-out-alt"></i></a> --}}
                        <a class="dropdown-item" onclick="Logout()">登出 <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                </li>
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> 管理區</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
