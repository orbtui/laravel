<x-ui::app>

    <x-ui::app.root>

        <x-ui::app.header>
        </x-ui::app.header>

        <x-ui::app.wrapper>

            <x-ui::app.sidebar>
            </x-ui::app.sidebar>

            {{ $slot }}

        </x-ui::app.wrapper>

    </x-ui::app.root>

</x-ui::app>
