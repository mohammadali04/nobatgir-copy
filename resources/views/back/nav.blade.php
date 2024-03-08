<nav id="sidebar" class="sidebar sidebar-offcanvas" style="padding:0 20px">
        <ul class="nav">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item nav-category">مدیریت</li>
          <li class="nav-item">
            <a aria-controls="form-elements" aria-expanded="false" href="#form-elements" data-bs-toggle="collapse" class="nav-link">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">دسته ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="form-elements" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a  href="{{Route('admin.category.index')}}" class="nav-link">مدیریت دسته ها</a></li>
                <li class="nav-item"><a  href="{{Route('admin.category.create')}}" class="nav-link">ایجاد دسته ی جدید</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a aria-controls="tables" aria-expanded="false" href="#tables" data-bs-toggle="collapse" class="nav-link">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">درباره ی شرکت</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="tables" class="collapse">
            @php
            use App\Models\About;
            $bio=About::find(1);
            $bioId=$bio->id;
            @endphp
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a href="{{Route('admin.bio.edit',$bioId)}}" class="nav-link">درباره ی ما</a></li>
                <li class="nav-item"> <a href="{{Route('admin.show.option')}}" class="nav-link">نمایش گزینه ها</a></li>
                <li class="nav-item"> <a href="{{Route('admin.faq.index')}}" class="nav-link">نمایش سوالات پزتکرار</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">اعضا</li>
          <li class="nav-item">
            <a aria-controls="auth" aria-expanded="false"  href="" data-bs-toggle="collapse" class="nav-link">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">نمایش اعضا</span>
              <i class="menu-arrow"></i>
            </a>
            <div id="auth" class="collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a href="pages/samples/login.html" class="nav-link"> Login </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>