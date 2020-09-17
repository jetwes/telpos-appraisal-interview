<?php

namespace Jetwes\TelposAppraisalInterview;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jetwes\TelposAppraisalInterview\TelposAppraisalInterview
 */
class TelposAppraisalInterviewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'telpos-appraisal-interview';
    }
}
