<aside class="control-sidebar control-sidebar-light" style="top: 57px; height: 610px; display: block;">
  <!-- Control sidebar content goes here -->
  <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-host-transition" style="height: 610px;">
    <div class="os-resize-observer-host">
      <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
      <div class="os-resize-observer observed"></div>
    </div>
    <div class="os-content-glue" style="margin: -16px; width: 249px; height: 609px;"></div>
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        {{-- Content Sidebar --}}
        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
          @yield('sidebarcontent')
        </div>
      </div>
    </div>
  </div>
</aside>