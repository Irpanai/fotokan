<section class="space-y-6">
    <header>
        <h2 class="text-xl font-black text-gray-900 tracking-tight">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-xs text-gray-500 font-medium">
            {{ __('Setelah akun dihapus, semua data dan sumber daya akan terhapus secara permanen. Pastikan Anda telah mengunduh semua aset yang ingin Anda simpan.') }}
        </p>
    </header>

    <button
        type="button"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2.5 rounded-lg text-sm transition-colors shadow-sm mt-4"
    >
        {{ __('Hapus Akun Saya') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-xl font-black text-gray-900 tracking-tight">
                {{ __('Apakah Anda yakin ingin menghapus akun ini?') }}
            </h2>

            <p class="mt-2 text-xs text-gray-500 font-medium">
                {{ __('Setelah akun dihapus, semua data dan sumber daya akan terhapus secara permanen. Masukkan kata sandi Anda untuk mengonfirmasi.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-bold px-6 py-2.5 rounded-lg text-sm transition-colors">
                    {{ __('Batal') }}
                </button>

                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2.5 rounded-lg text-sm transition-colors shadow-sm">
                    {{ __('Hapus Akun Permanen') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
