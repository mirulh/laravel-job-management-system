<x-layout>
{{--    @dd($tags,$jobs)--}}
    <div class="d-flex flex-column gap-5">
        <section class="text-center pt-4">
            <h1 class="fw-bold">Let's Find Your Next Job</h1>

            <form action="" class="mt-3">
                <input type="text" placeholder="Web Developer..." class="rounded-4 bg-white-opacity-5 border-secondary border-opacity-10 px-3 py-3 text-white w-75">
            </form>
        </section>

        <section class="pt-5">
            <x-section-heading>Featured Job</x-section-heading>
            <div class="container-fluid gap-3 mt-4">
                <div class="row">
                    <div class="col">
                        <x-job-card/>
                    </div>
                    <div class="col">
                        <x-job-card/>
                    </div>
                    <div class="col">
                        <x-job-card/>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-5 remove-link-decoration d-flex gap-3">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>

            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-5 gap-4 d-flex flex-column">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>

        </section>
    </div>
</x-layout>
