import { EventoService } from './evento.service';
export declare class EventoController {
    private readonly eventoService;
    constructor(eventoService: EventoService);
    findAll(): Promise<import("./evento.entity").Evento[]>;
}
