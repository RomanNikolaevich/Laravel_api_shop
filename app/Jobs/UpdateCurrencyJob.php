<?php

namespace App\Jobs;

use App\Services\Admin\CurrencyService;
use Carbon\Carbon;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateCurrencyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Carbon $date;

    /**
     * reate a new job instance.
     *
     * @param Carbon $date
     */
    public function __construct(Carbon $date)
    {
        $this->date = $date;
    }

    /**
     * Execute the job.
     *
     * @param CurrencyService $currency
     * @return void
     */
    public function handle(CurrencyService $currency): void
    {
        try {
            $currency->updateCurrencies($this->date);
        } catch (\Exception) {
            throw new Exception('no exchange rate for the specified date '.$this->date);
        }
    }
}
