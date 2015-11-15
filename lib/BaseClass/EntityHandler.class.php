<?php

namespace LeanTesting\API\Client;

class EntityHandler
{
    protected $origin;

    public function __construct(PHPClient $origin) {
        $this->origin = $origin;
    }

    public function create($fields) {
    }

    public function all($filters = []) {
        if (!is_array($filters)) {
            throw new SDKInvalidArgException('`$filters` must be an array');
        } else {
            foreach ($filters as $fk => $fv) {
                if (!in_array($fk, ['limit', 'page'])) {
                    throw new SDKInvalidArgException('unsupported ' . $fk . ' for `$filters`');
                }
            }
        }
    }

    public function find($id) {
    }

    public function delete($id) {
    }

    public function update($id, $fields) {
    }
}
