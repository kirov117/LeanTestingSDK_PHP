<?php

namespace LeanTesting\API\Client;

class Bug extends Entity
{
	public $comments;
	public $attachments;

	public function __construct($data) {
        parent::__construct($data);

        $this->comments    = new BugCommentsHandler($this->data['id']);
        $this->attachments = new BugAttachmentsHandler($this->data['id']);
    }
}