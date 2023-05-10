<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $recordTitleAttribute = 'numero_ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('numero_ticket')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion_reporte')
                    ->required(),
                Forms\Components\DateTimePicker::make('hora_inicio_ticket')
                    ->required(),
                Forms\Components\DateTimePicker::make('hora_diagnostico_cor')
                    ->required(),
                Forms\Components\DateTimePicker::make('hora_inicio_reparacion'),
                Forms\Components\DateTimePicker::make('hora_final_evento'),
                Forms\Components\DateTimePicker::make('hora_llegada_sitio'),
                Forms\Components\DateTimePicker::make('hora_restablecimiento_servicio'),
                Forms\Components\Textarea::make('impacto_ticket'),
                Forms\Components\DateTimePicker::make('hora_contacto_tecnico'),
                Forms\Components\Textarea::make('causa'),
                Forms\Components\Textarea::make('accion_tomada'),
                Forms\Components\Textarea::make('tramo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('numero_ticket'),
                Tables\Columns\TextColumn::make('descripcion_reporte'),
                Tables\Columns\TextColumn::make('hora_inicio_ticket')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hora_diagnostico_cor')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hora_inicio_reparacion')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hora_final_evento')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hora_llegada_sitio')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hora_restablecimiento_servicio')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('impacto_ticket'),
                Tables\Columns\TextColumn::make('hora_contacto_tecnico')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('causa'),
                Tables\Columns\TextColumn::make('accion_tomada'),
                Tables\Columns\TextColumn::make('tramo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
    
    public static function getGloballySearchableAttributes(): array
{
    return ['numero_ticket', 'descripcion_reporte'];
}

}
