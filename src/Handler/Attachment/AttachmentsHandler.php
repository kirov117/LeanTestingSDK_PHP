<?php

namespace LeanTesting\API\Client;

class AttachmentsHandler extends EntityHandler
{
    public function find($id) {
        parent::find($id);

        $req = new APIRequest($this->origin, '/v1/attachments/' . $id, 'GET');
        return new BugAttachment($this->origin, $req->exec());
    }

    public function delete($id) {
        parent::delete($id);

        $req = new APIRequest($this->origin, '/v1/attachments/' . $id, 'DELETE');
        return $req->exec();
    }
}
