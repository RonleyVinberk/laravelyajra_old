{{-- start page-sidebar-wrapper --}}
<div class="page-sidebar-wrapper">
    {{-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing --}}
    {{-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed --}}
    {{-- start page-sidebar --}}
    <div class="page-sidebar navbar-collapse collapse">
        {{-- start sidebar menu --}}
        {{-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) --}}
        {{-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode --}}
        {{-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode --}}
        {{-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing --}}
        {{-- DOC: Set data-keep-expand="true" to keep the submenues expanded --}}
        {{-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed --}}
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            {{-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element --}}
            <li class="sidebar-toggler-wrapper">
                {{-- start sidebar toggler button --}}
                <div class="sidebar-toggler"></div>
                {{-- end sidebar toggler button --}}
            </li>
            {{-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element --}}
            <li class="sidebar-search-wrapper">
                {{-- start begin responsive quick search form --}}
                {{-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box --}}
                {{-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box --}}
                <form class="sidebar-search " action="extra_search.html" method="POST">
                <a href="javascript:;" class="remove">
                <i class="icon-close"></i>
                </a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                    </span>
                </div>
                </form>
                {{-- end responsive quick search form --}}
            </li>
            <li class="heading">
                <h3 class="uppercase">Transactions</h3>
            </li>
            {{-- <li class="active open"> --}}
            <li>
                <a href="{{route('sales.index')}}">
                <i class="icon-basket"></i>
                <span class="title">Sales</span>
                {{-- <span class="selected"></span> --}}
                </a>
            </li>
            <li>
                <a href="{{route('purchases.index')}}">
                <i class="icon-basket"></i>
                <span class="title">Purchases</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Master Data</h3>
            </li>
            <li>
                <a href="{{route('itemcategories.index')}}">
                <i class="icon-settings"></i>
                <span class="title">Item Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('items.index')}}">
                <i class="icon-briefcase"></i>
                <span class="title">Items</span>
                </a>
            </li>
            <li>
                <a href="{{route('customers.index')}}">
                <i class="icon-users"></i>
                <span class="title">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{route('suppliers.index')}}">
                <i class="icon-users"></i>
                <span class="title">Suppliers</span>
                </a>
            </li>
            <li>
                <a href="{{route('discounts.index')}}">
                <i class="icon-diamond"></i>
                <span class="title">Discounts</span>
                </a>
            </li>
            <li>
                <a href="{{route('coupons.index')}}">
                <i class="icon-ticket"></i>
                <span class="title">Coupons</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- end page-sidebar --}}
</div>
{{-- end page-sidebar-wrapper --}}