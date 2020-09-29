<!-- Side Nav START -->
<div class="side-nav expand-lg">
          <div class="side-nav-inner">
            <ul class="side-nav-menu">
              <li class="side-nav-header">
                <span>Bo'limlar</span>
              </li>
              <li class="nav-item dropdown  {{Request::path() === '/dashboard' ? 'open' : ''}}">
                <a href="/admin/dashboard" class="dropdown-toggle">
                  <span class="icon-holder">
                    <i class="lni-dashboard"></i>
                  </span>
                  <span class="title">Yangiliklar</span>
                  <span class="arrow">
                    <i class="lni-chevron-right"></i>
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-book"></i>
                    </span>
                    <span class="title">Kitoblar</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="/books">Kitoblar</a>
                  </li>
                  <!-- <li>
                    <a href=#>kjjk</a>
                  </li>
                  <li>
                    <a href=#"chat-app.html">Chat App</a>
                  </li>
                  <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                    <a href=#"contact.html">Contact</a>
                  </li> -->
                  
                </ul>
              </li>

              <li class="nav-item dropdown {{Request::path() === 'about' ? 'open' : ''}}">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-users"></i>
                    </span>
                    <span class="title">Biz haqimizda</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="#">Ko'rish</a>
                  </li>
                  <li>
                    <a href="#">Tahrir qilish</a>
                  </li>                  
                </ul>
              </li>


            </ul>
          </div>
        </div>
        <!-- Side Nav END -->
