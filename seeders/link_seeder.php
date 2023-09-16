<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\Database\Seeders\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        for ($i =0; $i < 100; $i++) {
            $link = new \App\Model\Link([
                'title' => 'Site: ' . $i,
                'alias' => dechex(time()+$i),
                'url' => 'https://z4nder.dev',
                'expires_in' => (new DateTime())->add(new DateInterval('P2D'))->format(DateTimeInterface::W3C),
            ]);
            $link->save();
            $link->access()->saveMany([
                new \App\Model\LinkAccess([
                    'origin' => '192.1.1.1',
                    'access_data' => 'teste_access_data',
                    'query_params' => json_encode(['teste' => 'teste']),
                ])
            ]);
        }
    }
}
