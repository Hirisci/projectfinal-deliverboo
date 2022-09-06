@extends('layouts.app')

@section('content')
<div class="container menu">
    
    {{-- menu sinistro della darshboard --}}
    <div class="menu-sx menu-hidden">
        <ul class="py-4">
            <div class="section-title-container">
                <div class="section-title px-3"><h6>ACCOUNT</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.restaurant.index')}}">Visualizza ristorante</a></li>
                <li><a href="{{route('admin.restaurant.edit', Auth::user())}}">Modifica dati ristorante</a></li>
            </ul>
            
            <div class="section-title-container">
                <div class="section-title px-3"><h6>PIATTI</h6></div>
                <div class="triangle-element"></div>
            </div>
            
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.plate.index')}}">Visualizza piatti</a></li>
                <li><a href="{{route('admin.plate.create')}}">Aggiungi piatti</a></li>
            </ul>
            <div class="section-title-container">
                <div class="section-title px-3"><h6>STATISCHE VENDITA</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.order.index')}}">Visualizza ordini</a></li>
            </ul>
            
        </ul>
    </div>
    {{-- menu a scomparsa della visuale mobile --}}
    <div class="menu-top-mobile">
        <div class="d-flex justify-content-around">
            <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 20C26.3125 20 31.4286 15.5234 31.4286 10C31.4286 4.47656 26.3125 0 20 0C13.6875 0 8.57143 4.47656 8.57143 10C8.57143 15.5234 13.6875 20 20 20ZM28 22.5H26.5089C24.5268 23.2969 22.3214 23.75 20 23.75C17.6786 23.75 15.4821 23.2969 13.4911 22.5H12C5.375 22.5 0 27.2031 0 33V36.25C0 38.3203 1.91964 40 4.28571 40H35.7143C38.0804 40 40 38.3203 40 36.25V33C40 27.2031 34.625 22.5 28 22.5Z" fill="#9667E0"/>
                    </svg> 
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('admin.restaurant.index')}}">Visualizza ristorante</a></li>
                  <li><a class="dropdown-item"  href="{{route('admin.restaurant.edit', Auth::user())}}">Modifica dati ristorante</a></li>
                </ul>
              </div>
    
            <div class="btn-group">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5007 22.2333L18.2174 17.5166L6.51738 5.83326C3.91738 8.43326 3.91738 12.6499 6.51738 15.2666L13.5007 22.2333ZM24.8007 19.2166C27.3507 20.3999 30.934 19.5666 33.584 16.9166C36.7674 13.7333 37.384 9.1666 34.934 6.7166C32.5007 4.28326 27.934 4.88326 24.734 8.0666C22.084 10.7166 21.2507 14.2999 22.434 16.8499L6.16738 33.1166L8.51738 35.4666L20.0007 24.0166L31.4674 35.4833L33.8174 33.1333L22.3507 21.6666L24.8007 19.2166Z" fill="#9667E0"/>
                </svg>            
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.plate.index')}}">Visualizza piatti</a></li>
                <li><a class="dropdown-item" href="{{route('admin.plate.create')}}">Aggiungi piatti</a></li>
            </ul>
            </ul>
            </div>
            
              <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.2573 0C21.8637 0 21.5439 0.319956 21.5439 0.714246C21.5439 0.750874 21.5596 0.782654 21.5649 0.818205H21.5439V17.7522C21.5439 18.1465 21.8637 18.4664 22.2573 18.4664H39.1824V18.4454C39.218 18.4508 39.2497 18.4664 39.2869 18.4664C39.6804 18.4664 40.0002 18.1465 40.0002 17.7522C39.899 7.99191 32.0128 0.101804 22.2573 0Z" fill="#9667E0"/>
                        <path d="M35.8746 21.8634C35.8746 21.4691 35.5553 21.1491 35.1612 21.1491H19.6025C19.2084 21.1491 18.8891 20.8292 18.8891 20.4349V4.92563H18.8681C18.8735 4.89008 18.8891 4.8583 18.8891 4.82167C18.8891 4.42684 18.5693 4.10742 18.1753 4.10742C18.158 4.10742 18.144 4.11604 18.1273 4.11712V4.11227C18.0638 4.11173 18.0008 4.10742 17.9373 4.10742C8.03105 4.10742 0 12.1424 0 22.0535C0 31.9646 8.03105 39.9996 17.9373 39.9996C27.8435 39.9996 35.8746 31.9646 35.8746 22.0535C35.8746 21.9964 35.8719 21.9399 35.8708 21.8822C35.8708 21.8752 35.8746 21.8698 35.8746 21.8634Z" fill="#9667E0"/>
                    </svg>                 
                </button>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="{{route('admin.order.index')}}">Visualizza ordini</a></li>
                </ul>
              </div>

        </div>
          
          
    </div>


    {{-- menu destro della dashboard --}}
    <div class="menu-dx py-4">
        @yield('menu')
    </div>

    
</div>
@endsection