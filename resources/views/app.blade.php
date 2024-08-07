<x-layouts.main>
    <div class="bg-gray-100 p-4 text-center mb-8">
        <a href="https://github.com/Joshuawilfred/mail-outreach" target="_blank" class="text-lg font-semibold text-gray-700 hover:text-gray-900">
            ⭐ Star this repo on GitHub ⭐
        </a>
    </div>
    
    <section>
        <h2 class="px-3 text-kichwa-cha-habari">Birthday Emails for This Month</h2>
        <div>
            <x-tables.table>
                <x-tables.head>
                    <x-tables.row>
                        <x-tables.heading>Name</x-tables.heading>
                        <x-tables.heading>Email</x-tables.heading>
                        <x-tables.heading>Birthday</x-tables.heading>
                        <x-tables.heading>Status</x-tables.heading>
                    </x-tables.row>
                </x-tables.head>
                <x-tables.body>
                    @if ($clients->isNotEmpty())
                        @foreach ($clients as $client)
                            <x-tables.row>
                                <x-tables.cell>
                                    <span class="font-bold text-primary text-sm">{{ $client->name }}</span>
                                </x-tables.cell>

                                <x-tables.cell>
                                    {{ $client->email }}
                                </x-tables.cell>

                                <x-tables.cell>
                                    {{ $client->birthday }}
                                </x-tables.cell>

                                <x-tables.cell>
                                    @if ($client->email_sent === 0)
                                        <x-buttons.danger-btn> Not Sent </x-buttons.danger-btn>
                                    @else
                                        <x-buttons.success-btn> Sent</x-buttons.success-btn>
                                    @endif
                                </x-tables.cell>
                            </x-tables.row>
                        @endforeach
                    @else
                        <x-tables.empty-table tittle="All Good" message="No Upcoming Birthdays" />
                    @endif
                </x-tables.body>
            </x-tables.table>
        </div>
    </section>

    <br><br>

    <section>
        <h2 class="px-3 text-kichwa-cha-habari">Upcoming Holidays</h2>
        <div>
            <x-tables.table>
                <x-tables.head>
                    <x-tables.row>
                        <x-tables.heading>Name</x-tables.heading>
                        <x-tables.heading>Date</x-tables.heading>
                        <x-tables.heading>Status</x-tables.heading>
                    </x-tables.row>
                </x-tables.head>
                <x-tables.body>
                    @if ($holidays->isNotEmpty())
                        @foreach ($holidays as $holiday)
                            <x-tables.row>
                                <x-tables.cell>
                                    <span class="font-bold text-primary text-sm">{{ $holiday->name }}</span>
                                </x-tables.cell>

                                <x-tables.cell>
                                    {{ $holiday->date }}
                                </x-tables.cell>

                                <x-tables.cell>
                                    @if ($holiday->emails_sent)
                                        <x-buttons.success-btn>Sent ({{ $holiday->recipients_count }}
                                            recipients)</x-buttons.success-btn>
                                    @else
                                        <x-buttons.danger-btn>Not Sent</x-buttons.danger-btn>
                                    @endif
                                </x-tables.cell>
                            </x-tables.row>
                        @endforeach
                    @else
                        <x-tables.empty-table tittle="No Holidays" message="No Upcoming Holidays" />
                    @endif
                </x-tables.body>
            </x-tables.table>
        </div>
    </section>
</x-layouts.main>
