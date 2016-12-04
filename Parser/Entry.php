<?

namespace Parser;

class Entry extends EntryAbstract implements EntryInterface {

	public $title;
	public $link;
	public $description;

	public function getTitle() {
	    return $this->title;
	}

	public function getLink() {
	    return $this->link;
	}

	public function getDescription() {
	    return $this->description;
	}

}