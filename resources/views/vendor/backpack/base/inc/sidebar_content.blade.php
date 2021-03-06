<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
<!-- ================================================ -->
<!-- ==== Recommended place for admin menu items ==== -->
<!-- ================================================ -->
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url('admin/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
        <li><a href="{{ url('admin/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
        <li><a href="{{ url('admin/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>