<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Link;

class LinkRepository implements LinkRepositoryInterface {
    public function create(Link $link): Link
    {
        // TODO: Implement create() method.
    }

    public function list(): array
    {
        // TODO: Implement list() method.
    }

    public function show(int $id): ?Link
    {
        // TODO: Implement show() method.
    }

    public function update(int $id, array $data): Link
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }
}
