<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\InvoiceRepository;
use Exception;
use Illuminate\View\View;

class InvoiceDashboard extends Component
{
    use WithPagination;

    public string $activeTab = 'All';

    // Mark as nullable to avoid serialization issues.
    protected ?InvoiceRepository $invoiceRepository = null;

    /**
     * Inject the InvoiceRepository.
     *
     * @param InvoiceRepository $invoiceRepository
     */
    public function mount(InvoiceRepository $invoiceRepository): void
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    /**
     * Reinitialize non-serializable properties on every request.
     *
     * @return void
     */
    public function hydrate(): void
    {
        if (!$this->invoiceRepository) {
            $this->invoiceRepository = app(InvoiceRepository::class);
        }
    }

    /**
     * Set the active tab and reset pagination.
     *
     * @param string $tab
     * @return void
     */
    public function setActiveTab(string $tab): void
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }

    /**
     * Validate the active tab value.
     *
     * @return void
     */
    public function updatedActiveTab(): void
    {
        if (!in_array($this->activeTab, ['All', 'Draft', 'Outstanding', 'Paid'], true)) {
            $this->activeTab = 'All';
        }
    }

    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        try {
            $invoices = $this->invoiceRepository->getInvoices($this->activeTab);
        } catch (Exception $e) {
            session()->flash('error', 'Failed to load invoices.');
            $invoices = collect([]);
        }

        return view('livewire.invoice-dashboard', ['invoices' => $invoices])
            ->layout('components.layouts.app');
    }
}
