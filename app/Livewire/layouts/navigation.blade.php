<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard.nuevo')" :active="request()->routeIs('dashboard.nuevo')" wire:navigate>
                        {{ __('Dashboard Livewire') }}
                    </x-nav-link>
                </div>
            </div>