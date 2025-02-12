<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateCar extends CreateRecord {
    protected static string $resource = CarResource::class;

    protected function afterCreate(): void {

        $data = $this->form->getState();

        if ( !empty( $data[ 'image_upload' ] ) ) {
            foreach ( $data[ 'image_upload' ] as $file ) {

                if ( is_string( $file ) ) {

                    $path = $file;
                } else {

                    $path = $file->store( 'cars', 'public' );
                }

                $image = $this->record->images()->create( [ 'path' => $path ] );
            }
        }
    }
}
