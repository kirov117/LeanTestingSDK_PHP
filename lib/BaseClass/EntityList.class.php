<?php

namespace LeanTesting\API\Client;

class EntityList implements \Iterator
{
	protected $identifier;
	protected $collection;

	protected $request;
	protected $filters;

	protected $pagination;
	protected $real_page;

	protected function generateCollectionData() {
		$this->collection = [];
		$this->pagination = [];

		$this->request->updateOpts(['params' => $this->filters]);
		$raw = $this->request->exec();

		/* Generate pagination data */
		//TODO check if pagination data exists (each), exception otherwise
		$pagination = $raw['meta']['pagination'];

		//TODO check here if links exists, exwise
		unset($pagination['links']);

		$this->pagination = $pagination;


		//TODO check for identifier keyword key existance in raw, exwise

		$classIdent = $this->identifier;
		foreach (reset($raw) as $entity) {
			array_push($this->collection, new $classIdent($entity));
		}
	}

	public function __construct(APIRequest $request, $identifier, $filters = []) {
		$this->request    = $request;
		$this->identifier = __NAMESPACE__ . '\\' . $identifier;
		$this->filters    = $filters;

		if (array_key_exists('page', $filters)) {
			$this->real_page = $filters['page'];
		} else {
			$this->real_page = 1;
		}

		$this->generateCollectionData();
	}

	public function first() {
		if ($this->pagination['current_page'] === 1) {
			return;
		}

		$this->filters['page'] = 1;
		$this->generateCollectionData();
		$this->real_page = 1;
	}

	public function previous() {
		if ($this->pagination['current_page'] === 1) {
			return;
		}

		--$this->filters['page'];
		$this->generateCollectionData();
		--$this->real_page;
	}

	public function next() {
		//TODO foreach compat verification
		if (array_key_exists('page', $this->filters)) {
			++$this->filters['page'];
		} else {
			$this->filters['page'] = 2;
		}

		$this->generateCollectionData();

		++$this->real_page;
	}

	public function last() {
		if ($this->pagination['current_page'] === $this->pagination['total_pages']) {
			return;
		}

		$this->filters['page'] = $this->pagination['total_pages'];
		$this->generateCollectionData();
		$this->real_page = $this->pagination['total_pages'];
	}

	public function rewind() {
		$this->first();
	}

	public function current() {
		return $this->collection;
	}

	public function key() {
		return $this->real_page;
	}

	public function valid() {
		return (
			$this->real_page === $this->pagination['current_page'] &&
			$this->real_page <= $this->pagination['total_pages']
		);
	}

	public function total() {
		return $this->pagination['total'];
	}

	public function totalPages() {
		return $this->pagination['total_pages'];
	}

	public function count() {
		return $this->pagination['count'];
	}

	public function toArray() {
		$arr = [];
		foreach($collection as $entity) {
			array_push($arr, $entity->data);
		}
		return $arr;
	}
}
