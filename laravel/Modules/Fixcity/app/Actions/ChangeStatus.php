<?php

declare(strict_types=1);

namespace Modules\Fixcity\Actions;

use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Models\Ticket;

class ChangeStatus
{
    public function execute(Ticket $ticket, string $status, string $reason): void
    {
        $ticket->setStatus($status, $reason);
        $ticket->status = TicketStatusEnum::from($status);
        $ticket->save();
    }
}
