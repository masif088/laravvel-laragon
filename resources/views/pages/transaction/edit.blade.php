<x-argon-layout>
    <x-slot name="title">
        User
    </x-slot>
    <x-slot name="breadcrumbs">
        User => #;
    </x-slot>
    <div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-12/12 lg:flex-none">
            <div
                class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border m-5">
                <div class="flex-auto p-5 ">
                    <h3 class="mb-5">Ubah Pembayaran Pembayaran</h3>
                    <livewire:form.transaction action="update" :data-id="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-argon-layout>
