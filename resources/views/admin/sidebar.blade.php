
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{route('admin_home')}}">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Book Admin</span></a></div>
                <li class="label">@auth {{Auth::user()->name}} @endauth</li>

                <li>
                    <a href="{{route('admin_category')}}"><i class="fas fa-th-large"></i>Category</a>
                </li>
                <li>
                    <a href="{{route('admin.book.listele')}}"><i class="fas fa-th-large"></i>Book</a>
                </li>
                <li>
                    <a href="{{route('admin.settings.index')}}"><i class="fas fa-th-large"></i>Settings</a>
                </li>
                <li>
                    <a href="{{route('admin.messages.index')}}"><i class="fas fa-th-large"></i>Messages</a>
                </li>
                <li>
                    <a href="{{route('admin.faq.index')}}"><i class="fas fa-th-large"></i>Faq</a>
                </li>

                <li>
                    <a href="{{route('admin_category')}}"><i class="fas fa-th-large"></i>Images</a>
                </li>
                <li>
                    <a href="{{route('admin_category')}}"><i class="fas fa-th-large"></i>Comments</a>
                </li>
                <li>
                    <a href="{{route('admin_category')}}"><i class="fas fa-th-large"></i>Borrows</a>
                </li>

                <li>
                    <a href="{{route('admin.user.index')}}"><i class="fas fa-th-large"></i>User</a>
                </li>



            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->
