<x-layout>
    <x-page-heading>register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="your name" name="name" />
        <x-forms.input label="email" name="email" type="email" />
        <x-forms.input label="password" name="password" type="password" />
        <x-forms.input label="password confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="employer name" name="employer" />
        <x-forms.input label="employer logo" name="logo" type="file" />

        <x-forms.button>create account</x-forms.button>
    </x-forms.form>
</x-layout>