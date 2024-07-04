<x-layouts.main>
    <x-forms.form method="POST" action="/clients">

        <x-forms.input name="name" label="Name" />
        <x-forms.input name="email" label="email" />

        <x-forms.divider />

        <x-forms.input name="birthday" type="date" label="Date of birth" />

        <x-forms.button>Create Client</x-forms.button>
    </x-forms.form>
</x-layouts.main>