<?php

namespace Modules\Translation\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Modules\Translation\Repositories\LocaleRepository;
use Modules\Translation\Transformers\LocaleSelectTransformer;
use Modules\Translation\Http\Requests\LocaleCodeRequest;

class LocaleController extends Controller
{
    private $locale;

    public function __construct(LocaleRepository $locale)
    {
        $this->locale = $locale;
    }

    public function listLocalesForSelect(LocaleCodeRequest $request)
    {
        return LocaleSelectTransformer::collection(
            $this->locale->listLocalesForSelect($request)
        );
    }
}
