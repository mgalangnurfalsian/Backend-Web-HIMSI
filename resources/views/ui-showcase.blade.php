@extends('layouts.app')

@section('title', 'UI Components Showcase — HIMSI DPC Cikarang')

@section('content')
<div class="pt-24 pb-16 bg-neutral-50 min-h-screen">
    <div class="section-container max-w-5xl">

        <header class="mb-12">
            <h1 class="font-heading font-bold text-3xl text-neutral-900 mb-2">HIMSI UI Component System</h1>
            <p class="text-neutral-500">Playground & dokumentasi interaktif untuk komponen antarmuka.</p>
        </header>

        <div class="space-y-16">

            {{-- 1. BUTTONS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">1. Buttons</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="space-y-4 flex flex-col items-start">
                        <span class="text-xs font-semibold text-neutral-400 uppercase tracking-wider">Primary</span>
                        <x-ui.button variant="primary">Primary Button</x-ui.button>
                        <x-ui.button variant="primary" icon="arrow-right" iconPos="right">With Icon</x-ui.button>
                        <x-ui.button variant="primary" loading>Loading</x-ui.button>
                        <x-ui.button variant="primary" disabled>Disabled</x-ui.button>
                    </div>
                    <div class="space-y-4 flex flex-col items-start">
                        <span class="text-xs font-semibold text-neutral-400 uppercase tracking-wider">Secondary</span>
                        <x-ui.button variant="secondary">Secondary</x-ui.button>
                        <x-ui.button variant="secondary" icon="plus">Add New</x-ui.button>
                    </div>
                    <div class="space-y-4 flex flex-col items-start">
                        <span class="text-xs font-semibold text-neutral-400 uppercase tracking-wider">Outline / Ghost</span>
                        <x-ui.button variant="outline">Outline</x-ui.button>
                        <x-ui.button variant="ghost">Ghost Button</x-ui.button>
                        <x-ui.button variant="danger">Danger</x-ui.button>
                    </div>
                    <div class="space-y-4 flex flex-col items-start">
                        <span class="text-xs font-semibold text-neutral-400 uppercase tracking-wider">Sizes</span>
                        <x-ui.button size="xs">Size XS</x-ui.button>
                        <x-ui.button size="sm">Size SM</x-ui.button>
                        <x-ui.button size="lg">Size LG</x-ui.button>
                        <x-ui.button size="xl">Size XL</x-ui.button>
                    </div>
                </div>
            </section>

            {{-- 2. BADGES --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">2. Badges</h2>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-ui.badge variant="default">Default</x-ui.badge>
                    <x-ui.badge variant="primary">Primary</x-ui.badge>
                    <x-ui.badge variant="secondary">Secondary</x-ui.badge>
                    <x-ui.badge variant="success">Success</x-ui.badge>
                    <x-ui.badge variant="warning">Warning</x-ui.badge>
                    <x-ui.badge variant="danger">Danger</x-ui.badge>
                    <x-ui.badge variant="info">Info</x-ui.badge>
                    <x-ui.badge variant="outline">Outline</x-ui.badge>
                </div>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-ui.badge variant="success" dot>Active Status</x-ui.badge>
                    <x-ui.badge variant="danger" dot>Offline</x-ui.badge>
                    <x-ui.badge variant="primary" icon="star">Starred</x-ui.badge>
                    <x-ui.badge variant="info" size="sm">Size SM</x-ui.badge>
                    <x-ui.badge variant="info" size="lg">Size LG</x-ui.badge>
                </div>
            </section>

            {{-- 3. ALERTS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">3. Alerts</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <x-ui.alert type="info" title="Informasi Baru">
                        Pendaftaran anggota baru telah dibuka.
                    </x-ui.alert>
                    <x-ui.alert type="success" title="Berhasil" dismissible>
                        Profil Anda berhasil diperbarui.
                    </x-ui.alert>
                    <x-ui.alert type="warning" title="Peringatan">
                        Kata sandi Anda terlalu lemah.
                    </x-ui.alert>
                    <x-ui.alert type="danger" title="Error" dismissible>
                        Terjadi kesalahan pada server.
                    </x-ui.alert>
                </div>
            </section>

            {{-- 4. AVATARS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">4. Avatars</h2>
                <div class="flex flex-wrap gap-8 items-end">
                    <div class="space-x-2">
                        <x-ui.avatar size="xs" fallback="A" />
                        <x-ui.avatar size="sm" fallback="B" />
                        <x-ui.avatar size="md" fallback="C" />
                        <x-ui.avatar size="lg" fallback="D" />
                        <x-ui.avatar size="xl" fallback="E" />
                    </div>
                    <div class="space-x-2">
                        <x-ui.avatar size="md" shape="square" src="https://picsum.photos/seed/avatar1/100" />
                        <x-ui.avatar size="lg" shape="square" src="https://picsum.photos/seed/avatar2/100" />
                    </div>
                    <div>
                        <x-ui.avatar-group size="md">
                            <x-ui.avatar src="https://picsum.photos/seed/1/100" />
                            <x-ui.avatar src="https://picsum.photos/seed/2/100" />
                            <x-ui.avatar src="https://picsum.photos/seed/3/100" />
                            <x-ui.avatar fallback="+3" />
                        </x-ui.avatar-group>
                    </div>
                </div>
            </section>

            {{-- 5. INPUTS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">5. Form Inputs</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-ui.input name="name" label="Nama Lengkap" placeholder="Masukkan nama" required />
                    <x-ui.input name="email" label="Email" type="email" placeholder="email@contoh.com" iconLeft="envelope" helper="Gunakan email kampus jika ada." />
                    <x-ui.input name="search" placeholder="Cari data..." iconLeft="magnifying-glass" />
                    <x-ui.input name="username" label="Username" state="success" value="johndoe" iconRight="check-circle" />
                    <x-ui.input name="password" label="Password" type="password" error="Password minimal 8 karakter" value="123" />
                    <x-ui.input name="disabled" label="Disabled Input" state="disabled" value="Tidak bisa diubah" />
                </div>
            </section>

            {{-- 6. TABS & TOOLTIPS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">6. Tabs & Tooltips</h2>
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-sm font-medium mb-3">Underline Tabs</h3>
                        <x-ui.tabs :tabs="['Overview', 'Members', 'Settings']" variant="underline">
                            <div x-show="activeTab === 0" class="p-4 bg-white rounded-lg border">Overview content...</div>
                            <div x-show="activeTab === 1" class="p-4 bg-white rounded-lg border">Members content...</div>
                            <div x-show="activeTab === 2" class="p-4 bg-white rounded-lg border">Settings content...</div>
                        </x-ui.tabs>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium mb-3">Pills Tabs & Tooltips</h3>
                        <x-ui.tabs :tabs="['Monthly', 'Yearly']" variant="pills">
                            <div x-show="activeTab === 0" class="p-4 mt-2">
                                <p class="mb-4">Hover tombol di bawah untuk melihat tooltip:</p>
                                <div class="flex gap-4">
                                    <x-ui.tooltip text="Tambah pengguna baru" position="top">
                                        <x-ui.button variant="secondary" icon="user-plus">Hover Me (Top)</x-ui.button>
                                    </x-ui.tooltip>
                                    <x-ui.tooltip text="Aksi berbahaya" position="right">
                                        <x-ui.button variant="danger" icon="trash">Delete</x-ui.button>
                                    </x-ui.tooltip>
                                </div>
                            </div>
                            <div x-show="activeTab === 1" class="p-4 mt-2">Yearly billing content...</div>
                        </x-ui.tabs>
                    </div>
                </div>
            </section>

            {{-- 7. PROGRESS & DIVIDERS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">7. Progress & Dividers</h2>
                <div class="grid md:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <x-ui.progress value="45" label="Project Completion" showValue />
                        <x-ui.progress value="75" color="success" size="sm" />
                        <x-ui.progress value="90" color="warning" size="lg" />
                    </div>
                    <div>
                        <p class="text-sm text-neutral-500 mb-2">Konten di atas divider</p>
                        <x-ui.divider type="horizontal" style="dashed">Atau</x-ui.divider>
                        <p class="text-sm text-neutral-500 mt-2">Konten di bawah divider</p>
                    </div>
                </div>
            </section>

            {{-- 8. CARDS --}}
            <section class="space-y-6">
                <h2 class="font-heading font-semibold text-xl text-neutral-800 border-b pb-2">8. Cards</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <x-ui.card>
                        <x-ui.card-header>
                            <h3 class="font-semibold">Default Card</h3>
                            <p class="text-xs text-neutral-500">Sub judul card</p>
                        </x-ui.card-header>
                        <x-ui.card-body>
                            Ini adalah body dari card default. Memiliki shadow kecil dan border ringan.
                        </x-ui.card-body>
                        <x-ui.card-footer>
                            <x-ui.button variant="outline" size="sm">Action</x-ui.button>
                        </x-ui.card-footer>
                    </x-ui.card>

                    <x-ui.card variant="elevated">
                        <img src="https://picsum.photos/seed/card/400/200" alt="Cover" class="w-full h-32 object-cover">
                        <x-ui.card-body>
                            <h3 class="font-semibold mb-2">Elevated Card</h3>
                            <p class="text-sm">Card ini menggunakan varian elevated untuk bayangan yang lebih kuat, cocok untuk fitur highlight.</p>
                        </x-ui.card-body>
                    </x-ui.card>

                    <x-ui.card variant="bordered">
                        <x-ui.card-body>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-accent-100 text-accent-600 flex items-center justify-center">
                                    <i class="ph-fill ph-lightbulb text-xl"></i>
                                </div>
                                <h3 class="font-semibold">Bordered Card</h3>
                            </div>
                            <p class="text-sm">Tanpa shadow, hanya menggunakan border tebal.</p>
                        </x-ui.card-body>
                    </x-ui.card>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
