<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

	protected $fillable = [
        'numero_ticket',
        'ticket_status_id',
        'ticket_group_id',
        'ticket_platform_id',
        'ticket_severity_id',
        'descripcion_reporte',
        'cor_responsible_id',
        'resolutive_area_id',
        'ticket_failure_id',
        'region_responsible_id',
        'hora_inicio_ticket',
        'hora_contacto_tecnico',
        'hora_diagnostico_cor',
        'hora_inicio_reparacion',
        'hora_final_evento',
        'hora_llegada_sitio',
        'hora_restablecimiento_servicio',
        'impacto_ticket',
        'localidad',
        'impacto_e1',
        'impacto_voz',
        'impacto_aba',
        'impacto_radio_base',
        'impacto_circuitos',
        'impacto_circuitos_movilnet',
        'elemento_red_afectado',
        'elemento_red_causo_falla',
        'causa',
        'accion_tomada',
        'tramo',
        'ticket_type_id',
        'client_id',
        'committee_id',
        'network_element_id',
        'cor_asignee_id',
        'ticket_origin_id',
        'region_responsible_backup_id'

    ];
}
