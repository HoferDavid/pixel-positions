<x-layout>
    <x-page-heading>login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="email" name="email" type="email" />
        <x-forms.input label="password" name="password" type="password" />

        <x-forms.button>login</x-forms.button>
    </x-forms.form>
</x-layout>