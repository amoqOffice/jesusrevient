<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <img class="px-4 mt-4 mb-3" src="{{ asset('assets/back/images/logo.png') }}" alt="">

        {{-- <h2 class="text-dark" style="margin: 35px 10px 25px 20px; font-size: 25px; font-weight: 600"><i class="fa fa-home text-primary"></i> JESUS-REVIENT</h2> --}}
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                @include('back.layouts.menuChild')
            </ul>
        </div>
    </div>
</div>
