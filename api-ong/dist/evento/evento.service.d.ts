import { Repository } from 'typeorm';
import { Evento } from './evento.entity';
export declare class EventoService {
    private eventoRepository;
    constructor(eventoRepository: Repository<Evento>);
    findAll(): Promise<Evento[]>;
}
