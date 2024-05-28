<!DOCTYPE html>
<html lang="en">

    <x-ui::head>
    </x-ui::head>

    <x-ui::body>
        <x-ui::root>
            <x-ui::page-container>
                {{ $slot }}
            </x-ui::page-container>
        </x-ui::root>
    </x-ui::body>

</html>
