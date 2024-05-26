<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Orders</h1>


            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Home</a>
                </li>


                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>


                <li class="breadcrumb-item text-muted">Dashboards</li>

            </ul>

        </div>


        <div class="d-flex align-items-center gap-2 gap-lg-3">

            <x-ui::button color="secondary">
                Add Target
            </x-ui::button>

            <x-ui::button class="btn-outline" color="primary" wire:click="open">
                Add Booking
                <x-ui::icon type="light" name="add" size="7" marginStart="1" />
            </x-ui::button>

        </div>

    </div>

</div>