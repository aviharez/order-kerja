<div class="main-menu menu-fixed menu-light menu-shadow menu-accordion     " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span data-i18n="nav.category.general">General</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="General"></i>
        </li>
        <li class="@yield('beranda') nav-item"><a href="/home"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.color_palette.main">Dashboard</span></a>
        </li>
        <li class="@yield('notification') nav-item"><a href="/notifikasi"><i class="icon-bell"></i><span class="menu-title" data-i18n="nav.starter_kit.main">Notification</span></a>
        </li>
        <li class="@yield('profile') nav-item"><a href="/profil"><i class="icon-user"></i><span class="menu-title" data-i18n="nav.changelog.main">Profile</span></a>
        </li>
        <li class=" navigation-header">
          <span data-i18n="nav.category.pages">Order</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Order"></i>
        </li>
        <li class="@yield('buat_permintaan') nav-item"><a href="/order/create"><i class="icon-pencil"></i><span class="menu-title" data-i18n="nav.email-application.main">Create Order</span></a>
        </li>
        <li class="@yield('list_permintaan') nav-item"><a href="/order"><i class="icon-list"></i><span class="menu-title" data-i18n="nav.chat-application.main">Order List</span></a>
        </li>
        <li class=" navigation-header">
          <span data-i18n="nav.category.ui">Task</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Task"></i>
        </li>
        <li class="@yield('task_list') nav-item"><a href="/task-list"><i class="icon-notebook"></i><span class="menu-title" data-i18n="nav.cards.main">Task List</span></a>
        </li>
        <li class="@yield('on_progress') nav-item"><a href="/on-progress-task"><i class="icon-speedometer"></i><span class="menu-title" data-i18n="nav.advance_cards.main">On Progress Task</span></a>
        </li>
        <li class="@yield('finished_task') nav-item"><a href="/finished-task"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.content.main">Finished Task</span></a>
        </li>
      </ul>
    </div>
  </div>