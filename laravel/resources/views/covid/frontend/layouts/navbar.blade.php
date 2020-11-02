    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">xx高中實名制填報系統</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
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
                {{--  <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="快速查詢" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">填報</button>
                </form>  --}}
                <ul class="navbar-nav navbar-right">
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