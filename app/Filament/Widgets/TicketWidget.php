<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TicketWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total de Tickets', Ticket::count())->chart([7, 2, 10, 3, 15, 4, 17])->color('success'),
            Card::make('Total Resuelto', Ticket::where('ticket_status_id', 1)->count())->chart([17, 16, 14, 15, 14, 13, 12])->color('success'),
            Card::make('Total en Proceso', Ticket::where('ticket_status_id', 2)->count())->chart([15, 4, 10, 2, 12, 4, 12])->color('warning'),
            Card::make('Total en Asignado', Ticket::where('ticket_status_id', 3)->count()),
            Card::make('Total en Pendiente Por', Ticket::where('ticket_status_id', 4)->count()),
            Card::make('Total en Cancelado', Ticket::where('ticket_status_id', 5)->count()),
        ];
    }
}
