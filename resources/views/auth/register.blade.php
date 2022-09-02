@extends('layouts.login')

{{-- sezione della nav bar  --}}
@section('nav-bar')
    <div class="container-nav mb-3  p-2 d-flex align-items-center justify-content-between"> 
        {{-- logo del sito --}}
        <a href="{{url('/')}}">
            <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-github-violet.png" alt="logo provvisorio">
        </a>
        
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn-main" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <div >
                        <a class="btn-main" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
        </ul>
    </div>
@endsection

@section('form')
<div class="container">
    <div class="row justify-content-center d-flex align-items-center">
        {{-- svg della schermata login  --}}
        <div class="col-5">
            <svg width="476" height="346" viewBox="0 0 476 346" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M325.223 346H349.203C350.858 346 352.2 344.629 352.2 342.938C352.2 341.246 350.858 339.875 349.203 339.875H325.223C323.568 339.875 322.226 341.246 322.226 342.938C322.226 344.629 323.568 346 325.223 346Z" fill="#6E49CB"/>
                <path d="M325.223 346H349.203C350.858 346 352.2 344.629 352.2 342.938C352.2 341.246 350.858 339.875 349.203 339.875H325.223C323.568 339.875 322.226 341.246 322.226 342.938C322.226 344.629 323.568 346 325.223 346Z" fill="white" fill-opacity="0.8"/>
                <path d="M175.352 346H307.239C308.894 346 310.236 344.629 310.236 342.938C310.236 341.246 308.894 339.875 307.239 339.875H175.352C173.696 339.875 172.354 341.246 172.354 342.938C172.354 344.629 173.696 346 175.352 346Z" fill="#6E49CB"/>
                <path d="M175.352 346H307.239C308.894 346 310.236 344.629 310.236 342.938C310.236 341.246 308.894 339.875 307.239 339.875H175.352C173.696 339.875 172.354 341.246 172.354 342.938C172.354 344.629 173.696 346 175.352 346Z" fill="white" fill-opacity="0.8"/>
                <path d="M277.264 333.75H325.223C326.879 333.75 328.221 332.379 328.221 330.688C328.221 328.996 326.879 327.625 325.223 327.625H277.264C275.609 327.625 274.267 328.996 274.267 330.688C274.267 332.379 275.609 333.75 277.264 333.75Z" fill="#6E49CB"/>
                <path d="M277.264 333.75H325.223C326.879 333.75 328.221 332.379 328.221 330.688C328.221 328.996 326.879 327.625 325.223 327.625H277.264C275.609 327.625 274.267 328.996 274.267 330.688C274.267 332.379 275.609 333.75 277.264 333.75Z" fill="white" fill-opacity="0.8"/>
                <path d="M127.393 333.75H259.28C260.935 333.75 262.277 332.379 262.277 330.688C262.277 328.996 260.935 327.625 259.28 327.625H127.393C125.738 327.625 124.396 328.996 124.396 330.688C124.396 332.379 125.738 333.75 127.393 333.75Z" fill="#6E49CB"/>
                <path d="M127.393 333.75H259.28C260.935 333.75 262.277 332.379 262.277 330.688C262.277 328.996 260.935 327.625 259.28 327.625H127.393C125.738 327.625 124.396 328.996 124.396 330.688C124.396 332.379 125.738 333.75 127.393 333.75Z" fill="white" fill-opacity="0.8"/>
                <path d="M467.601 104.062H317.73C314.419 104.062 311.735 106.805 311.735 110.187V278.625C311.735 282.008 314.419 284.75 317.73 284.75H467.601C470.912 284.75 473.596 282.008 473.596 278.625V110.187C473.596 106.805 470.912 104.062 467.601 104.062Z" fill="white" stroke="#DFDFDF" stroke-width="4.32929"/>
                <path d="M407.652 165.312H377.678C367.746 165.312 359.694 173.539 359.694 183.688C359.694 193.836 367.746 202.062 377.678 202.062H407.652C417.585 202.062 425.637 193.836 425.637 183.688C425.637 173.539 417.585 165.312 407.652 165.312Z" fill="#FC6D26"/>
                <path d="M407.652 165.312H377.678C367.746 165.312 359.694 173.539 359.694 183.688C359.694 193.836 367.746 202.062 377.678 202.062H407.652C417.585 202.062 425.637 193.836 425.637 183.688C425.637 173.539 417.585 165.312 407.652 165.312Z" fill="white" fill-opacity="0.8"/>
                <path d="M407.653 199C415.93 199 422.64 192.144 422.64 183.688C422.64 175.231 415.93 168.375 407.653 168.375C399.376 168.375 392.666 175.231 392.666 183.688C392.666 192.144 399.376 199 407.653 199Z" fill="#FCF0EA" stroke="#F4C6AC" stroke-width="4.32929"/>
                <path d="M403.156 179.094L412.149 188.281M412.149 179.094L403.156 188.281" stroke="#F4C6AC" stroke-width="2.16464" stroke-linecap="round"/>
                <path d="M407.652 214.313H377.678C367.746 214.313 359.694 222.54 359.694 232.688C359.694 242.836 367.746 251.063 377.678 251.063H407.652C417.585 251.063 425.637 242.836 425.637 232.688C425.637 222.54 417.585 214.313 407.652 214.313Z" fill="#FC6D26"/>
                <path d="M407.652 214.313H377.678C367.746 214.313 359.694 222.54 359.694 232.688C359.694 242.836 367.746 251.063 377.678 251.063H407.652C417.585 251.063 425.637 242.836 425.637 232.688C425.637 222.54 417.585 214.313 407.652 214.313Z" fill="white" fill-opacity="0.8"/>
                <path d="M407.653 248C415.93 248 422.64 241.145 422.64 232.688C422.64 224.231 415.93 217.375 407.653 217.375C399.376 217.375 392.666 224.231 392.666 232.688C392.666 241.145 399.376 248 407.653 248Z" fill="#FCF0EA" stroke="#F4C6AC" stroke-width="4.32929"/>
                <path d="M403.156 228.094L412.149 237.281M412.149 228.094L403.156 237.281" stroke="#F4C6AC" stroke-width="2.16464" stroke-linecap="round"/>
                <path d="M368.686 114.781H416.645C417.44 114.781 418.202 115.104 418.764 115.678C419.327 116.253 419.642 117.032 419.642 117.844C419.642 118.656 419.327 119.435 418.764 120.01C418.202 120.584 417.44 120.906 416.645 120.906H368.686C367.891 120.906 367.129 120.584 366.567 120.01C366.005 119.435 365.689 118.656 365.689 117.844C365.689 117.032 366.005 116.253 366.567 115.678C367.129 115.104 367.891 114.781 368.686 114.781Z" fill="#6E49CB"/>
                <path d="M368.686 114.781H416.645C417.44 114.781 418.202 115.104 418.764 115.678C419.327 116.253 419.642 117.032 419.642 117.844C419.642 118.656 419.327 119.435 418.764 120.01C418.202 120.584 417.44 120.906 416.645 120.906H368.686C367.891 120.906 367.129 120.584 366.567 120.01C366.005 119.435 365.689 118.656 365.689 117.844C365.689 117.032 366.005 116.253 366.567 115.678C367.129 115.104 367.891 114.781 368.686 114.781Z" fill="white" fill-opacity="0.8"/>
                <path d="M347.704 131.089L469.1 130.627" stroke="#DFDFDF" stroke-width="2.16464" stroke-linecap="square"/>
                <path d="M158.866 119.375H8.99485C5.68399 119.375 3 122.117 3 125.5V278.625C3 282.008 5.68399 284.75 8.99485 284.75H158.866C162.177 284.75 164.861 282.008 164.861 278.625V125.5C164.861 122.117 162.177 119.375 158.866 119.375Z" fill="white" stroke="#DFDFDF" stroke-width="4.32929"/>
                <path d="M34.4729 179.094V266.375" stroke="#DFDFDF" stroke-width="4.32929" stroke-linecap="round"/>
                <path d="M58.4523 130.094H106.411C107.206 130.094 107.968 130.417 108.531 130.991C109.093 131.565 109.409 132.344 109.409 133.156C109.409 133.969 109.093 134.748 108.531 135.322C107.968 135.896 107.206 136.219 106.411 136.219H58.4523C57.6573 136.219 56.8949 135.896 56.3328 135.322C55.7706 134.748 55.4548 133.969 55.4548 133.156C55.4548 132.344 55.7706 131.565 56.3328 130.991C56.8949 130.417 57.6573 130.094 58.4523 130.094Z" fill="#6E49CB"/>
                <path d="M58.4523 130.094H106.411C107.206 130.094 107.968 130.417 108.531 130.991C109.093 131.565 109.409 132.344 109.409 133.156C109.409 133.969 109.093 134.748 108.531 135.322C107.968 135.896 107.206 136.219 106.411 136.219H58.4523C57.6573 136.219 56.8949 135.896 56.3328 135.322C55.7706 134.748 55.4548 133.969 55.4548 133.156C55.4548 132.344 55.7706 131.565 56.3328 130.991C56.8949 130.417 57.6573 130.094 58.4523 130.094Z" fill="white" fill-opacity="0.8"/>
                <path d="M19.4858 251.062H143.879" stroke="#DFDFDF" stroke-width="4.32929" stroke-linecap="round"/>
                <path d="M7.49634 146.401L128.892 145.939" stroke="#DFDFDF" stroke-width="2.16464" stroke-linecap="square"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M70.4421 192.875V186.75C70.4421 183.501 71.7053 180.385 73.9538 178.088C76.2023 175.791 79.252 174.5 82.4318 174.5C85.6117 174.5 88.6613 175.791 90.9098 178.088C93.1583 180.385 94.4215 183.501 94.4215 186.75V192.875H100.416V223.5H64.4473V192.875H70.4421ZM76.437 192.875H88.4267V186.75C88.4267 185.126 87.7951 183.568 86.6708 182.419C85.5466 181.27 84.0218 180.625 82.4318 180.625C80.8419 180.625 79.3171 181.27 78.1928 182.419C77.0686 183.568 76.437 185.126 76.437 186.75V192.875ZM70.4421 199V217.375H94.4215V199H70.4421ZM79.4344 205.125H85.4293V211.25H79.4344V205.125Z" fill="#A7A7A7"/>
                <path d="M331.218 32.0938H145.378C138.756 32.0938 133.388 37.5783 133.388 44.3438V297C133.388 303.766 138.756 309.25 145.378 309.25H331.218C337.84 309.25 343.208 303.766 343.208 297V44.3438C343.208 37.5783 337.84 32.0938 331.218 32.0938Z" fill="#EFEDF8" stroke="#6E49CB" stroke-width="4.32929"/>
                <path d="M293.75 44.3438H182.845C179.535 44.3438 176.851 47.086 176.851 50.4688V53.5313C176.851 56.914 179.535 59.6563 182.845 59.6563H293.75C297.061 59.6563 299.745 56.914 299.745 53.5313V50.4688C299.745 47.086 297.061 44.3438 293.75 44.3438Z" fill="#FC6D26" stroke="white" stroke-width="2.16464"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M314.69 182.156C314.719 181.282 314.732 180.404 314.732 179.527C314.732 137.185 282.116 102.677 241.295 101.06V182.156H314.69Z" fill="white" stroke="#FC6D26" stroke-width="4.32929"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M230.804 122.456C196.733 123.267 169.357 151.743 169.357 186.75C169.357 222.269 197.539 251.062 232.303 251.062C264.891 251.062 291.937 225.674 294.967 192.875H230.804V122.456Z" fill="white" stroke="#C2B7E6" stroke-width="2.16464"/>
                <path d="M137.884 69.8388L338.712 69.3794" stroke="#C2B7E6" stroke-width="2.16464" stroke-linecap="square"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M271.269 157.656C272.859 157.656 274.384 158.302 275.508 159.45C276.633 160.599 277.264 162.157 277.264 163.781C277.264 165.406 276.633 166.964 275.508 168.112C274.384 169.261 272.859 169.906 271.269 169.906C269.68 169.906 268.155 169.261 267.03 168.112C265.906 166.964 265.275 165.406 265.275 163.781C265.275 162.157 265.906 160.599 267.03 159.45C268.155 158.302 269.68 157.656 271.269 157.656ZM271.269 127.031C275.451 127.031 278.346 131.472 276.878 135.634L271.269 157.656L265.661 135.634C264.193 131.472 267.088 127.031 271.269 127.031Z" fill="#FC6D26"/>
                <path d="M295.249 228.094H323.725M167.858 107.125H220.313" stroke="#C2B7E6" stroke-width="4.32929" stroke-linecap="round"/>
                <path d="M167.858 272.5H308.737M167.858 286.281H284.758" stroke="white" stroke-width="4.32929" stroke-linecap="round"/>
                <path d="M295.249 240.344H311.735" stroke="#C2B7E6" stroke-width="4.32929" stroke-linecap="round"/>
                <path d="M371.683 82.625H304.241C302.585 82.625 301.243 83.9961 301.243 85.6875C301.243 87.3789 302.585 88.75 304.241 88.75H371.683C373.338 88.75 374.68 87.3789 374.68 85.6875C374.68 83.9961 373.338 82.625 371.683 82.625Z" fill="#6E49CB"/>
                <path d="M371.683 82.625H304.241C302.585 82.625 301.243 83.9961 301.243 85.6875C301.243 87.3789 302.585 88.75 304.241 88.75H371.683C373.338 88.75 374.68 87.3789 374.68 85.6875C374.68 83.9961 373.338 82.625 371.683 82.625Z" fill="white" fill-opacity="0.8"/>
                <path d="M389.938 85.6875H422.64C444.989 85.6875 463.105 67.1777 463.105 44.3438C463.105 21.5098 444.989 3 422.64 3C400.291 3 382.175 21.5098 382.175 44.3438C382.16 54.6963 385.961 64.6748 392.821 72.2937M259.28 116.312C259.28 99.3983 272.7 85.6875 289.254 85.6875" stroke="#C2B7E6" stroke-width="4.32929" stroke-linecap="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M418.959 21.9385C419.158 21.3284 419.54 20.7978 420.05 20.4218C420.561 20.0458 421.174 19.8436 421.804 19.8438H423.476C424.105 19.8436 424.719 20.0458 425.229 20.4218C425.74 20.7978 426.122 21.3284 426.321 21.9385L427.894 26.7665C429.009 27.1126 430.076 27.5674 431.087 28.1186L435.544 25.8417C436.106 25.554 436.743 25.4544 437.364 25.5572C437.986 25.66 438.559 25.9599 439.004 26.4143L440.188 27.624C440.633 28.0787 440.927 28.6648 441.027 29.2994C441.128 29.934 441.03 30.5848 440.749 31.1597L438.522 35.7121C439.06 36.7457 439.505 37.8359 439.844 38.9737L444.569 40.583C445.166 40.7862 445.685 41.1763 446.053 41.6979C446.421 42.2195 446.619 42.8463 446.619 43.4893V45.1982C446.619 45.8412 446.421 46.468 446.053 46.9896C445.685 47.5112 445.166 47.9013 444.569 48.1045L439.844 49.7123C439.507 50.8406 439.064 51.9328 438.522 52.9739L440.749 57.5278C441.03 58.1027 441.128 58.7535 441.027 59.3881C440.927 60.0227 440.633 60.6088 440.188 61.0635L439.004 62.2732C438.559 62.7276 437.986 63.0275 437.364 63.1303C436.743 63.2331 436.106 63.1335 435.544 62.8458L431.088 60.5689C430.076 61.1201 429.009 61.5749 427.896 61.921L426.321 66.749C426.122 67.3591 425.74 67.8897 425.229 68.2657C424.719 68.6417 424.105 68.8439 423.476 68.8437H421.804C421.174 68.8439 420.561 68.6417 420.05 68.2657C419.54 67.8897 419.158 67.3591 418.959 66.749L417.385 61.921C416.281 61.5772 415.212 61.1249 414.193 60.5704L409.736 62.8458C409.173 63.1335 408.536 63.2331 407.915 63.1303C407.294 63.0275 406.72 62.7276 406.275 62.2732L405.091 61.0635C404.647 60.6088 404.353 60.0227 404.252 59.3881C404.152 58.7535 404.249 58.1027 404.531 57.5278L406.759 52.9754C406.216 51.9344 405.773 50.8421 405.436 49.7138L400.711 48.1045C400.114 47.9013 399.594 47.5112 399.226 46.9896C398.858 46.468 398.66 45.8412 398.66 45.1982V43.4893C398.66 42.8463 398.858 42.2195 399.226 41.6979C399.594 41.1763 400.114 40.7862 400.711 40.583L405.436 38.9752C405.775 37.8359 406.22 36.7457 406.759 35.7136L404.531 31.1597C404.249 30.5848 404.152 29.934 404.252 29.2994C404.353 28.6648 404.647 28.0787 405.091 27.624L406.275 26.4143C406.72 25.9599 407.294 25.66 407.915 25.5572C408.536 25.4544 409.173 25.554 409.736 25.8417L414.192 28.1171C415.203 27.5674 416.27 27.1126 417.384 26.7665L418.959 21.9385ZM422.64 56.5937C425.82 56.5937 428.869 55.3031 431.118 53.0058C433.366 50.7085 434.63 47.5926 434.63 44.3437C434.63 41.0948 433.366 37.979 431.118 35.6817C428.869 33.3844 425.82 32.0937 422.64 32.0937C419.46 32.0937 416.41 33.3844 414.162 35.6817C411.913 37.979 410.65 41.0948 410.65 44.3437C410.65 47.5926 411.913 50.7085 414.162 53.0058C416.41 55.3031 419.46 56.5937 422.64 56.5937Z" fill="#6E49CB"/>
                </svg>
                
        </div>

        {{-- form di registrazione --}}
        <div class="col-md-7">
            <div class="card register-card ">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group  row align-items-center gap-3">

                            <div class="d-flex">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }} *</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="d-flex align-content-center">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} *</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            
                            <div class="d-flex align-content-center">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} *</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" minlength="8">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="d-flex align-content-center">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }} *</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" minlength="8">
                            </div>
                            
                            <div class="d-flex align-content-center">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                                
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="d-flex align-content-center">
                                <label for="vat" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA') }}</label>
                                <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat') }}" autocomplete="vat" autofocus maxlength="11" minlength="11" pattern="[0-9]+">
                                
                                @error('vat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="d-flex align-content-center">
                                <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Restaurant Image (URL)') }}</label>
                                <input id="img" type="file" class="form-control-file file-padding @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}">
                                
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="">
                                <h6 class="mb-4">Seleziona tra le seguenti categorie:</h6>
                                
                                    @foreach ($categories as $category)
                                    <div class="form-check form-check-inline">
                                        <div class="d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" id="{{$category->slug}}" value="{{$category->id}}" name="categories_active[]" >
                                            <label class="form-check-label" for="{{$category->slug}}">{{$category->name}}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                        
                                       
                                
                                
                            </div>
                     
                            <div class="col-md-12 d-flex flex-row-reverse">
                                <button type="submit" class="btn-main">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
