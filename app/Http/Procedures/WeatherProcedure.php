<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use App\Http\Requests\WeatherGetByDateRequest;
use App\Http\Requests\WeatherGetHistoryRequest;
use App\Models\History;
use Sajya\Server\Procedure;

class WeatherProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name = 'weather';

    /**
     * @param WeatherGetByDateRequest $request
     *
     * @return null|object
     */
    public function getByDate(WeatherGetByDateRequest $request) {

        return History::whereDateAt($request->input('date'))->first();
    }

    /**
     * @param WeatherGetHistoryRequest $request
     *
     * @return object[]
     */
    public function getHistory(WeatherGetHistoryRequest $request) {

        return History::query()
            ->limit($request->input('lastDays'))
            ->orderByDesc('date_at')
            ->get();
    }
}
