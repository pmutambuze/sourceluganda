<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="{{route('admin')}}"
                    class="nav-link {{ Nav::isRoute('admin') }}">
                    <i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                  <a href="{{route('journals.admin.index')}}"
                   class="nav-link
                   {{ Nav::isRoute('journals.admin.index') }}
                   {{ Nav::isRoute('journals.create') }}
                   {{ Nav::isRoute('journals.edit') }}"
                   ><i class="fe fe-check-square"></i> Journals</a>
                 </li>
                 <li class="nav-item">
                   <a href="{{route('journals.layout.create')}}"
                   class="nav-link
                   {{ Nav::isRoute('journals.misconduct.edit') }}
                   {{ Nav::isRoute('journals.plagiarismpolicy.edit') }}
                   {{ Nav::isRoute('journals.guidelines.edit') }}
                   {{ Nav::isRoute('journals.paymentpolicy.edit') }}
                   {{ Nav::isRoute('journals.paperpublication.edit') }}
                   {{ Nav::isRoute('journals.papersubmission.edit') }}
                   {{ Nav::isRoute('journals.layout.edit') }}"><i class="fe fe-check-square"></i> Journal policies</a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('library.admin.index')}}" class="nav-link"><i class="fe fe-file-text"></i> Library</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('members.index')}}" class="nav-link {{ Nav::isResource('members') }}"><i class="fe fe-image"></i> Members</a>
                  </li><li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link"><i class="fe fe-image"></i> Categories</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"><i class="fe fe-file-text"></i> Payment Plan</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
