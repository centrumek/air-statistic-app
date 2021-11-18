<?php
namespace App\Controller;

use App\TableGateways\StationGateway;

class StationController {

    private $db;
    private $requestMethod;
    private $stationId;

    private $stationGateway;

    public function __construct($db, $requestMethod, $stationId)
    {
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->stationId = $stationId;

        $this->stationGateway = new StationGateway($db);
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->stationId) {
                    $response = $this->getStation($this->stationId);
                } else {
                    $response = $this->getAllStations();
                };
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function getAllStations()
    {
        $result = $this->stationGateway->findAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function getStation($id)
    {
        $result = $this->stationGateway->find($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }
}