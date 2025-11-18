<x-admin-layout title="Admin | Leads" page="leads">
    <main class="w-full flex-grow p-6">
        <section class="container mx-auto py-8">
            <div class="flex flex-col gap-y-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="block text-xl font-bold text-gray-900">Captured Leads</p>
                    <p class="text-sm text-gray-600">Monitor downloads from the Finance and Marketing funnels.</p>
                </div>
                <div>
                    <a href="{{ route('admin.leads.export') }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-indigo-500 px-6 py-3 text-xs font-bold uppercase text-white transition hover:bg-indigo-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                        </svg>
                        Download CSV
                    </a>
                </div>
            </div>
        </section>

        <div class="w-full overflow-x-auto rounded-xl bg-white shadow-md border border-gray-100">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Full Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Source
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @forelse ($leads as $lead)
                        <tr class="hover:bg-gray-50">
                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                <p class="font-semibold">{{ $lead->first_name }}</p>
                                <p class="text-xs text-gray-500">
                                    {{ optional($lead->created_at)->format('M d, Y · h:i A') }}
                                </p>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-700">
                                {{ $lead->email }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-sm">
                                <span
                                    class="inline-flex rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">
                                    {{ ucfirst($lead->source ?? 'N/A') }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-8 text-center text-sm text-gray-500">
                                No leads captured yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $leads->links() }}
        </div>
    </main>
</x-admin-layout>
