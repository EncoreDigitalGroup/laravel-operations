<?php

use EncoreDigitalGroup\LaravelOperations\LaravelOperation;

return new class extends LaravelOperation {
    /**
     * Determine if the operation is being processed asynchronously.
     *
     * @return bool
     */
    protected bool $async = true;

    /**
     * Process the operation.
     */
    public function process(): void
    {
        //
    }
};
