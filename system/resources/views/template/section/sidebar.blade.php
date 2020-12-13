@php
   function isActive($route){
      return request()->is($route) ? 'active' : '';
   }
@endphp

<div class="iq-sidebar">
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="{{isActive('newsfeed')}}">
               <a href="{{url("newsfeed")}}" class="iq-waves-effect"><i class="las la-newspaper"></i><span>Newsfeed</span></a>
            </li>
            <li class="{{isActive('konsultasi*')}}">
               <a href="{{url("konsultasi/chat")}}" class="iq-waves-effect"><i class="las la-tasks"></i><span>Konsultasi</span></a>
            </li>
            <li class="{{isActive('pengingat')}}">
               <a href="{{url("pengingat")}}" class="iq-waves-effect"><i class="las la-bell"></i><span>Pengingat</span></a>
            </li>
            <li class="{{isActive('events')}}">
               <a href="{{url("events")}}" class="iq-waves-effect"><i class="las la-calendar"></i><span>Events</span></a>
            </li>
         </ul>
      </nav>
      <div class="p-3"></div>
   </div>
</div>