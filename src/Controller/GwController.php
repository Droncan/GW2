<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Jonas Ostermann
 * Date: 11.09.2018
 * Time: 11:33
 */

namespace App\Controller;

use App\Entity\Hero;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\HttpFoundation\Response;

class GwController
{

    public function getGw()
    {

        $array = [

        ];

        
        try {
            $response = $guzzle->request('GET', 'https://google.de', []);
        } catch (GuzzleException $e) {

        }

        return new Response('<html><body>Lucky number: '.$response->getStatusCode().'</body></html>');

    }

}