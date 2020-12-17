<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        {{--  <a class="navbar-brand" href="{{ route('dashboard') }}">xx高中，您好！</a>  --}}
        <a class="navbar-brand" href="{{ route('dashboard') }}">管理首頁</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dashboardnav"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="dashboardnav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="A1" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-barcode"></i> 現場刷入
                    </a>
                    <div class="dropdown-menu" aria-labelledby="A1">
                        <a class="dropdown-item" href="{{ route('liveauthcard') }}"><i class="far fa-id-badge"></i>
                            刷入識別證</a>
                        <a class="dropdown-item" href="{{ route('liveid') }}"><i class="far fa-id-card"></i> 刷入身分證</a>
                        <a class="dropdown-item" href="{{ route('livestu') }}"><i class="fas fa-id-card-alt"></i> 刷入學生證</a>
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
                        <a class="dropdown-item" href="{{ route('account') }}"><i class="far fa-user-circle"></i> 修改組織資料</a>
                        <a class="dropdown-item" href="{{ route('setting.events') }}"><i class="fas fa-tools"></i> 活動管理</a>
                        <a class="dropdown-item" href="{{ route('setting.function') }}"><i
                                class="fas fa-mouse-pointer"></i> 功能管理</a>
                    </div>
                </li>
                {{--  <li class="nav-item">
                    <a class="nav-link" href="{{ route('basicform') }}">一般身分填報</a>
                </li>  --}}
            </ul>
            <ul class="navbar-nav navbar-right">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">登出 <i class="fas fa-sign-out-alt"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">離開管理區 <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarrrrr"
                aria-controls="navbarrrrr" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <span class="nav-link">嗨！xx高中。</span>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> 管理區</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
