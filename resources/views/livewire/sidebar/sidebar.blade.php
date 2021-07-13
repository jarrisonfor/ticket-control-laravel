<div>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <livewire:sidebar.menu :text="'tickets'" :icon="'assignment'"/>
                <livewire:sidebar.menu :text="'establecimientos'" :icon="'home'"/>
                <livewire:sidebar.menu :text="'productos'" :icon="'shopping_cart'"/>
                <livewire:sidebar.menu :text="'personas'" :icon="'perm_identity'"/>
                <livewire:sidebar.menu :text="'graficas'" :icon="'leaderboard'"/>
            </ul>
           <!--  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span class="material-icons-outlined">add_circle_outline</span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <livewire:sidebar.menu :text="'current month'" :icon="'file_present'"/>
                <livewire:sidebar.menu :text="'last quarter'" :icon="'file_present'"/>
                <livewire:sidebar.menu :text="'social engagement'" :icon="'file_present'"/>
            </ul> -->
        </div>
    </nav>
</div>