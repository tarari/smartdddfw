<?php

namespace Domain\Loan;

use Domain\Loan\Loan;
use Domain\Loan\LoanId;

interface LoanRepository{
    public function save(Loan $loan):void;
    public function byId(LoanId $id):?Loan;    
}