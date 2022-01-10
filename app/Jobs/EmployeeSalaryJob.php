<?php

namespace App\Jobs;

use App\Models\EmployeeSalary;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EmployeeSalaryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $employees;

    public function __construct($employees)
    {
        $this->employees = $employees;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->employees as $employee ) {

            EmployeeSalary::create([
                'employees_id'      => $employee->id,
                'total_accepted'    => $employee->total_salary,
                'date_time'         => date("Y-m-d H:i:s")
            ]);
            
        }
    }
}
