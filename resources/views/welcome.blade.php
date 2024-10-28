<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>featured jobs</x-section-heading>
    
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
    
        <section>
            <x-section-heading>tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
            </div>
        </section>
    
        <section>
            <x-section-heading>recent jobs</x-section-heading>
        </section>
    </div>
</x-layout>