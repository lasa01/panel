<?php

namespace Pterodactyl\Http\Requests\Api\Client\Servers\Files;

use Pterodactyl\Models\Permission;
use Pterodactyl\Contracts\Http\ClientPermissionsRequest;
use Pterodactyl\Http\Requests\Api\Client\ClientApiRequest;

class CopyFileRequest extends ClientApiRequest implements ClientPermissionsRequest
{
    /**
     * @return string
     */
    public function permission(): string
    {
        return Permission::ACTION_FILE_CREATE;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'location' => 'required|string',
        ];
    }
}
