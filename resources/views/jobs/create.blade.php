<x-layout>
    <x-page-heading>new job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="title" name="title" placeholder="ceo" />
        <x-forms.input label="salary" name="salary" placeholder="$1,000,000 USD" />
        <x-forms.input label="location" name="location" placeholder="palm springs" />

        <x-forms.select label="schedule" name="schedule">
            <option>part time</option>
            <option>full time</option>
        </x-forms.select>

        <x-forms.input label="url" name="url" placeholder="https://wehire.com/jobs/ceo" />
        <x-forms.checkbox label="feature (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="tags (comma separated)" name="tags" placeholder="ceo, video, developer" />

        <x-forms.button>publish</x-forms.button>
    </x-forms.form>
</x-layout>