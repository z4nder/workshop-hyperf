<?php

declare(strict_types=1);

namespace App\Controller;

use _PHPStan_95cdbe577\Fig\Http\Message\StatusCodeInterface;
use App\Model\Link;
use DateInterval;
use DateTime;
use DateTimeInterface;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Stringable\Str;

class LinkController
{
    public function create(RequestInterface $request, ResponseInterface $response)
    {
        return $response->json($request->all())->withStatus(StatusCodeInterface::STATUS_CREATED);
    }

    public function show(int $id, RequestInterface $request, ResponseInterface $response)
    {

        $link = Link::findOrFail($id);

        return $response->json($link);
    }
}
